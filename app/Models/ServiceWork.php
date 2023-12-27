<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceWork extends Model
{
    use HasFactory;

    protected $table = "service_work";
    protected $fillable = [
        'service_id',
        'first_work_heading',
        'first_work_content',
        'first_work_icon',
        'first_work_image',
        'first_background_color',
        'second_work_heading',
        'second_work_content',
        'second_work_icon',
        'second_work_image',
        'second_background_color',
        'third_work_heading',
        'third_work_content',
        'third_work_icon',
        'third_work_image',
        'third_background_color',
    ];
}
