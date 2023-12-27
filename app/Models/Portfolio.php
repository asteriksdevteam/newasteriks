<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = "portfolio";

    protected $fillable = [
        'category',
        'heading',
        'content',
        'image1',
        'image2',
        'backgroundcolor',
    ];
}
