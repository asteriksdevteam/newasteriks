<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBannerImages extends Model
{
    use HasFactory;
    protected $table = "home_banner_images";

    protected $fillable = [
        "image",
    ];
}
