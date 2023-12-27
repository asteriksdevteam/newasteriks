<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBanner extends Model
{
    use HasFactory;
    protected $table = "service_banner";

    protected $fillable = [
        "service_id",
        "banner_image",
        "banner_heading",
        "banner_content",
    ];
}
