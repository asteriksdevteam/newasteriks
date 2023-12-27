<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppleOnJob extends Model
{
    use HasFactory;
    protected $table = "apply_on_job";

    protected $fillable = [
        'name',
        'job_id',
        'phone',
        'email',
        'portfolio',
        'cv',
        'cover_letter',
    ];
}
