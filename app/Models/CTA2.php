<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTA2 extends Model
{
    use HasFactory;

    protected $table = "cta2";
    
    protected $fillable = [
        'first_heading',
        'second_heading',
        'first_persentage',
        'second_persentage',
        'first_content',
        'second_content',
    ]; 
}
