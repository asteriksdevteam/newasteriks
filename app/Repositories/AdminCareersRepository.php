<?php

namespace App\Repositories;
use App\Interfaces\AdminCareersInterface;
use App\Traits\ImageTrait;
use App\Models\JobCategory;
use App\Models\Careers;
use App\Models\CareerImages;
use App\Models\EmailSubcription;
use App\Models\AppleOnJob;

class AdminCareersRepository implements AdminCareersInterface 
{
    use ImageTrait; 

    public function job_sub_category()
    {
        $JobCategory = JobCategory::get();
        return $JobCategory;
    }
    public function create_job_sub_category($request)
    {
        $validated = $request->validate([
            "jobSubCatgory" => "required",
        ]);

        if($request->subCategoryId == null)
        {
            $JobCategory = JobCategory::create([
                "job_categories" => $request->jobSubCatgory,
            ]);

            return "Category Created Successfully";
        }
        else
        {
            $JobCategory = JobCategory::where('id',$request->subCategoryId)->update([
                "job_categories" => $request->jobSubCatgory,
            ]);

            return "Category Updated Successfully";
        }
    }
    public function delete_subCategory_of_job($id)
    {
        $JobCategory = JobCategory::where('id',$id)->first();

        $JobCategory->delete();

        return "Category Deleted Successfully";
    }
    public function jobs()
    {
        $Careers = Careers::with("JobCategory")->get();

        return $Careers;
    }
    public function create_jobs()
    {
        $JobCategory = JobCategory::get();

        return $JobCategory;
    }
    public function store_jobs($request)
    {
        $validated = $request->validate([
            "department" => "required",
            "job_heading" => "required",
            "job_specification" => "required",
            "job_overview" => "required",
            "job_description" => "required",
            "number_of_vacancies" => "required",
            "working_hours" => "required",
            "job_shift" => "required",
            "job_type" => "required",
            "city" => "required",
        ]);

        $Careers = Careers::create([
            "department" => $request->department,
            "job_heading" => $request->job_heading,
            "job_specification" => $request->job_specification,
            "job_overview" => $request->job_overview,
            "job_description" => $request->job_description,
            "full_allowance" => $request->full_allowance, 
            "leave_encashment" => $request->leave_encashment,
            "LDopp" => $request->LDopp,
            "recognition_rewards" => $request->recognition_rewards,
            "medical_insurance" => $request->medical_insurance,
            "maternity_paternity_leave" => $request->maternity_paternity_leave,
            "increment_twice_a_year" => $request->increment_twice_a_year,
            "paid_time_off" => $request->paid_time_off,
            "mental_health_leave" => $request->mental_health_leave,
            "number_of_vacancies" => $request->number_of_vacancies,
            "working_hours" => $request->working_hours,
            "job_shift" => $request->job_shift,
            "job_type" => $request->job_type,
            "city" => $request->city,
        ]);

        return "Careers Created Successfully";
    }
    public function edit_job($id)
    {
        $Careers = Careers::find($id);

        $JobCategory = JobCategory::get();

        $alldata = [
            "Careers" => $Careers,
            "JobCategory" => $JobCategory,
        ];

        return $alldata;
    }
    public function update_job($request)
    {
        $validated = $request->validate([
            "department" => "required",
            "job_heading" => "required",
            "job_specification" => "required",
            "job_overview" => "required",
            "job_description" => "required",
            "number_of_vacancies" => "required",
            "working_hours" => "required",
            "job_shift" => "required",
            "job_type" => "required",
            "city" => "required",
        ]);

        if($request->full_allowance)
        {
            $full_allowance = "on";
        }
        else
        {
            $full_allowance = null;
        }
        
        if($request->leave_encashment)
        {
            $leave_encashment = "on";
        }
        else
        {
            $leave_encashment = null;
        }

        if($request->LDopp)
        {
            $LDopp = "on";
        }
        else
        {
            $LDopp = null;
        }

        if($request->recognition_rewards)
        {
            $recognition_rewards = "on";
        }
        else
        {
            $recognition_rewards = null;
        }

        if($request->medical_insurance)
        {
            $medical_insurance = "on";
        }
        else
        {
            $medical_insurance = null;
        }

        if($request->maternity_paternity_leave)
        {
            $maternity_paternity_leave = "on";
        }
        else
        {
            $maternity_paternity_leave = null;
        }

        if($request->increment_twice_a_year)
        {
            $increment_twice_a_year = "on";
        }
        else
        {
            $increment_twice_a_year = null;
        }

        if($request->paid_time_off)
        {
            $paid_time_off = "on";
        }
        else
        {
            $paid_time_off = null;
        }

        if($request->mental_health_leave)
        {
            $mental_health_leave = "on";
        }
        else
        {
            $mental_health_leave = null;
        }

        $Careers = Careers::where("id", $request->id)->update([
            "department" => $request->department,
            "job_heading" => $request->job_heading,
            "job_specification" => $request->job_specification,
            "job_overview" => $request->job_overview,
            "job_description" => $request->job_description,
            "full_allowance" => $full_allowance, 
            "leave_encashment" => $leave_encashment,
            "LDopp" => $LDopp,
            "recognition_rewards" => $recognition_rewards,
            "medical_insurance" => $medical_insurance,
            "maternity_paternity_leave" => $maternity_paternity_leave,
            "increment_twice_a_year" => $increment_twice_a_year,
            "paid_time_off" => $paid_time_off,
            "mental_health_leave" => $mental_health_leave,
            "number_of_vacancies" => $request->number_of_vacancies,
            "working_hours" => $request->working_hours,
            "job_shift" => $request->job_shift,
            "job_type" => $request->job_type,
            "city" => $request->city,
        ]);

        return "Careers Updated Successfully";
    }
    public function delete_job($id)
    {
        $Careers = Careers::find($id);

        $Careers->delete();

        return "Job Deleted Successfully";

    }
    public function jobs_gallery()
    {
        $CareerImages = CareerImages::get();
        return $CareerImages;
    }
    public function create_careers_page_images($request)
    {
        $validated = $request->validate([
            "careers_page_images" => "required",
        ]);

        if($request->hasFile('careers_page_images'))
        {
            $careers_page_images = $this->verifyAndUpload($request->careers_page_images, "careers_page_images");
            $CareerImages = CareerImages::create([
                "images" => $careers_page_images
            ]);
        }

        return "Images Uploaded Successfully";


    }
    public function delete_image($id)
    {
        $CareerImages = CareerImages::find($id);

        $CareerImages->delete();

        return "Images Deleted Successfully";
    }
    public function subcription()
    {
        $EmailSubcription = EmailSubcription::get();
        return $EmailSubcription;
    }
    public function applicants_on_jobs($id)
    {
        $AppleOnJob = AppleOnJob::where('job_id', $id)->get();
        return $AppleOnJob;
    }
}