<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ContactForm extends Model
{
    use HasFactory;

    protected $table = "contact_form";

    protected $fillable = [
        "name",
        "email",
        "phone",
        "category",
        "summary",
    ];

    public function ServiceCategory(): HasOne
    {
        return $this->hasOne(ServiceCategory::class, "id", "category");
    }
}
