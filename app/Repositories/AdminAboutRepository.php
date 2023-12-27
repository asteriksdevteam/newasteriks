<?php

namespace App\Repositories;

use App\Interfaces\AdminAboutInterface;
use App\Models\WhoWeAre;
use App\Traits\ImageTrait;
use App\Models\Counter;
use App\Models\CoreValues;
use App\Models\CoreValueFirst;
use App\Models\StoryCompany;
use App\Models\CTA2;
use App\Models\LeaderShip;
use App\Models\Faqs;
use App\Models\Affiliations;

class AdminAboutRepository implements AdminAboutInterface
{
    use ImageTrait; 

    public function aboutWhoWeAre()
    {
        $WhoWeAre = WhoWeAre::first();
        return $WhoWeAre;
    }
    public function updateWhoWeAre($request)
    {
        $validated = $request->validate([
            'who_we_are' => 'required',
            'who_we_are_content' => 'required',
            'heading_1' => 'required',
            'content_1' => 'required',
            'heading_2' => 'required',
            'content_2' => 'required',
            'heading_3' => 'required',
            'content_3' => 'required',
            'heading_4' => 'required',
            'content_4' => 'required',
        ]);

        if($request->hasFile('icon_image_1'))
        {
            $icon_image_1 = $this->verifyAndUpload($request->icon_image_1, "home_protfolio_images");
            $WhoWeAre = WhoWeAre::where('id', $request->id)->update([
                'icon_image_1' => $icon_image_1,
            ]);
        }
        if($request->hasFile('icon_image_2'))
        {
            $icon_image_2 = $this->verifyAndUpload($request->icon_image_2, "home_protfolio_images");
            $WhoWeAre = WhoWeAre::where('id', $request->id)->update([
                'icon_image_2' => $icon_image_2,
            ]);
        }
        if($request->hasFile('icon_image_3'))
        {
            $icon_image_3 = $this->verifyAndUpload($request->icon_image_3, "home_protfolio_images");
            $WhoWeAre = WhoWeAre::where('id', $request->id)->update([
                'icon_image_3' => $icon_image_3,
            ]);
        }
        if($request->hasFile('icon_image_4'))
        {
            $icon_image_4 = $this->verifyAndUpload($request->icon_image_4, "home_protfolio_images");
            $WhoWeAre = WhoWeAre::where('id', $request->id)->update([
                'icon_image_4' => $icon_image_4,
            ]);
        }

        if($request->hasFile('section_image'))
        {
            $section_image = $this->verifyAndUpload($request->section_image, "home_protfolio_images");
            $WhoWeAre = WhoWeAre::where('id', $request->id)->update([
                'section_image' => $section_image,
            ]);
        }

        $WhoWeAre = WhoWeAre::where('id', $request->id)->update([
            'who_we_are' => $request->who_we_are,
            'who_we_are_content' => $request->who_we_are_content,
            'heading_1' => $request->heading_1,
            'content_1' => $request->content_1,
            'heading_2' => $request->heading_2,
            'content_2' => $request->content_2,
            'heading_3' => $request->heading_3,
            'content_3' => $request->content_3,
            'heading_4' => $request->heading_4,
            'content_4' => $request->content_4,
        ]);

        return "your Who We Are section updated successfully";
    }
    public function counter()
    {
        $Counter = Counter::first();
        return $Counter;
    }
    public function updateCounter($request)
    {
        $validated = $request->validate([
            "first_counter" => "required",
            "first_counter_name" => "required",
            "Second_counter" => "required",
            "Second_counter_name" => "required",
            "Third_counter" => "required",
            "Third_counter_name" => "required",
            "Fourth_counter" => "required",
            "Fourth_counter_name" => "required",
        ]);

        $Counter = Counter::where('id', $request->id)->update([
            "first_counter" => $request->first_counter,
            "first_counter_name" => $request->first_counter_name,
            "Second_counter" => $request->Second_counter,
            "Second_counter_name" => $request->Second_counter_name,
            "Third_counter" => $request->Third_counter,
            "Third_counter_name" => $request->Third_counter_name,
            "Fourth_counter" => $request->Fourth_counter,
            "Fourth_counter_name" => $request->Fourth_counter_name,
        ]);

        return "your Counter section updated successfully";
    }
    public function core_values()
    {
        $CoreValues = CoreValues::first();
        
        return $CoreValues;
    } 
    public function updateCoreValues($request)
    {
        $validated = $request->validate([
            "heading_1" => "required",
            "content_1" => "required",
            "heading_2" => "required",
            "content_2" => "required",
        ]);

        if($request->hasFile('main_image'))
        {
            $main_image = $this->verifyAndUpload($request->main_image, "home_protfolio_images");
            $CoreValues = CoreValues::where('id', $request->id)->update([
                'main_image' => $main_image,
            ]);
        }
        if($request->hasFile('icon_1'))
        {
            $icon_1 = $this->verifyAndUpload($request->icon_1, "home_protfolio_images");
            $CoreValues = CoreValues::where('id', $request->id)->update([
                'icon_1' => $icon_1,
            ]);
        }
        if($request->hasFile('icon_2'))
        {
            $icon_2 = $this->verifyAndUpload($request->icon_2, "home_protfolio_images");
            $CoreValues = CoreValues::where('id', $request->id)->update([
                'icon_2' => $icon_2,
            ]);
        }

        $CoreValues = CoreValues::where('id', $request->id)->update([
            "heading_1" => $request->heading_1,
            "content_1" => $request->content_1,
            "heading_2" => $request->heading_2,
            "content_2" => $request->content_2,
        ]);

        return "your Mission and Vission section updated successfully";
    } 
    public function core_values_first()
    {
        $CoreValueFirst = CoreValueFirst::first();
        return $CoreValueFirst;
    }
    public function updateCoreValuesFirst($request)
    {
        $validated = $request->validate([
            "first_heading" => "required",
            "second_heading" => "required",
            "third_heading" => "required",
            "fourth_heading" => "required",
            "fifth_heading" => "required",
            "sixth_heading" => "required",
            "first_content" => "required",
            "second_content" => "required",
            "third_content" => "required",
            "fourth_content" => "required",
            "fifth_content" => "required",
            "sixth_content" => "required",
        ]);

        $CoreValueFirst = CoreValueFirst::where('id',$request->id)->update([
            "heading_1" => $request->first_heading,
            "heading_2" => $request->second_heading,
            "heading_3" => $request->third_heading,
            "heading_4" => $request->fourth_heading,
            "heading_5" => $request->fifth_heading,
            "heading_6" => $request->sixth_heading,
            "content_1" => $request->first_content,
            "content_2" => $request->second_content,
            "content_3" => $request->third_content,
            "content_4" => $request->fourth_content,
            "content_5" => $request->fifth_content,
            "content_6" => $request->sixth_content,
        ]);

        return "your Core Values section updated successfully";
    }
    public function story_company()
    {
        $StoryCompany = StoryCompany::first();

        return $StoryCompany;
        
    }
    public function updateStoryCompany($request)
    {
        $validated = $request->validate([
            "story_content" => "required",
            "company_content" => "required",
        ]);

        if($request->hasFile('story_image'))
        {
            $story_image = $this->verifyAndUpload($request->story_image, "story_and_company_images");
            $StoryCompany = StoryCompany::where('id', $request->id)->update([
                "story_image" =>$story_image,
            ]);
        }
        if($request->hasFile('company_image'))
        {
            $company_image = $this->verifyAndUpload($request->company_image, "story_and_company_images");
            $StoryCompany = StoryCompany::where('id', $request->id)->update([
                "company_image" =>$company_image,
            ]);
        }
        if($request->hasFile('company_profile_pdf'))
        {
            $company_profile_pdf = $this->verifyAndUpload($request->company_profile_pdf, "story_and_company_images");
            $StoryCompany = StoryCompany::where('id', $request->id)->update([
                "company_profile" =>$company_profile_pdf,
            ]);
        }

        $StoryCompany = StoryCompany::where('id', $request->id)->update([
            "story_content" =>$request->story_content,
            "company_content" =>$request->company_content,  
        ]);

        return "your Story and Company section updated successfully";
    }
    public function cta2()
    {
        $CTA2 = CTA2::first();
        return $CTA2;
    }
    public function updateCTA2($request)
    {
        $validated = $request->validate([
            "first_heading" => "required",
            "second_heading" => "required",
            "first_per" => "required",
            "second_per" => "required",
            "first_content" => "required",
            "second_content" => "required",
        ]);

        $CTA2 = CTA2::where('id', $request->id)->update([
            'first_heading' => $request->first_heading,
            'second_heading' => $request->second_heading,
            'first_persentage' => $request->first_per,
            'second_persentage' => $request->second_per,
            'first_content' => $request->first_content,
            'second_content' => $request->second_content,
        ]);

        return "your CTA2 section updated successfully";

    }
    public function leadership()
    {
        $LeaderShip = LeaderShip::get();
        return $LeaderShip;
    }
    public function create_leaderShip($request)
    {
        $LeaderShip = LeaderShip::count();

        if($LeaderShip <= 3)
        {
            if($request->hasFile('Image'))
            {
                $Image = $this->verifyAndUpload($request->Image, "Image_LeaderShip");
            }
    
            $LeaderShip = LeaderShip::create([
                'name' => $request->name,
                'designation' => $request->designation,
                'image' => $Image,
                'content' => $request->LeadershipContent,
            ]);
    
            return "Your LeaderShip Created Successfully";
        }
        else
        {
            return "LeaderShip AllReady Created Please Update One Of Then Successfully";
        }
    }
    public function update_leaderShip($request)
    {
        if($request->hasFile('Image'))
        {
            $Image = $this->verifyAndUpload($request->Image, "Image_LeaderShip");
            $LeaderShip = LeaderShip::where('id',$request->id)->update([
                'image' => $Image,
            ]);
        }

        $LeaderShip = LeaderShip::where('id',$request->id)->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'content' => $request->content,
        ]);

        return "Your LeaderShip Updated Successfully";
    }
    public function delete_Leadership($request)
    {
        $LeaderShip = LeaderShip::where('id',$request->id)->first();
        $LeaderShip->delete();

        return "your Leadership deleted successfully";
    }
    public function faqs()
    {
        $Faqs = Faqs::get();
        return $Faqs;
    }
    public function create_faqs($request)
    {
        $Faqs = Faqs::create([
            'question' => $request->question, 
            'answer' => $request->answer
        ]);

        return "Faqs created Successfully";
    }
    public function update_faqs($request)
    {
        $Faqs = Faqs::where("id", $request->id)->update([
            'question' => $request->question, 
            'answer' => $request->answer
        ]);

        return "Faqs Updated Successfully";
    }
    public function delete_faqs($request)
    {
        $Faqs = Faqs::where("id", $request->id)->first();

        $Faqs->delete();

        return "Faqs Deleted Successfully";
    }
    public function affiliations()
    {
        $Affiliations = Affiliations::get();
        return $Affiliations;
    }
    public function create_or_update_affiliations($request)
    {
        if($request->id == null)
        {
            if($request->hasFile('Image'))
            {
                $Image = $this->verifyAndUpload($request->Image, "Image_affiliations");
                $Affiliations = Affiliations::create([
                    "image" => $Image,
                ]);
            }
        }
        else
        {
            if($request->hasFile('Image'))
            {
                $Image = $this->verifyAndUpload($request->Image, "Image_affiliations");
                $Affiliations = Affiliations::where("id",$request->id)->update([
                    "image" => $Image,
                ]);
            }
        }
        return "Affiliations created Successfully";
    }
    public function delete_Affiliations($request)
    {
        $Affiliations = Affiliations::where("id", $request->id)->first();

        $Affiliations->delete();
        
        return "Affiliations Deleted Successfully";
    }
}