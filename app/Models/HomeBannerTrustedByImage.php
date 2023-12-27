<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBannerTrustedByImage extends Model
{
    use HasFactory;

    protected $table = "home_banner_trusted_by_images";

    protected $fillable = [
        "trusted_by_image",
    ];
}
