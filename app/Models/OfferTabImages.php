<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferTabImages extends Model
{
    use HasFactory;
    protected $table = "offer_tab_images";

    protected $fillable = [
        "image"
    ];
}
