<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Services extends Model
{
    use HasFactory;
    protected $table = "service";
    
    protected $fillable = [
        "subcategory",
        "slug",
        "meta_title",
        "meta_keyword",
        "meta_description",
    ];

    public function ServiceSubCategory(): HasOne
    {
        return $this->HasOne(ServiceSubCategory::class,'id','subcategory');
    }
}
