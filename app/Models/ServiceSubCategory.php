<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ServiceSubCategory extends Model
{
    use HasFactory;
    protected $table = "service_sub_category";

    protected $fillable = [
        "category_id",
        "sub_category",
    ];

    public function ServiceCategory(): HasOne
    {
        return $this->HasOne(ServiceCategory::class,'id','category_id');
    }
    public function Service(): HasOne
    {
        return $this->HasOne(Services::class,'subcategory','id');
    }
}
