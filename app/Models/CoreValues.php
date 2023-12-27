<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreValues extends Model
{
    use HasFactory;

    protected $table = "core_values";

    protected $fillable = [
        "heading_1",
        "content_1",
        "heading_2",
        "content_2",
        "main_image",
        "icon_1",
        "icon_2",
    ];
}
