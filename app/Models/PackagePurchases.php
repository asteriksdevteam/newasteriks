<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class PackagePurchases extends Model
{
    use HasFactory;

    protected $table = "package_purchases";

    protected $fillable = [
        "package_id",
        "name",
        "email",
        "phone",
        "summary"
    ];

    public function Packages(): HasOne
    {
        return $this->hasOne(Packages::class, "id", "package_id");
    }
}
