<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\Onlineshop\Entities\OnliItem;

class CoursesNew extends Component
{
    /**
     * Create a new component instance.
     */
    protected $programs;
    public function __construct()
    {
        $this->programs = OnliItem::join('aca_courses', 'onli_items.item_id', '=', 'aca_courses.id')
            ->join('aca_category_courses', 'aca_category_courses.id', 'aca_courses.category_id')
            ->join('aca_teachers', 'aca_teachers.id', '=', 'aca_courses.teacher_id')
            ->leftJoin('people', 'people.id', '=', 'aca_teachers.person_id')
            ->leftJoin('users', 'users.person_id', '=', 'people.id')
            ->select(
                'onli_items.id as id',
                'onli_items.name as name',
                'onli_items.image as image',
                'onli_items.price as price',
                'onli_items.additional as additional',
                'onli_items.additional1 as additional1',
                'onli_items.additional2 as additional2',
                'people.names as teacher',
                'aca_teachers.id as teacher_id',
                'users.avatar as avatar',
                'onli_items.description as description',
                'aca_courses.id as course_id',
                'aca_category_courses.description as category_description'
            )
            ->where('onli_items.status', true)
            ->orderByRaw("CASE WHEN aca_category_courses.description = 'Empresarial' THEN 1 ELSE 2 END")
            ->orderBy('onli_items.id', 'DESC')
            ->limit(15)
            ->paginate(15);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses-new', [
            'programs' => $this->programs,
        ]);
    }
}
