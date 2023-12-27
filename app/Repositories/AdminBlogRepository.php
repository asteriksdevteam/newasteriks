<?php

namespace App\Repositories;

use App\Interfaces\AdminBlogInterface;
use App\Traits\ImageTrait;
use App\Models\Blogs;
use Illuminate\Support\Str;
use App\Models\ServiceCategory;
use Carbon\Carbon;

class AdminBlogRepository implements AdminBlogInterface
{
    use ImageTrait; 
    public function blogs()
    {
        $Blogs = Blogs::with('ServiceCategory')->get();
        return $Blogs;   
    }
    public function create_blog()
    {
        $ServiceCategory = ServiceCategory::get();
        return $ServiceCategory;
    }
    public function store_blog($request)
    {
        $validated = $request->validate([
            "meta_title" => "required",
            "meta_keyword" => "required|json",
            "meta_description" => "required",
            "category" => "required",
            "author_name" => "required",
            "blog_title" => "required",
            "blog_short_description" => "required",
            "blog_description" => "required",
            "status" => "required",
            "blog_thumbnail_image" => "required",
            "blog_image" => "required",
            "date" => "required"
        ]);

        $KeywordArray = json_decode($request->meta_keyword, true);

        $KeywordValuesArray = array_column($KeywordArray, 'value');

        $KeywordCommaSeparatedValues = implode(', ', $KeywordValuesArray);

        $date = Carbon::createFromFormat('Y-m-d\TH:i', $request->date)->format('Y-m-d H:i:s');

        $Blogs = Blogs::create([
            "meta_title" => $request->meta_title,
            "meta_keyword" => $KeywordCommaSeparatedValues,
            "meta_description" => $request->meta_description,
            "slug" => Str::slug($request->blog_title),
            "author" => $request->author_name,
            "category" => $request->category,
            "blog_title" => $request->blog_title,
            "blog_short_description" => $request->blog_short_description,
            "blog_description" => $request->blog_description,
            "status" => $request->status,
            "blog_thumbnail_image" => $this->verifyAndUpload($request->blog_thumbnail_image, "blog_images"),
            "blog_image" => $this->verifyAndUpload($request->blog_image, "blog_images"),
            "date" => $date
        ]);

        return "Blog Created Successfully";
    }
    public function edit_blog($id)
    {
        $editBlogs = Blogs::with('ServiceCategory')->findOrFail($id);

        $ServiceCategory = ServiceCategory::get();

        $alldata = [
            "editBlogs" => $editBlogs,
            "ServiceCategory" => $ServiceCategory,
        ];

        return $alldata;
    }
    public function update_blog($request)
    {
        $validated = $request->validate([
            "meta_title" => "required",
            "meta_keyword" => "required|json",
            "meta_description" => "required",
            "category" => "required",
            "author_name" => "required",
            "blog_title" => "required",
            "blog_short_description" => "required",
            "blog_description" => "required",
            "status" => "required",
            "date" => "required"
        ]);
        
        if($request->hasFile('blog_thumbnail_image'))
        {
            $image = $this->verifyAndUpload($request->blog_thumbnail_image, "blog_images");
            $Blogs = Blogs::where("id", $request->id)->update([
                "blog_thumbnail_image" => $image,
            ]);
        }
        if($request->hasFile('blog_image'))
        {
            $image = $this->verifyAndUpload($request->blog_image, "blog_images");
            $Blogs = Blogs::where("id", $request->id)->update([
                "blog_image" => $image,
            ]);
        }

        $KeywordArray = json_decode($request->meta_keyword, true);

        $KeywordValuesArray = array_column($KeywordArray, 'value');

        $KeywordCommaSeparatedValues = implode(', ', $KeywordValuesArray);

        $date = Carbon::createFromFormat('Y-m-d\TH:i', $request->date)->format('Y-m-d H:i:s');

        $Blogs = Blogs::where('id', $request->id)->update([
            "meta_title" => $request->meta_title,
            "meta_keyword" => $KeywordCommaSeparatedValues,
            "meta_description" => $request->meta_description,
            "slug" => Str::slug($request->blog_title),
            "author" => $request->author_name,
            "category" => $request->category,
            "blog_title" => $request->blog_title,
            "blog_short_description" => $request->blog_short_description,
            "blog_description" => $request->blog_description,
            "status" => $request->status,
            "date" => $date,
        ]);

        return "Blog Updated Successfully";
    }
    public function delete_blog($id)
    {
        $Blogs = Blogs::where('id', $id)->first();

        $Blogs->delete();

        return "Blog Delete Successfully";
    }
}