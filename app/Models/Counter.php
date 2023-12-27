<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $table = "counter";

    protected $fillable = [
        "first_counter",
        "first_counter_name",
        "Second_counter",
        "Second_counter_name",
        "Third_counter",
        "Third_counter_name",
        "Fourth_counter",
        "Fourth_counter_name",
    ];
}
