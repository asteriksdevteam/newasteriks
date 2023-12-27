<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCTA extends Model
{
    use HasFactory;
    protected $table = "service_cta";

    protected $fillable = [
        "service_id",
        "heading",
        "content",
    ];
}
