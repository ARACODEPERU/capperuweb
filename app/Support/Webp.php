<?php

namespace App\Support;

use Illuminate\Support\Facades\Storage;

/**
 * Servicio de conversión de imágenes a WebP.
 *
 * Estrategia: cada imagen original (ej: uploads/onlineshop/items/10.png)
 * genera una copia hermana con sufijo .webp (uploads/onlineshop/items/10.png.webp).
 * Así no se toca la base de datos y el rollback es instantáneo (borrar los .webp).
 */
class Webp
{
    /**
     * Devuelve la URL WebP de una imagen si ya existe su versión convertida,
     * o la URL original como fallback.
     */
    public static function url(string $url): string
    {
        $relative = self::relativeFromUrl($url);

        if ($relative === null) {
            return $url;
        }

        $extension = strtolower(pathinfo($relative, PATHINFO_EXTENSION));

        if (! in_array($extension, ['png', 'jpg', 'jpeg'])) {
            return $url;
        }

        $webpRelative = $relative . '.webp';

        if (Storage::disk('public')->exists($webpRelative)) {
            return asset('storage/' . $webpRelative);
        }

        return $url;
    }

    /**
     * Extrae la ruta relativa al disco "public" desde una URL tipo
     * http://dominio/storage/uploads/onlineshop/items/10.png
     */
    public static function relativeFromUrl(string $url): ?string
    {
        $position = strpos($url, '/storage/');

        if ($position === false) {
            return null;
        }

        return substr($url, $position + strlen('/storage/'));
    }

    /**
     * Convierte una imagen del disco "public" a WebP (copia hermana .webp).
     * Omite la conversión si el .webp ya existe y es más nuevo que el original.
     */
    public static function convertRelative(string $relative): bool
    {
        $disk = Storage::disk('public');

        if (! $disk->exists($relative)) {
            return false;
        }

        $extension = strtolower(pathinfo($relative, PATHINFO_EXTENSION));

        if (! in_array($extension, ['png', 'jpg', 'jpeg'])) {
            return false;
        }

        $webpRelative = $relative . '.webp';

        // Ya existe y está al día
        if ($disk->exists($webpRelative) && $disk->lastModified($webpRelative) >= $disk->lastModified($relative)) {
            return true;
        }

        $absolute = $disk->path($relative);

        $image = match ($extension) {
            'png' => @imagecreatefrompng($absolute),
            'jpeg', 'jpg' => @imagecreatefromjpeg($absolute),
            default => false,
        };

        if (! $image) {
            return false;
        }

        // Preservar transparencia en PNG
        imagepalettetotruecolor($image);
        imagealphablending($image, false);
        imagesavealpha($image, true);

        $result = imagewebp($image, $disk->path($webpRelative), 82);
        imagedestroy($image);

        return (bool) $result;
    }

    /**
     * Convierte una imagen a partir de su URL pública completa.
     */
    public static function convertFromUrl(string $url): bool
    {
        $relative = self::relativeFromUrl($url);

        if ($relative === null) {
            return false;
        }

        return self::convertRelative($relative);
    }
}
