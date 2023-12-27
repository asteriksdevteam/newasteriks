<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLastSection extends Model
{
    use HasFactory;

    protected $table = "service_last_section";
    
    protected $fillable = [
        'service_id',
        'heading',
        'content',
        'heading_2',
        'heading_3',
        'image_1',
        'image_content',
    ];
}
