<?php

namespace Modules\Onlineshop\Console;

use App\Support\Webp;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Modules\Onlineshop\Entities\OnliItem;

class ConvertExistingImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'onlineshop:convert-images-webp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convierte a WebP todas las imágenes de items de la tienda y de los sliders del CMS';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $relatives = [];

        // 1) Imágenes de los items de la tienda
        OnliItem::whereNotNull('image')->select('image')->chunk(200, function ($items) use (&$relatives) {
            foreach ($items as $item) {
                $relative = Webp::relativeFromUrl($item->image);
                if ($relative !== null) {
                    $relatives[] = $relative;
                }
            }
        });

        // 2) Imágenes de los sliders del CMS
        $slides = \Modules\CMS\Entities\CmsSectionItem::with('item.items')->get();
        foreach ($slides as $slide) {
            foreach ($slide->item->items ?? [] as $subItem) {
                $content = (string) ($subItem->content ?? '');
                if ($content !== '') {
                    $relative = Webp::relativeFromUrl($content);
                    if ($relative !== null) {
                        $relatives[] = $relative;
                    }
                }
            }
        }

        $relatives = array_values(array_unique(array_filter($relatives)));

        if (empty($relatives)) {
            $this->info('No hay imágenes para convertir.');

            return self::SUCCESS;
        }

        $this->info('Convirtiendo ' . count($relatives) . ' imágenes a WebP...');

        $converted = 0;
        $failed = 0;
        $skipped = 0;

        $bar = $this->output->createProgressBar(count($relatives));
        $bar->start();

        foreach ($relatives as $relative) {
            $extension = strtolower(pathinfo($relative, PATHINFO_EXTENSION));

            if (! in_array($extension, ['png', 'jpg', 'jpeg'])) {
                $skipped++;
                $bar->advance();
                continue;
            }

            if (! Storage::disk('public')->exists($relative)) {
                $skipped++;
                $bar->advance();
                continue;
            }

            if (Webp::convertRelative($relative)) {
                $converted++;
            } else {
                $failed++;
                $this->newLine();
                $this->warn("No se pudo convertir: {$relative}");
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);
        $this->info("✅ Convertidas: {$converted} | Omitidas: {$skipped} | Fallidas: {$failed}");

        return self::SUCCESS;
    }
}
