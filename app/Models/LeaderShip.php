<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaderShip extends Model
{
    use HasFactory;

    protected $table = "leader_ship";
    protected $fillable = [
        'name',
        'designation',
        'image',
        'content',
    ];
}
