<?php

namespace App\View\Components\Capperu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;

class HeaderArea extends Component
{
    /**
     * Create a new component instance.
     */
    protected $header;
    public function __construct()
    {
        $this->header = CmsSection::where('component_id', 'peru_header_area_1')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.capperu.header-area', [
            'header' => $this->header
        ]);
    }
}
