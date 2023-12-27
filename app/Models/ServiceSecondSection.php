<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSecondSection extends Model
{
    use HasFactory;

    protected $table = "service_second_section";

    protected $fillable = [
        "service_id",
        "service_second_section_heading",
        "service_second_section_short_description",
        "service_second_section_long_description",
        "service_second_section_heading_first",
        "service_second_section_description_first",
        "service_second_section_heading_second",
        "service_second_section_description_second",
        "service_second_section_heading_third",
        "service_second_section_description_third",
        "sevice_second_Image",
        "sevice_second_Image_first",
        "sevice_second_Image_second",
        "sevice_second_Image_third",
    ];
}
