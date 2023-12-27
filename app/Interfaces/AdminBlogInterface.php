<?php

namespace App\Interfaces;

interface AdminBlogInterface 
{
    public function blogs();
    public function create_blog();
    public function store_blog($request);
    public function edit_blog($id);
    public function update_blog($request);
    public function delete_blog($id);
}