<?php

namespace Modules\Onlineshop\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Modules\Onlineshop\Entities\OnliItem;

class GenerateSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'onlineshop:generate-slugs {--force : Regenera el slug de TODOS los items, incluso los que ya lo tienen}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera el slug URL-amigable para todos los items de la tienda que no lo tengan';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $items = OnliItem::orderBy('id')
            ->when(! $this->option('force'), function ($q) {
                $q->where(function ($qq) {
                    $qq->whereNull('slug')->orWhere('slug', '');
                });
            })
            ->get(['id', 'name', 'slug']);

        if ($items->isEmpty()) {
            $this->info('No hay items pendientes de generar slug.');

            return self::SUCCESS;
        }

        $this->info("Generando slugs para {$items->count()} items...");

        $bar = $this->output->createProgressBar($items->count());
        $bar->start();

        foreach ($items as $item) {
            DB::table('onli_items')
                ->where('id', $item->id)
                ->update(['slug' => OnliItem::generateSlug($item->name, $item->id)]);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('✅ Slugs generados correctamente.');

        return self::SUCCESS;
    }
}
