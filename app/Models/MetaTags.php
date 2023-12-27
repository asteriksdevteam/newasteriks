<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTags extends Model
{
    use HasFactory;
    protected $table = "meta_tags";

    protected $fillable = [
        "page",
        "title",
        "keyword",
        "description",
    ];
}
