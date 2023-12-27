<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerImages extends Model
{
    use HasFactory;
    protected $table = "careers_images";

    protected $fillable = [
        "images",
    ];
}
