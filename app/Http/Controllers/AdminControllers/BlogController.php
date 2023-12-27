<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\AdminBlogInterface;

class BlogController extends Controller
{
    private AdminBlogInterface $AdminBlogInterface;

    public function __construct(AdminBlogInterface $AdminBlogInterface) 
    {
        $this->AdminBlogInterface = $AdminBlogInterface;

        $this->middleware('role:Blog-Manager', ['only' => [
            'blogs', 'create_blog', 'store_blog', 'edit_blog', 'update_blog', 'delete_blog' 
        ]]);
    }
    public function blogs()
    {
        $alldata = $this->AdminBlogInterface->blogs();

        return view("adminPanel.blogPages.blogs", compact("alldata"));
    }
    public function create_blog()
    {
        $alldata = $this->AdminBlogInterface->create_blog();

        return view("adminPanel.blogPages.create_blog", compact('alldata'));
    }
    public function store_blog(Request $request)
    {
        $alldata = $this->AdminBlogInterface->store_blog($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function edit_blog($id)
    {
        $alldata = $this->AdminBlogInterface->edit_blog($id);

        $editBlogs = $alldata['editBlogs'];
        $ServiceCategory = $alldata['ServiceCategory']; 

        return view("adminPanel.blogPages.edit_blog", compact('editBlogs', 'ServiceCategory'));
    }
    public function update_blog(Request $request)
    {
        $alldata = $this->AdminBlogInterface->update_blog($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function delete_blog($id)
    {
        $alldata = $this->AdminBlogInterface->delete_blog($id);

        return redirect()->back()->with("success", $alldata);
    }
}
