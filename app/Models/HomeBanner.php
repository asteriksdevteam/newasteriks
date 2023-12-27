<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    use HasFactory;

    protected $table = "home_banner";

    protected $fillable = [
        "banner_heading",
        "banner_content",
    ];
}
