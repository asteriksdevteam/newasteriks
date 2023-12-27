<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCTA2 extends Model
{
    use HasFactory;

    protected $table = "service_cta_2";

    protected $fillable = [
        "service_id",
        "service_cta_heading_1",
        "service_cta_heading_2",
        "service_cta_percentage_1",
        "service_cta_percentage_2",
        "service_cta_content_1",
        "service_cta_content_2",
    ];
}
