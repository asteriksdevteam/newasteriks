<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;
    protected $table = "contact_us";
    protected $fillable = [
        "phone",
        "email",
        "address1",
        "address2",
        "pakistan_map",
        "use_map",
    ];
}
