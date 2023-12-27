<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeServices extends Model
{
    use HasFactory;
    protected $table = "home_service";

    protected $fillable = [
        "heading1",
        "heading2",
        "heading3",
        "heading4",
        "content1",
        "content2",
        "content3",
        "content4",
        "image1",
        "image2",
        "image3",
        "image4",
    ];
}
