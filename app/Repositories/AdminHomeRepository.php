<?php

namespace App\Repositories;

use App\Interfaces\AdminHomeInterface;
use App\Traits\ImageTrait;
use App\Models\HomeBanner;
use App\Models\HomeBannerImages;
use App\Models\HomeBannerTrustedByImage;
use App\Models\HomeSecondSection;
use App\Models\HomeServices;
use App\Models\Portfolio;
use App\Models\Technologies;
use App\Models\Awards;
use App\Models\Testimonials;
use App\Models\MetaTags;
use App\Models\OfferTabImages;

class AdminHomeRepository implements AdminHomeInterface
{
    use ImageTrait;
      
    public function homeBanner() 
    {
        $HomeBanner = HomeBanner::first();
        $HomeBannerImages = HomeBannerImages::get();
        $HomeBannerTrustedByImage = HomeBannerTrustedByImage::get();

        $data = [
            'HomeBanner' => $HomeBanner,
            'HomeBannerImages' => $HomeBannerImages,
            'HomeBannerTrustedByImage' => $HomeBannerTrustedByImage,
        ];

        return $data;
    }
    public function updateHomeBanner($request) 
    {
        $validated = $request->validate([
            'banner_heading' => 'required',
            'banner_content' => 'required',
        ]);

        if($request->hasFile('trusted_by_image'))
        {
            foreach ($request->file('trusted_by_image') as $file) 
            {
                if ($file && $file->isValid()) 
                {
                    $Images = $this->verifyAndUpload($file, "home_trusted_by_image");
                    $HomeBannerTrustedByImage = HomeBannerTrustedByImage::create([
                        "trusted_by_image" => $Images,
                    ]);
                }
            }
        }

        if($request->hasFile('banner_images'))
        {
            foreach ($request->file('banner_images') as $file) 
            {
                if ($file && $file->isValid()) 
                {
                    $Images = $this->verifyAndUpload($file, "home_banner_images");
                    $HomeBannerTrustedByImage = HomeBannerImages::create([
                        "image" => $Images,
                    ]);
                }
            }
        }

        $HomeBanner = HomeBanner::where('id',$request->banner_id)->update([
            "banner_heading" => $request->banner_heading,
            "banner_content" => $request->banner_content
        ]);

        return "success";
    }
    public function deleteHomeBannerImages($request)
    {
        $HomeBannerImages = HomeBannerImages::where("id",$request)->first();
        $Delete = $HomeBannerImages->delete();

        return "success";
    } 
    public function deleteTrustedByImageId($request)
    {
        $HomeBannerTrustedByImage = HomeBannerTrustedByImage::where("id",$request)->first();
        $Delete = $HomeBannerTrustedByImage->delete();

        return "success";
    }
    public function secondSection()
    {
        $HomeSecondSection = HomeSecondSection::first();
        return $HomeSecondSection;
    }
    public function updateSecondSection($request)
    {
        $validated = $request->validate([
            'second_section_heading_1' => 'required',
            'second_section_heading_2' => 'required',
            'second_section_heading_3' => 'required',
            'second_section_heading_4' => 'required',
            'second_section_content_1' => 'required',
            'second_section_content_2' => 'required',
            'second_section_content_3' => 'required',
            'second_section_content_4' => 'required',
        ]);

        if($request->hasFile('second_section_image_1'))
        {
            $Images1 = $this->verifyAndUpload($request->second_section_image_1, "home_second_section_images");
            $HomeSecondSection = HomeSecondSection::where("id", $request->id)->update([
                "image1" => $Images1,
            ]);
        }
        if($request->hasFile('second_section_image_2'))
        {
            $Images2 = $this->verifyAndUpload($request->second_section_image_2, "home_second_section_images");
            $HomeSecondSection = HomeSecondSection::where("id", $request->id)->update([
                "image2" => $Images2,
            ]);
        }
        if($request->hasFile('second_section_image_3'))
        {
            $Images3 = $this->verifyAndUpload($request->second_section_image_3, "home_second_section_images");
            $HomeSecondSection = HomeSecondSection::where("id", $request->id)->update([
                "image3" => $Images3,
            ]);
        }
        if($request->hasFile('second_section_image_4'))
        {
            $Images4 = $this->verifyAndUpload($request->second_section_image_4, "home_second_section_images");
            $HomeSecondSection = HomeSecondSection::where("id", $request->id)->update([
                "image4" => $Images4,
            ]);
        }

        $HomeSecondSection = HomeSecondSection::where("id", $request->id)->update([
            "heading1" => $request->second_section_heading_1,
            "heading2" => $request->second_section_heading_2,
            "heading3" => $request->second_section_heading_3,
            "heading4" => $request->second_section_heading_4,
            "content1" => $request->second_section_content_1,
            "content2" => $request->second_section_content_2,
            "content3" => $request->second_section_content_3,
            "content4" => $request->second_section_content_4,
        ]);

    }
    public function service()
    {
        $HomeServices = HomeServices::first();
        return $HomeServices;
    }
    public function updateService($request)
    {
        $validated = $request->validate([
            'second_section_heading_1' => 'required',
            'second_section_heading_2' => 'required',
            'second_section_heading_3' => 'required',
            'second_section_heading_4' => 'required',
            'second_section_content_1' => 'required',
            'second_section_content_2' => 'required',
            'second_section_content_3' => 'required',
            'second_section_content_4' => 'required',
        ]);

        if($request->hasFile('second_section_image_1'))
        {
            $Images1 = $this->verifyAndUpload($request->second_section_image_1, "home_second_section_images");
            $HomeServices = HomeServices::where("id", $request->id)->update([
                "image1" => $Images1,
            ]);
        }
        if($request->hasFile('second_section_image_2'))
        {
            $Images2 = $this->verifyAndUpload($request->second_section_image_2, "home_second_section_images");
            $HomeServices = HomeServices::where("id", $request->id)->update([
                "image2" => $Images2,
            ]);
        }
        if($request->hasFile('second_section_image_3'))
        {
            $Images3 = $this->verifyAndUpload($request->second_section_image_3, "home_second_section_images");
            $HomeServices = HomeServices::where("id", $request->id)->update([
                "image3" => $Images3,
            ]);
        }
        if($request->hasFile('second_section_image_4'))
        {
            $Images4 = $this->verifyAndUpload($request->second_section_image_4, "home_second_section_images");
            $HomeServices = HomeServices::where("id", $request->id)->update([
                "image4" => $Images4,
            ]);
        }

        $HomeServices = HomeServices::where("id", $request->id)->update([
            "heading1" => $request->second_section_heading_1,
            "heading2" => $request->second_section_heading_2,
            "heading3" => $request->second_section_heading_3,
            "heading4" => $request->second_section_heading_4,
            "content1" => $request->second_section_content_1,
            "content2" => $request->second_section_content_2,
            "content3" => $request->second_section_content_3,
            "content4" => $request->second_section_content_4,
        ]);
    }
    public function portfolio()
    {
        $Portfolio = Portfolio::paginate(10);
        return $Portfolio;
    }
    public function create_protfolio($request)
    {
        $PortfolioCount = Portfolio::where('category', $request->category)->count(); 

        if($PortfolioCount == 3)
        {
            return "your portfolio allready uploaded please edit one of them or change your category";
        }
        else
        {
            if($request->hasFile('image1'))
            {
                $image1 = $this->verifyAndUpload($request->image1, "home_protfolio_images");
            }
    
            if($request->hasFile('image2'))
            {
                $image2 = $this->verifyAndUpload($request->image2, "home_protfolio_images");
            }
    
            $Portfolio = Portfolio::create([
                'category' => $request->category,
                'heading' => $request->heading,
                'content' => $request->content,
                'image1' => $image1,
                'image2' => $image2,
                'backgroundcolor' => $request->background_color,
            ]);

            return "your portfolio created successfully";
        }
    }
    public function update_protfolio($request)
    {
        if($request->hasFile('image1'))
        {
            $image1 = $this->verifyAndUpload($request->image1, "home_protfolio_images");
            $Portfolio = Portfolio::where("id",$request->id)->update([
                'image1' => $image1,
            ]);
        }

        if($request->hasFile('image2'))
        {
            $image2 = $this->verifyAndUpload($request->image2, "home_protfolio_images");
            $Portfolio = Portfolio::where("id",$request->id)->update([
                'image2' => $image2,
            ]);
        }

        $Portfolio = Portfolio::where("id",$request->id)->update([
            'category' => $request->category,
            'heading' => $request->heading,
            'content' => $request->content,
            'backgroundcolor' => $request->background_color,
        ]);

        return "your portfolio updated successfully";
    }
    public function delete_protfolio($request)
    {
        $Portfolio = Portfolio::where("id",$request->id)->first();

        $Portfolio->delete();

        return "your portfolio deleted successfully";
    }
    public function technologies()
    {
        $Technologies = Technologies::paginate(10);
        return $Technologies;
    }
    public function create_technologies($request)
    {
        if($request->hasFile('image'))
        {
            $Images = $this->verifyAndUpload($request->image, "technologies_images");
        }

        $Technologies = Technologies::create([
            'category' => $request->category,
            'name' => $request->name,
            'images' => $Images,
        ]);

        return "your technology created successfully";
    }
    public function delete_technologies($request)
    {
        $Technologies = Technologies::where("id",$request->id)->first();

        $Technologies->delete();

        return "your technologies deleted successfully";
    }
    public function awards()
    {
        $Awards = Awards::get();
        return $Awards;
    }
    public function create_awards($request)
    {
        if($request->hasFile('image'))
        {
            $images = $this->verifyAndUpload($request->image, "awards_images");
        }

        $Awards = Awards::create([
            'heading' => $request->heading,
            'content' => $request->content,
            'images' => $images,
        ]);

        return "your award created successfully";
    }
    public function delete_awards($request)
    {
        $Awards = Awards::where("id",$request->id)->first();

        $Awards->delete();

        return "your awards deleted successfully";
    }
    public function update_awards($request)
    {
        if($request->hasFile('image'))
        {
            $images = $this->verifyAndUpload($request->image, "awards_images");
            $Awards = Awards::where('id', $request->id)->update([
                'images' => $images,
            ]);
        }

        $Awards = Awards::where('id', $request->id)->update([
            'heading' => $request->heading,
            'content' => $request->content,
        ]);

        return "your award updated successfully";
    }
    public function testimonials()
    {
        $Testimonials = Testimonials::get();
        return $Testimonials;
    }
    public function create_testimonials($request)
    {
        if($request->hasFile('image'))
        {
            $images = $this->verifyAndUpload($request->image, "testimonials_images");
        }

        $Testimonials = Testimonials::create([
            "content" => $request->content,
            "name" => $request->name,
            "designation" => $request->designation,
            "image" => $images,
        ]);

        return "your testimonials created successfully";
    }
    public function update_testimonials($request)
    {
        if($request->hasFile('image'))
        {
            $images = $this->verifyAndUpload($request->image, "testimonials_images");
            $Testimonials = Testimonials::where('id', $request->id)->update([
                "image" => $images,
            ]);
        }

        $Testimonials = Testimonials::where('id', $request->id)->update([
            "content" => $request->content,
            "name" => $request->name,
            "designation" => $request->designation,
        ]);

        return "your testimonials updated successfully";
    }
    public function delete_testimonials($request)
    {
        $Testimonials = Testimonials::where('id', $request->id)->first();

        $Testimonials->delete();

        return "your testimonials deleted successfully";

    }
    public function meta_tags()
    {
        $MetaTags = MetaTags::get();
        return $MetaTags;
    }
    public function create_meta_tags($request)
    {
        $KeywordArray = json_decode($request->keyword, true);

        $KeywordValuesArray = array_column($KeywordArray, 'value');

        $KeywordCommaSeparatedValues = implode(', ', $KeywordValuesArray);

        $MetaTags = MetaTags::create([
            "page" => $request->category,
            "title" => $request->title,
            "keyword" => $KeywordCommaSeparatedValues,
            "description" => $request->description,
        ]);

        return "your meta tags created successfully";
    }
    public function edit_meta_tags($id)
    {
        $MetaTags = MetaTags::find($id);
        return $MetaTags;
    }
    public function update_meta_tags($request)
    {
        $validated = $request->validate([
            "editCategory" => 'required',
            "editTitle" => 'required',
            "keyword" => 'required|json',
            "keyword.*" => 'string|max:255',
            "editDescription" => 'required',
        ]);

        $KeywordArray = json_decode($request->keyword, true);

        $KeywordValuesArray = array_column($KeywordArray, 'value');

        $KeywordCommaSeparatedValues = implode(', ', $KeywordValuesArray);

        $MetaTags = MetaTags::where("id", $request->editPageId)->update([
            "page" => $request->editCategory,
            "title" => $request->editTitle,
            "keyword" => $KeywordCommaSeparatedValues,
            "description" => $request->editDescription,
        ]);

        return "your meta tags updated successfully successfully";
    }
    public function delete_meta_tags($id)
    {
        $MetaTags = MetaTags::find($id);

        $MetaTags->delete();

        return "your meta tags Deleted successfully";
    }
    public function offer_tab()
    {
        $OfferTabImages = OfferTabImages::first();
        return $OfferTabImages;
    }
    public function updateOfferTabs($request)
    {
        $validated = $request->validate([
            'offer_tab' => 'required',
        ]);

        if($request->hasFile('offer_tab'))
        {
            $Image = $this->verifyAndUpload($request->offer_tab, "offer_tab");

            $OfferTabImages = OfferTabImages::where("id", $request->id)->update([
                "image" => $Image,
            ]);
        }

        return "offer Image Updated Successfully";
    }
}