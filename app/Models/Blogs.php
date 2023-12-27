<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $table = "blogs";
    protected $fillable = [
        "meta_title",
        "meta_keyword",
        "meta_description",
        "slug",
        "author",
        "category",
        "blog_title",
        "blog_short_description",
        "blog_description",
        "status",
        "blog_thumbnail_image",
        "blog_image",
        "date",
    ];

    public function ServiceCategory()
    {
        return $this->belongsTo(ServiceCategory::class,"category","id");
    }
}
