<?php

namespace App\Interfaces;

interface AdminCareersInterface 
{
    public function job_sub_category();
    public function create_job_sub_category($request);
    public function delete_subCategory_of_job($id);
    public function jobs();
    public function create_jobs();
    public function store_jobs($request);
    public function edit_job($id);
    public function update_job($request);
    public function delete_job($id);
    public function jobs_gallery();
    public function create_careers_page_images($request);
    public function delete_image($id);
    public function subcription();
    public function applicants_on_jobs($id);

}