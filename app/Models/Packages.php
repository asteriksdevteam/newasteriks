<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Packages extends Model
{
    use HasFactory;
    protected $table = "packages";
    protected $fillable =[
        "service_id",
        "package_type",
        "package_name",
        "description",
        "package_list",
    ];
    
    public function Services(): BelongsTo
    {
        return $this->belongsTo(Services::class,"service_id", "id");
    }
}
