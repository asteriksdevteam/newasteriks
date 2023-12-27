<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryCompany extends Model
{
    use HasFactory;

    protected $table = "story_company";

    protected $fillable = [
        "story_image",
        "company_image",
        "story_content",
        "company_content",
        "company_profile",  
    ];
}
