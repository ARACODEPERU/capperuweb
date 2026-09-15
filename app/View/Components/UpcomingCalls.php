<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class UpcomingCalls extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $rows = DB::table('aca_courses')
            ->join('onli_items', function ($join) {
                $join->on('onli_items.item_id', '=', 'aca_courses.id')
                    ->where('onli_items.entitie', 'Modules-Academic-Entities-AcaCourse')
                    ->where('onli_items.status', true);
            })
            ->whereRaw('aca_courses.course_day REGEXP "^[0-9]+$"')
            ->whereRaw('aca_courses.course_month REGEXP "^[0-9]+$"')
            ->whereRaw('aca_courses.course_year REGEXP "^[0-9]+$"')
            ->whereRaw("
                STR_TO_DATE(
                    CONCAT(aca_courses.course_year, '-', LPAD(aca_courses.course_month, 2, '0'), '-', LPAD(aca_courses.course_day, 2, '0')),
                    '%Y-%m-%d'
                ) >= CURDATE()
            ")
            ->orderByRaw("
                STR_TO_DATE(
                    CONCAT(aca_courses.course_year, '-', LPAD(aca_courses.course_month, 2, '0'), '-', LPAD(aca_courses.course_day, 2, '0')),
                    '%Y-%m-%d'
                ) ASC
            ")
            ->select(
                'onli_items.id as id',
                'onli_items.name as name',
                'onli_items.slug as slug',
                'aca_courses.course_day as day',
                'aca_courses.course_month as month',
                'aca_courses.course_year as year'
            )
            ->limit(8)
            ->get();

        $calls = $rows->map(function ($row) {
            $row->month_name = formatShortMonth(
                sprintf('%s-%02s-01', $row->year, $row->month)
            );

            return $row;
        });

        return view('components.upcoming-calls', [
            'calls' => $calls,
        ]);
    }
}
