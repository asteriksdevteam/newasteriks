<?php

namespace App\Interfaces;

interface AdminServiceInterface 
{
    public function sub_categories();
    public function create_sub_category($request);
    public function delete_subCategory($id);
    public function services();
    public function create_service();
    public function store_service($request);
    public function edit_service($id);
    public function update_service($request);
    public function update_service_banner($request);
    public function update_service_Second_section($request);
    public function update_service_work_section($request);
    public function update_service_Cta($request);
    public function update_work_process($request);
    public function update_last_section($request);
    public function delete_service($id);
    public function services_packages($id);
    public function create_package($request);
    public function update_package($request);
    public function delete_package($id);
    public function update_cta($request);

}