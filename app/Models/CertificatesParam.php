<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Academic\Entities\AcaCourse;

class CertificatesParam extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'certificate_img',
        'fontfamily_date',
        'font_align_date',
        'font_vertical_align_date',
        'position_date_x',
        'position_date_y',
        'font_size_date',
        'fontfamily_names',
        'font_align_names',
        'font_vertical_align_names',
        'position_names_x',
        'position_names_y',
        'font_size_names',
        'fontfamily_title',
        'font_align_title',
        'font_vertical_align_title',
        'position_title_x',
        'position_title_y',
        'font_size_title',
        'max_width_title',
    ];

    public function AcaCourse()
{
    return $this->belongsTo(AcaCourse::class, 'course_id', 'id');
}

}
