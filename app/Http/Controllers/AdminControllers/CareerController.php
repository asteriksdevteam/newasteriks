<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\AdminCareersInterface;


class CareerController extends Controller
{
    private AdminCareersInterface $AdminCareersInterface;

    public function __construct(AdminCareersInterface $AdminCareersInterface) 
    {
        $this->AdminCareersInterface = $AdminCareersInterface;
        $this->middleware('role:Careers-Manager', ['only' => [
            'job_sub_category', 'create_job_sub_category', 'delete_subCategory_of_job', 'jobs', 'create_jobs', 'store_jobs', 'edit_job', 'update_job' ,
            'delete_job', 'jobs_gallery', 'create_careers_page_images', 'delete_image', 'subcription', 'applicants_on_jobs'
        ]]);
    }
    public function job_sub_category()
    {
        $alldata = $this->AdminCareersInterface->job_sub_category();
        
        return view("adminPanel.jobsPages.job_category", compact('alldata'));
    }
    public function create_job_sub_category(Request $request)
    {        
        $alldata = $this->AdminCareersInterface->create_job_sub_category($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function delete_subCategory_of_job($id)
    {
        $alldata = $this->AdminCareersInterface->delete_subCategory_of_job($id);

        return redirect()->back()->with("success", $alldata);
    }
    public function jobs()
    {
        $alldata = $this->AdminCareersInterface->jobs();

        return view("adminPanel.jobsPages.jobs", compact('alldata'));
    }
    public function create_jobs()
    {
        $alldata = $this->AdminCareersInterface->create_jobs();

        return view("adminPanel.jobsPages.create_jobs", compact("alldata"));
    }
    public function store_jobs(Request $request)
    {
        $alldata = $this->AdminCareersInterface->store_jobs($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function edit_job($id)
    {
        $alldata = $this->AdminCareersInterface->edit_job($id);

        $Careers = $alldata["Careers"];
        $JobCategory = $alldata["JobCategory"];

        return view("adminPanel.jobsPages.edit_job", compact("Careers", "JobCategory"));
    }
    public function update_job(Request $request)
    {
        $alldata = $this->AdminCareersInterface->update_job($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function delete_job($id)
    {
        $alldata = $this->AdminCareersInterface->delete_job($id);

        return redirect()->back()->with("success", $alldata);
    }
    public function jobs_gallery()
    {
        $alldata = $this->AdminCareersInterface->jobs_gallery();

        return view("adminPanel.jobsPages.job_gallery", compact('alldata'));
    }
    public function create_careers_page_images(Request $request)
    {
        $alldata = $this->AdminCareersInterface->create_careers_page_images($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function delete_image($id)
    {
        $alldata = $this->AdminCareersInterface->delete_image($id);
        
        return redirect()->back()->with("success", $alldata);
    }
    public function subcription()
    {
        $alldata = $this->AdminCareersInterface->subcription();

        return view("adminPanel.jobsPages.subcription", compact('alldata'));
    }
    public function applicants_on_jobs($id)
    {
        $alldata = $this->AdminCareersInterface->applicants_on_jobs($id);

        return view("adminPanel.jobsPages.applicant", compact("alldata"));
    }
}
