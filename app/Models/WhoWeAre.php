<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoWeAre extends Model
{
    use HasFactory;

    protected $table = "who_we_are";
    
    protected $fillable = [
        'who_we_are',
        'who_we_are_content',
        'section_image',
        'heading_1',
        'content_1',
        'icon_image_1',
        'heading_2',
        'content_2',
        'icon_image_2',
        'heading_3',
        'content_3',
        'icon_image_3',
        'heading_4',
        'content_4',
        'icon_image_4',
    ];
}
