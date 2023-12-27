<?php

namespace App\Repositories;

use App\Interfaces\AdminServiceInterface;
use App\Traits\ImageTrait;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use App\Models\Services;
use Illuminate\Support\Str;
use App\Models\ServiceBanner;
use App\Models\ServiceSecondSection;
use App\Models\ServiceWork;
use App\Models\ServiceCTA2;
use App\Models\ServiceProcess;
use App\Models\ServiceLastSection;
use App\Models\Packages;
use App\Models\ServiceCTA;

class AdminServiceRepository implements AdminServiceInterface
{
    use ImageTrait; 
    public function sub_categories()
    {
        $ServiceCategory = ServiceCategory::get();
        $ServiceSubCategory = ServiceSubCategory::with('ServiceCategory')->get();

        $alldata = [
            'category' => $ServiceCategory,
            'sub-category' => $ServiceSubCategory,
        ];

        return $alldata;
    }
    public function create_sub_category($request)
    {
        $validated = $request->validate([
            'category' => 'required',
            'subCatgory' => 'required',
        ]);

        if($request->id == null)
        {
            $ServiceSubCategory = ServiceSubCategory::where("sub_category", $request->subCatgory)->first();
            if($ServiceSubCategory == null)
            {
                $ServiceSubCategory = ServiceSubCategory::create([
                    "category_id" => $request->category,
                    "sub_category" => $request->subCatgory,
                ]);
        
                return "Sub Category Created Successfully";
            }
            else
            {
                return "This service allready created";
            }
        }
        else
        {
            $ServiceSubCategory = ServiceSubCategory::where('id', $request->id)->update([
                "category_id" => $request->category,
                "sub_category" => $request->subCatgory,
            ]);
    
            return "Sub Category Updated Successfully";
        }

    }
    public function delete_subCategory($id)
    {
        $ServiceSubCategory = ServiceSubCategory::with("Service")->where('id', $id)->first();

        if($ServiceSubCategory->Service == null)
        {
            $ServiceSubCategory->delete();
    
            return "Sub Category Delete Successfully";
        }
        else
        {
            $id = $ServiceSubCategory->Service->id;
            
            $Services = Services::where('id', $id)->first();
            
            $ServiceBanner = ServiceBanner::where('service_id', $id)->first();
            
            $ServiceSecondSection = ServiceSecondSection::where('service_id', $id)->first();
            
            $ServiceWork = ServiceWork::where('service_id', $id)->first();
            
            $ServiceCTA2 = ServiceCTA2::where('service_id',$id)->first();
            
            $ServiceProcess = ServiceProcess::where('service_id',$id)->first();
            
            $ServiceLastSection = ServiceLastSection::where('service_id',$id)->first();
            
            if($Services != null)
            {
                $Services->delete();
            }
            if($ServiceBanner != null)
            {
                $ServiceBanner->delete();
            }
            if($ServiceSecondSection != null)
            {
                $ServiceSecondSection->delete();
            }
            if($ServiceWork != null)
            {
                $ServiceWork->delete();
            }
            if($ServiceCTA2 != null)
            {
                $ServiceCTA2->delete();
            }
            if($ServiceProcess != null)
            {
                $ServiceProcess->delete();
            }
            if($ServiceLastSection != null)
            {
                $ServiceLastSection->delete();
            }
            
            $ServiceSubCategory->delete();
    
            return "Sub Category Delete Successfully"; 
        }
    }
    public function services()
    {
        $Services = Services::with('ServiceSubCategory')->get();

        return $Services;
    }
    public function create_service()
    {

    }
    public function store_service($request)
    {
        $validated = $request->validate([
            'subcategory' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required|json',
            'meta_description' => 'required',
        ]);

        $ServiceSubCategory = ServiceSubCategory::select('sub_category')->where('id',$request->subcategory)->first();

        $KeywordArray = json_decode($request->meta_keyword, true);

        $KeywordValuesArray = array_column($KeywordArray, 'value');

        $KeywordCommaSeparatedValues = implode(', ', $KeywordValuesArray);
        
        $Services = Services::create([
            "subcategory" => $request->subcategory,
            "slug" => Str::slug($ServiceSubCategory->sub_category),
            "meta_title" => $request->meta_title,
            "meta_keyword" => $KeywordCommaSeparatedValues,
            "meta_description" => $request->meta_description,
        ]);

        return "Service Created Successfully";
    }
    public function edit_service($id)
    {
        $Services = Services::where('id', $id)->first();

        $SubCategory = ServiceSubCategory::get();

        $ServiceBanner = ServiceBanner::where('service_id', $id)->first();

        $ServiceSecondSection = ServiceSecondSection::where('service_id', $id)->first();

        $ServiceWork = ServiceWork::where('service_id', $id)->first();

        $ServiceCTA2 = ServiceCTA2::where('service_id',$id)->first();

        $ServiceProcess = ServiceProcess::where('service_id',$id)->first();

        $ServiceLastSection = ServiceLastSection::where('service_id',$id)->first();

        $ServiceCTA = ServiceCTA::where("service_id", $id)->first();

        $data = [
            'Services' => $Services,
            'SubCategory' => $SubCategory,
            'ServiceBanner' => $ServiceBanner,
            'ServiceSecondSection' => $ServiceSecondSection,
            'ServiceWork' => $ServiceWork,
            'ServiceCTA2' => $ServiceCTA2,
            'ServiceProcess' => $ServiceProcess,
            'ServiceLastSection' => $ServiceLastSection,
            'ServiceCTA' => $ServiceCTA,
        ];
        return $data;
    }
    public function update_service($request)
    {
        $validated = $request->validate([
            'subcategory' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);

        $KeywordArray = json_decode($request->meta_keyword, true);

        $KeywordValuesArray = array_column($KeywordArray, 'value');

        $KeywordCommaSeparatedValues = implode(', ', $KeywordValuesArray);

        $ServiceSubCategory = ServiceSubCategory::select('sub_category')->where('id',$request->subcategory)->first();
        
        $Services = Services::where('id', $request->id)->update([
            "subcategory" => $request->subcategory,
            "slug" => Str::slug($ServiceSubCategory->sub_category),
            "meta_title" => $request->meta_title,
            "meta_keyword" => $KeywordCommaSeparatedValues,
            "meta_description" => $request->meta_description,
        ]);

        return "Service Update Successfully";
    }
    public function update_service_banner($request)
    {
        if($request->ServiceBannerId == null)
        {
            $validated = $request->validate([
                'banner_image' => 'required',
                'service_banner_heading' => 'required',
                'service_banner_content' => 'required',
            ]);

            $ServiceBanner = ServiceBanner::create([
                "service_id" => $request->id,
                "banner_image" => $this->verifyAndUpload($request->banner_image, "service_banner_image"),
                "banner_heading" => $request->service_banner_heading,
                "banner_content" => $request->service_banner_content,
            ]);
    
            return "Service Banner Created Successfully";
        }
        else
        {
            $ServiceBanner = ServiceBanner::where("id", $request->ServiceBannerId)->update([
                "service_id" => $request->id,
                "banner_heading" => $request->service_banner_heading,
                "banner_content" => $request->service_banner_content,
            ]);

            if($request->hasFile('banner_image'))
            {
                $banner_image = $this->verifyAndUpload($request->banner_image, "service_banner_image");

                $ServiceBanner = ServiceBanner::where("id", $request->ServiceBannerId)->update([
                    'banner_image' => $banner_image,
                ]);
            }
    
            return "Service Banner Update Successfully";
        }

    }
    public function update_service_Second_section($request)
    {
        if($request->serviceSecondSectionID == null)
        {

            $validated = $request->validate([
                "service_second_section_heading" => 'required',
                "service_second_section_short_description" => 'required',
                "service_second_section_long_description" => 'required',
                "service_second_section_heading_first" => 'required',
                "service_second_section_long_description_first" => 'required',
                "service_second_section_heading_second" => 'required',
                "service_second_section_long_description_second" => 'required',
                "service_second_section_heading_third" => 'required',
                "service_second_section_long_description_third" => 'required',
                "sevice_second_Image" => 'required',
                "sevice_second_Image_first" => 'required',
                "sevice_second_Image_second" => 'required',
                "sevice_second_Image_third" => 'required',
            ]);

            $ServiceSecondSection = ServiceSecondSection::create([
                "service_id" => $request->id,
                "service_second_section_heading" => $request->service_second_section_heading,
                "service_second_section_short_description" => $request->service_second_section_short_description,
                "service_second_section_long_description" => $request->service_second_section_long_description,
                "service_second_section_heading_first" => $request->service_second_section_heading_first,
                "service_second_section_description_first" => $request->service_second_section_long_description_first,
                "service_second_section_heading_second" => $request->service_second_section_heading_second,
                "service_second_section_description_second" => $request->service_second_section_long_description_second,
                "service_second_section_heading_third" => $request->service_second_section_heading_third,
                "service_second_section_description_third" => $request->service_second_section_long_description_third,
                "sevice_second_Image" => $this->verifyAndUpload($request->sevice_second_Image, "sevice_second_section"),
                "sevice_second_Image_first" => $this->verifyAndUpload($request->sevice_second_Image_first, "sevice_second_section"),
                "sevice_second_Image_second" => $this->verifyAndUpload($request->sevice_second_Image_second, "sevice_second_section"),
                "sevice_second_Image_third" => $this->verifyAndUpload($request->sevice_second_Image_third, "sevice_second_section"),
            ]);
    
        }
        else
        {
            $validated = $request->validate([
                "service_second_section_heading" => 'required',
                "service_second_section_short_description" => 'required',
                "service_second_section_long_description" => 'required',
                "service_second_section_heading_first" => 'required',
                "service_second_section_long_description_first" => 'required',
                "service_second_section_heading_second" => 'required',
                "service_second_section_long_description_second" => 'required',
                "service_second_section_heading_third" => 'required',
                "service_second_section_long_description_third" => 'required',
            ]);

            if($request->hasFile('sevice_second_Image'))
            {
                $image = $this->verifyAndUpload($request->sevice_second_Image, "sevice_second_section");
                $ServiceSecondSection = ServiceSecondSection::where("id", $request->serviceSecondSectionID)->update([
                    "sevice_second_Image" => $image,
                ]);
            }

            if($request->hasFile('sevice_second_Image_first'))
            {
                $image = $this->verifyAndUpload($request->sevice_second_Image_first, "sevice_second_section");
                $ServiceSecondSection = ServiceSecondSection::where("id", $request->serviceSecondSectionID)->update([
                    "sevice_second_Image_first" => $image,
                ]);
            }

            if($request->hasFile('sevice_second_Image_second'))
            {
                $image = $this->verifyAndUpload($request->sevice_second_Image_second, "sevice_second_section");
                $ServiceSecondSection = ServiceSecondSection::where("id", $request->serviceSecondSectionID)->update([
                    "sevice_second_Image_second" => $image,
                ]);
            }

            if($request->hasFile('sevice_second_Image_third'))
            {
                $image = $this->verifyAndUpload($request->sevice_second_Image_third, "sevice_second_section");
                $ServiceSecondSection = ServiceSecondSection::where("id", $request->serviceSecondSectionID)->update([
                    "sevice_second_Image_third" => $image,
                ]);
            }

            $ServiceSecondSection = ServiceSecondSection::where("id", $request->serviceSecondSectionID)->update([
                "service_id" => $request->id,
                "service_second_section_heading" => $request->service_second_section_heading,
                "service_second_section_short_description" => $request->service_second_section_short_description,
                "service_second_section_long_description" => $request->service_second_section_long_description,
                "service_second_section_heading_first" => $request->service_second_section_heading_first,
                "service_second_section_description_first" => $request->service_second_section_long_description_first,
                "service_second_section_heading_second" => $request->service_second_section_heading_second,
                "service_second_section_description_second" => $request->service_second_section_long_description_second,
                "service_second_section_heading_third" => $request->service_second_section_heading_third,
                "service_second_section_description_third" => $request->service_second_section_long_description_third,
            ]);
        }

        return "Service Second Section Update Successfully";
    }
    public function update_service_work_section($request)
    {
        if($request->serviceWorkSectionId == null)
        {
            $validated = $request->validate([
                'service_id' => 'required',
                'first_work_heading' => 'required',
                'first_work_content' => 'required',
                'first_work_icon' => 'required',
                'first_work_image' => 'required',
                'second_work_heading' => 'required',
                'second_work_content' => 'required',
                'second_work_icon' => 'required',
                'second_work_image' => 'required',
                'third_work_heading' => 'required',
                'third_work_content' => 'required',
                'third_work_icon' => 'required',
                'third_work_image' => 'required',
                'first_background_color' => 'required',
                'second_background_color' => 'required',
                'third_background_color' => 'required',
            ]);
    
            $ServiceWork = ServiceWork::create([
                'service_id' => $request->service_id,
                'first_work_heading' => $request->first_work_heading,
                'first_work_content' => $request->first_work_content,
                'first_work_icon' => $this->verifyAndUpload($request->first_work_icon, "sevice_work_section_images"),
                'first_work_image' => $this->verifyAndUpload($request->first_work_image, "sevice_work_section_images"),
                'second_work_heading' => $request->second_work_heading,
                'second_work_content' => $request->second_work_content,
                'second_work_icon' => $this->verifyAndUpload($request->second_work_icon, "sevice_work_section_images"),
                'second_work_image' => $this->verifyAndUpload($request->second_work_image, "sevice_work_section_images"),
                'third_work_heading' => $request->third_work_heading,
                'third_work_content' => $request->third_work_content,
                'third_work_icon' => $this->verifyAndUpload($request->third_work_icon, "sevice_work_section_images"),
                'third_work_image' => $this->verifyAndUpload($request->third_work_image, "sevice_work_section_images"),
                'first_background_color' => $request->first_background_color,
                'second_background_color' => $request->second_background_color,
                'third_background_color' => $request->third_background_color,
            ]);
        }
        else
        {
            $validated = $request->validate([
                'service_id' => 'required',
                'first_work_heading' => 'required',
                'first_work_content' => 'required',
                'second_work_heading' => 'required',
                'second_work_content' => 'required',
                'third_work_heading' => 'required',
                'third_work_content' => 'required',
                'first_background_color' => 'required',
                'second_background_color' => 'required',
                'third_background_color' => 'required',
            ]);

            if($request->hasFile('first_work_icon'))
            {
                $first_work_icon = $this->verifyAndUpload($request->first_work_icon, "sevice_second_section");
                $ServiceWork = ServiceWork::where('id', $request->serviceWorkSectionId)->update([
                    'first_work_icon' => $first_work_icon,
                ]);
            }
            if($request->hasFile('first_work_image'))
            {
                $first_work_image = $this->verifyAndUpload($request->first_work_image, "sevice_second_section");
                $ServiceWork = ServiceWork::where('id', $request->serviceWorkSectionId)->update([
                    'first_work_image' => $first_work_image,
                ]);
            }

            if($request->hasFile('second_work_icon'))
            {
                $second_work_icon = $this->verifyAndUpload($request->second_work_icon, "sevice_second_section");
                $ServiceWork = ServiceWork::where('id', $request->serviceWorkSectionId)->update([
                    'second_work_icon' => $second_work_icon,
                ]);
            }
            if($request->hasFile('second_work_image'))
            {
                $second_work_image = $this->verifyAndUpload($request->second_work_image, "sevice_second_section");
                $ServiceWork = ServiceWork::where('id', $request->serviceWorkSectionId)->update([
                    'second_work_image' => $second_work_image,
                ]);
            }

            if($request->hasFile('third_work_icon'))
            {
                $third_work_icon = $this->verifyAndUpload($request->third_work_icon, "sevice_second_section");
                $ServiceWork = ServiceWork::where('id', $request->serviceWorkSectionId)->update([
                    'third_work_icon' => $third_work_icon,
                ]);
            }
            if($request->hasFile('third_work_image'))
            {
                $third_work_image = $this->verifyAndUpload($request->third_work_image, "sevice_second_section");
                $ServiceWork = ServiceWork::where('id', $request->serviceWorkSectionId)->update([
                    'third_work_image' => $third_work_image,
                ]);
            }
    
            $ServiceWork = ServiceWork::where('id', $request->serviceWorkSectionId)->update([
                'service_id' => $request->service_id,
                'first_work_heading' => $request->first_work_heading,
                'first_work_content' => $request->first_work_content,
                'second_work_heading' => $request->second_work_heading,
                'second_work_content' => $request->second_work_content,
                'third_work_heading' => $request->third_work_heading,
                'third_work_content' => $request->third_work_content,
                'first_background_color' => $request->first_background_color,
                'second_background_color' => $request->second_background_color,
                'third_background_color' => $request->third_background_color,
            ]);
        }

        return "Service Work Section Update Successfully";
    }
    public function update_service_Cta($request)
    {
        $validated = $request->validate([
            "service_id" => "required",
            "service_cta_heading_1" => "required",
            "service_cta_heading_2" => "required",
            "service_cta_percentage_1" => "required",
            "service_cta_percentage_2" => "required",
            "service_cta_content_1" => "required",
            "service_cta_content_2" => "required",
        ]);

        if($request->serviceCtaId == null)
        {
            $ServiceCTA2 = ServiceCTA2::create([
                "service_id" => $request->service_id,
                "service_cta_heading_1" => $request->service_cta_heading_1,
                "service_cta_heading_2" => $request->service_cta_heading_2,
                "service_cta_percentage_1" => $request->service_cta_percentage_1,
                "service_cta_percentage_2" => $request->service_cta_percentage_2,
                "service_cta_content_1" => $request->service_cta_content_1,
                "service_cta_content_2" => $request->service_cta_content_2,
            ]);
        }
        else
        {
            $ServiceCTA2 = ServiceCTA2::where('id', $request->serviceCtaId)->update([
                "service_id" => $request->service_id,
                "service_cta_heading_1" => $request->service_cta_heading_1,
                "service_cta_heading_2" => $request->service_cta_heading_2,
                "service_cta_percentage_1" => $request->service_cta_percentage_1,
                "service_cta_percentage_2" => $request->service_cta_percentage_2,
                "service_cta_content_1" => $request->service_cta_content_1,
                "service_cta_content_2" => $request->service_cta_content_2,
            ]);
        }
        return "Service CTA Update Successfully";

    }
    public function update_work_process($request)
    {
        if($request->workProcessId == null)
        {
            $validated = $request->validate([
                "process_heading_one" => 'required',
                "process_content_one" => 'required',
                "process_heading_two" => 'required',
                "process_content_two" => 'required',
                "process_heading_three" => 'required',
                "process_content_three" => 'required',
                "process_heading_four" => 'required',
                "process_content_four" => 'required',
            ]);

            $ServiceProcess = ServiceProcess::create([
                "service_id" => $request->service_id,
                "process_heading_one" => $request->process_heading_one,
                "process_content_one" => $request->process_content_one,
                "process_heading_two" => $request->process_heading_two,
                "process_content_two" => $request->process_content_two,
                "process_heading_three" => $request->process_heading_three,
                "process_content_three" => $request->process_content_three,
                "process_heading_four" => $request->process_heading_four,
                "process_content_four" => $request->process_content_four,
            ]);
        }
        else
        {
            $validated = $request->validate([
                "process_heading_one" => 'required',
                "process_content_one" => 'required',
                "process_heading_two" => 'required',
                "process_content_two" => 'required',
                "process_heading_three" => 'required',
                "process_content_three" => 'required',
                "process_heading_four" => 'required',
                "process_content_four" => 'required',
            ]);

            $ServiceProcess = ServiceProcess::where('id', $request->workProcessId)->update([
                "service_id" => $request->service_id,
                "process_heading_one" => $request->process_heading_one,
                "process_content_one" => $request->process_content_one,
                "process_heading_two" => $request->process_heading_two,
                "process_content_two" => $request->process_content_two,
                "process_heading_three" => $request->process_heading_three,
                "process_content_three" => $request->process_content_three,
                "process_heading_four" => $request->process_heading_four,
                "process_content_four" => $request->process_content_four,
            ]);
        }
        return "Service Process Update Successfully";
    }
    public function update_last_section($request)
    {
        if($request->lastSectionId == null)
        {
            $validated = $request->validate([
                'service_id' => 'required',
                'last_section_heading' => 'required',
                'last_section_content' => 'required',
                'last_heading_first' => 'required',
                'last_heading_second' => 'required',
                'last_image_first' => 'required',
                'image_content' => 'required',
            ]);

            $ServiceLastSection = ServiceLastSection::create([
                'service_id' => $request->service_id,
                'heading' => $request->last_section_heading,
                'content' => $request->last_section_content,
                'heading_2' => $request->last_heading_first,
                'heading_3' => $request->last_heading_second,
                'image_1' => $this->verifyAndUpload($request->last_image_first, "sevice_last_section"),
                'image_content' => $request->image_content,
            ]);
        }
        else
        {
            $validated = $request->validate([
                'service_id' => 'required',
                'last_section_heading' => 'required',
                'last_section_content' => 'required',
                'last_heading_first' => 'required',
                'last_heading_second' => 'required',
                'image_content' => 'required',
            ]);

            if($request->hasFile('last_image_first'))
            {
                $last_image_first = $this->verifyAndUpload($request->last_image_first, "sevice_second_section");
                $ServiceLastSection = ServiceLastSection::where('id', $request->lastSectionId)->update([
                    'image_1' => $last_image_first,
                ]);
            }

            $ServiceLastSection = ServiceLastSection::where('id', $request->lastSectionId)->update([
                'service_id' => $request->service_id,
                'heading' => $request->last_section_heading,
                'content' => $request->last_section_content,
                'heading_2' => $request->last_heading_first,
                'heading_3' => $request->last_heading_second,
                'image_content' => $request->image_content,
            ]);
        }
        return "Service Last Section Update Successfully";
    }
    public function delete_service($id)
    {
        $Services = Services::where('id', $id)->first();

        $ServiceBanner = ServiceBanner::where('service_id', $id)->first();

        $ServiceSecondSection = ServiceSecondSection::where('service_id', $id)->first();

        $ServiceWork = ServiceWork::where('service_id', $id)->first();

        $ServiceCTA2 = ServiceCTA2::where('service_id',$id)->first();

        $ServiceProcess = ServiceProcess::where('service_id',$id)->first();

        $ServiceLastSection = ServiceLastSection::where('service_id',$id)->first();

        if($Services != null)
        {
            $Services->delete();
        }
        if($ServiceBanner != null)
        {
            $ServiceBanner->delete();
        }
        if($ServiceSecondSection != null)
        {
            $ServiceSecondSection->delete();
        }
        if($ServiceWork != null)
        {
            $ServiceWork->delete();
        }
        if($ServiceCTA2 != null)
        {
            $ServiceCTA2->delete();
        }
        if($ServiceProcess != null)
        {
            $ServiceProcess->delete();
        }
        if($ServiceLastSection != null)
        {
            $ServiceLastSection->delete();
        }

        return "service deleted successfully with there sections";
    }
    public function services_packages($id)
    {
        $Packages = Packages::where("service_id", $id)->get();

        $IfSelectedOtherPackages = Packages::where("service_id", $id)->first();
        
        $alldata = [
            "Packages" => $Packages,
            "IfSelectedOtherPackages" => $IfSelectedOtherPackages != null ? $IfSelectedOtherPackages->package_type : null,
        ];

        return $alldata;
    }
    public function create_package($request)
    {
        $Packages = Packages::where("package_type", $request->package_type)->where("service_id", $request->service_id)->get();
        
        if(count($Packages) == 3)
        {
            return "You can't Upload more then 3 packages please update one of them!";
        }
        else
        {
            if($request->customField == "customField")
            {
                $Packages = Packages::create([
                    "service_id" => $request->service_id,
                    "package_list" => $request->package_list, 
                ]);
        
                return "Package Created successfully";
            }
            else
            {

                $Packages = Packages::create([
                    "service_id" => $request->service_id,
                    "package_type" => $request->package_type,
                    "package_name" => $request->package_name,
                    "description" => $request->description,
                    "package_list" => $request->package_list, 
                ]);
        
                return "Package Created successfully";
            }
        }
    }
    public function update_package($request)
    {
        if($request->customField == "customField")
        {
            $Packages = Packages::where("id", $request->package_id)->update([
                "service_id" => $request->service_id,
                "package_type" => null,
                "package_name" => null,
                "description" => null,
                "package_list" => $request->package_list, 
            ]);
        }
        else
        {
            $Packages = Packages::where("id", $request->package_id)->update([
                "service_id" => $request->service_id,
                "package_type" => $request->package_type,
                "package_name" => $request->package_name,
                "description" => $request->description,
                "package_list" => $request->package_list, 
            ]);
        }

        return "Package Updated successfully";
    }
    public function delete_package($id)
    {
        $Packages = Packages::where('id', $id)->first();

        $Packages->delete();

        return "Packagee Deleted successfully";
    }
    public function update_cta($request)
    {
        if($request->CtaSecionID == null)
        {
            $ServiceCTA = ServiceCTA::create([
                "heading" => $request->cta_heading,
                "service_id" => $request->service_id,
                "content" => $request->cta_content,
            ]);
        }
        else
        {
            $ServiceCTA = ServiceCTA::where('id', $request->CtaSecionID)->update([
                "heading" => $request->cta_heading,
                "service_id" => $request->service_id,
                "content" => $request->cta_content,
            ]);
        }

        return "Service CTA Update Successfully";
    }
}