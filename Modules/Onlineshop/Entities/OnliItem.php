<?php

namespace Modules\Onlineshop\Entities;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\Academic\Entities\AcaCourse;

class OnliItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'entitie',
        'category_description',
        'name',
        'slug',
        'description',
        'scor',
        'price',
        'discount',
        'image',
        'status',
        'additional',
        'additional1',
        'additional2',
        'additional3',
        'additional4',
        'additional5'
    ];

    protected static function newFactory()
    {
        return \Modules\Onlineshop\Database\factories\OnliItemFactory::new();
    }

    /**
     * Genera un slug URL-amigable a partir del nombre del item.
     * Formato: {nombre-slugificado} (ej: diplomado-en-derecho-laboral-en-el-sector-publico)
     * Resuelve colisiones añadiendo un sufijo numérico: -2, -3, ...
     */
    public static function generateSlug(string $name, ?int $id = null): string
    {
        $baseSlug = Str::slug($name);

        if ($baseSlug === '') {
            $baseSlug = 'programa';
        }

        $slug = $baseSlug;

        // Si el slug está libre, usarlo tal cual
        if (! self::where('slug', $slug)
            ->when($id, fn ($q) => $q->where('id', '!=', $id))
            ->exists()) {
            return $slug;
        }

        // Resolver colisión probando -2, -3, ...
        $counter = 2;
        do {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        } while (self::where('slug', $slug)
            ->when($id, fn ($q) => $q->where('id', '!=', $id))
            ->exists());

        return $slug;
    }

    /**
     * Slug usado para construir la URL pública del detalle del programa.
     */
    public function getRouteSlugAttribute(): string
    {
        return $this->slug ?: Str::slug($this->name ?: 'programa');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (OnliItem $item) {
            if (empty($item->slug) && ! empty($item->name)) {
                // En creación el id aún no existe (autonumérico): pasar null
                $item->slug = self::generateSlug($item->name, $item->id ? (int) $item->id : null);
            }
        });

        // Auto-conversión a WebP de la imagen del item (copia hermana .webp)
        static::saved(function (OnliItem $item) {
            if ($item->image && config('onlineshop.webp_autoconvert', true)) {
                \App\Support\Webp::convertFromUrl($item->image);
            }
        });

        static::updating(function (OnliItem $item) {
            // Regenerar solo si cambió el nombre y no se definió un slug manual
            if ($item->isDirty('name') && ! $item->isDirty('slug') && ! empty($item->name)) {
                $item->slug = self::generateSlug($item->name, (int) $item->id);
            }

            if (empty($item->slug) && ! empty($item->name)) {
                $item->slug = self::generateSlug($item->name, (int) $item->id);
            }
        });
    }

    public function getImageAttribute($value)
    {
        return ($value ? asset('storage/' . $value) : asset($value));
    }
    public function images(): HasMany
    {
        return $this->hasMany(OnliItemImage::class, 'item_id');
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'item_id');
    }

    public function specifications(): HasMany
    {
        return $this->hasMany(OnliItemSpecification::class, 'onli_item_id');
    }

    public function course(): HasOne
    {
        return $this->hasOne(AcaCourse::class, 'id', 'item_id');
    }
}
