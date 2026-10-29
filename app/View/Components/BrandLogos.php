<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Academic\Entities\AcaInstitution;

class BrandLogos extends Component
{
    /**
     * Logos de instituciones aliadas registradas (activas y con imagen).
     */
    public function render(): View|Closure|string
    {
        $logos = AcaInstitution::where('status', true)
            ->whereNotNull('image')
            ->where('image', '!=', '')
            ->orderBy('id')
            ->take(12)
            ->get();

        return view('components.brand-logos', [
            'logos' => $logos,
        ]);
    }
}
