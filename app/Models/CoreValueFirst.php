<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreValueFirst extends Model
{
    use HasFactory;
    protected $table = "core_value_first";

    protected $fillable = [
        "heading_1",
        "heading_2",
        "heading_3",
        "heading_4",
        "heading_5",
        "heading_6",
        "content_1",
        "content_2",
        "content_3",
        "content_4",
        "content_5",
        "content_6",
    ];
}
