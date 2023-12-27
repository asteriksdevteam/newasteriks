<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
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
use App\Models\WhoWeAre;
use App\Models\Counter;
use App\Models\CoreValues;
use App\Models\CoreValueFirst;
use App\Models\StoryCompany;
use App\Models\CTA2;
use App\Models\LeaderShip;
use App\Models\Faqs;
use App\Models\Affiliations;
use App\Models\Services;
use App\Models\ServiceSubCategory;
use App\Models\ServiceCategory;
use App\Models\ServiceBanner;
use App\Models\ServiceSecondSection;
use App\Models\ServiceWork;
use App\Models\ServiceCTA2;
use App\Models\ServiceProcess;
use App\Models\ServiceLastSection;
use App\Models\ContactForm;
use App\Models\JobCategory;
use App\Models\Careers;
use App\Models\AppleOnJob;
use App\Models\EmailSubcription;
use App\Models\CareerImages;
use App\Models\Blogs;
use App\Models\Packages;
use App\Models\Contactus;
use App\Models\MetaTags;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndConditions;
use App\Models\PackagePurchases;
use App\Models\ServiceCTA;
use Carbon\Carbon;

class UserRepository implements UserInterface 
{
    use ImageTrait;
      
    public function home() 
    {
        $HomeBanner = HomeBanner::first();
        $HomeBannerImages = HomeBannerImages::get();
        $HomeBannerTrustedByImage = HomeBannerTrustedByImage::get();
        $HomeSecondSection = HomeSecondSection::first();
        $HomeServices = HomeServices::first();
        $HomeTechnologies = Technologies::where("category","mobile")->get();
        $HomeAwards = Awards::get();
        $HomeTestimonials = Testimonials::get();
        $MetaTags = MetaTags::where('page','Home')->first();
        $ServiceCategory = ServiceCategory::get();

        $AllPortfolio = [
            Portfolio::where('category', 'mobile-app')->first(),
            Portfolio::where('category', 'branding')->first(),
            Portfolio::where('category', 'logo-design')->first(),
        ];

        $serviceId = ServiceSubCategory::with("Service")->where("sub_category", "Blog Management")->first();
        
        if($serviceId != null)
        {
             if($serviceId->Service != null)
            {
                $Packages = Packages::where("service_id", $serviceId->Service->id)->get();
            }
            else
            {
                $Packages = [];
            }   
        }
        else
        {
            $Packages = [];
        }
        
        $DataArray = [
            "HomeBanner" => $HomeBanner,
            "HomeBannerImages" => $HomeBannerImages,
            "HomeBannerTrustedByImage" => $HomeBannerTrustedByImage,
            "HomeSecondSection" => $HomeSecondSection,
            "HomeServices" => $HomeServices,
            "Portfolio" => $AllPortfolio,
            "HomeTechnologies" => $HomeTechnologies,
            "HomeAwards" => $HomeAwards,
            "HomeTestimonials" => $HomeTestimonials,
            "MetaTags" => $MetaTags,
            "ServiceCategory" => $ServiceCategory,
            "Packages" => $Packages,
        ];

        return $DataArray;
    }
    public function aboutUs() 
    {
        $WhoWeAre = WhoWeAre::first();
        $Counter = Counter::first();
        $CoreValues = CoreValues::first();
        $CoreValueFirst = CoreValueFirst::first();
        $StoryCompany = StoryCompany::first();
        $CTA2 = CTA2::first();
        $LeaderShip = LeaderShip::get();
        $Faqs = Faqs::get();
        $Affiliations = Affiliations::get();
        $MetaTags = MetaTags::where('page','About us')->first();
        $Testimonials = Testimonials::get();
        $ServiceCategory = ServiceCategory::get();

        $DataArray = [
            "WhoWeAre" => $WhoWeAre,
            "Counter" => $Counter,
            "CoreValues" => $CoreValues,
            "CoreValueFirst" => $CoreValueFirst,
            "StoryCompany" => $StoryCompany,
            "CTA2" => $CTA2,
            "LeaderShip" => $LeaderShip,
            "Faqs" => $Faqs,
            "Affiliations" => $Affiliations,
            "MetaTags" => $MetaTags,
            "Testimonials" => $Testimonials,
            "ServiceCategory" => $ServiceCategory
        ];

        return $DataArray;
    }
    public function Service($slug) 
    {
        $ServiceCategory = ServiceCategory::get();

        $Services = Services::where('slug', $slug)->first();

        $ServiceBanner = ServiceBanner::where('service_id', $Services->id)->first();

        $ServiceSecondSection = ServiceSecondSection::where('service_id', $Services->id)->first();

        $ServiceWork = ServiceWork::where('service_id', $Services->id)->first();

        $ServiceCTA2 = ServiceCTA2::where('service_id',$Services->id)->first();

        $ServiceProcess = ServiceProcess::where('service_id',$Services->id)->first();

        $ServiceLastSection = ServiceLastSection::where('service_id',$Services->id)->first();

        $Packages = Packages::whereIn("package_type", ["Basic", "Others"])
                                ->where('service_id', $Services->id)
                                ->get();
                                
        $Testimonials = Testimonials::get();

        $ServiceCTA = ServiceCTA::where("service_id", $Services->id)->first();

        $data = [
            'Services' => $Services,
            'ServiceBanner' => $ServiceBanner,
            'ServiceSecondSection' => $ServiceSecondSection,
            'ServiceWork' => $ServiceWork,
            'ServiceCTA2' => $ServiceCTA2,
            'ServiceProcess' => $ServiceProcess,
            'ServiceLastSection' => $ServiceLastSection,
            'ServiceCategory' => $ServiceCategory,
            'Packages' => $Packages,
            'ServicesID' => $Services->id,
            "Testimonials" => $Testimonials,
            "ServiceCTA" => $ServiceCTA
        ];

        return $data;
    }
    public function contactUs() 
    {
        $Contactus = Contactus::first();

        $ServiceCategory = ServiceCategory::get();

        $MetaTags = MetaTags::where('page','About us')->first();

        $data = [
            'Contactus' => $Contactus,
            'ServiceCategory' => $ServiceCategory,
            'MetaTags' => $MetaTags,
        ];

        return $data;
    }
    public function blog() 
    {
        // $Blogs = Blog::orderBy('date', 'desc')->where('status','Active')->limit(6)->get();
        
        $Blogs = Blogs::with("ServiceCategory")->orderBy('date', 'desc')->where('status','Active')->latest()->limit(6)->get();

        // dd($Blogs);

        $ServiceCategory = ServiceCategory::get();

        $RecentBlogs = Blogs::latest()->limit(4)->get();

        $ServiceCategory = ServiceCategory::get();

        $MetaTags = MetaTags::where('page','Blog')->first();

        $alldata = [
            "Blogs" => $Blogs,
            "ServiceCategory" => $ServiceCategory,
            "RecentBlogs" => $RecentBlogs,
            "MetaTags" => $MetaTags
        ];

        return $alldata;
    }
    public function blogDetail($slug) 
    {
        $Blogs = Blogs::where("slug",$slug)->first();

        $RelatedBlogs = Blogs::where('category', $Blogs->category)->limit(3)->get();

        $ServiceCategory = ServiceCategory::get();

        $RecentBlogs = Blogs::latest()->limit(3)->get();

        $shareComponent = \Share::currentPage()
        ->facebook()
        ->twitter()
        ->linkedin();

        $URL = "https://www.digicontentexperts.com/blog-detail/".$slug;

        $OG_Title = $Blogs->blog_title;
        $OG_Image = $Blogs->blog_thumbnail_image;
        $OG_URL = $URL;
        $OG_Site_Name = "https://asteriksdigital.com/";
        $OG_Description = $Blogs->blog_short_description;

        $alldata = [
            "Blogs" => $Blogs,
            "RelatedBlogs" => $RelatedBlogs,
            "RecentBlogs" => $RecentBlogs,
            "ServiceCategory" => $ServiceCategory,
            "shareComponent" => $shareComponent,
            "OG_Title" => $OG_Title,
            "OG_Image" => $OG_Image,
            "OG_URL" => $OG_URL,
            "OG_Site_Name" => $OG_Site_Name,
            "OG_Description" => $OG_Description,
        ];

        return $alldata; 
    }
    public function careers() 
    {
        $Careers = Careers::get();

        $ServiceCategory = ServiceCategory::get();

        $JobCategory = JobCategory::get();

        $CareerImages = CareerImages::get();

        $MetaTags = MetaTags::where('page','Careers')->first();

        $alldata = [
            "Careers" => $Careers,
            "JobCategory" => $JobCategory,
            "CareerImages" => $CareerImages,
            "MetaTags" => $MetaTags,
            "ServiceCategory" => $ServiceCategory
        ];
        
        return $alldata;
    }
    public function careers_detail($id)
    {
        $Careers = Careers::with("JobCategory")->where("id", $id)->first();

        $ServiceCategory = ServiceCategory::get();
        
        $alldata = [
            "Careers" => $Careers,
            "ServiceCategory" => $ServiceCategory,
        ];
        
        return $alldata;
    }
    public function getPortfolio($request)
    {
        if($request->get_portfolio === "all-protfolio")
        {
            $AllPortfolio = [
                Portfolio::where('category', 'mobile-app')->first(),
                Portfolio::where('category', 'branding')->first(),
                Portfolio::where('category', 'logo-design')->first(),
            ];

            $html = "";
            foreach($AllPortfolio as $key => $item)
            {
                if($item != null && $key !== 1)
                {
                    $html .= '<div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">';
                    $html .= '<div class="row mb-3 bg-lightgreen" style="background: '. $item->backgroundcolor .';">';
                    $html .= '<div class="col-lg-6 col-md-6 col-12 my-auto">';
                    $html .= '<div class="portfolio-dv">';
                    $html .= '<div class="portfolio-smallimage mb-3 pb-3">';
                    $html .= '<img src="'. asset($item->image1) .'" class="portfolio-smallimg" alt="">';
                    $html .= '</div>';
                    $html .= '<div class="portolfio-heading mb-3 pb-1">';
                    $html .= '<h3>'. $item->heading .'</h3>';
                    $html .= '</div>';
                    $html .= '<div class="portfolio-content">';
                    $html .= '<p>'. $item->content .'</p>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '<div class="col-lg-6 col-md-6 col-12">';
                    $html .= '<img src="'. asset($item->image2) .'" class="img-fluid" alt="">';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                }
                if($key === 1)
                {
                    $html .= '<div class="tab-pane fade show active" id="mobile-tab-pane" role="tabpanel" aria-labelledby="mobile-tab" tabindex="0">';
                    $html .= '<div class="row mb-3 bg-yellow" style="background: '. $item->backgroundcolor .';">';
                    $html .= '<div class="col-lg-6 col-md-6 col-12 ipad-order1">';
                    $html .= '<img src="'. asset($item->image2) .'" class="img-fluid" alt="">';
                    $html .= '</div>';
                    $html .= '<div class="col-lg-6 col-md-6 col-12 ipad-order2 my-auto my-auto">';
                    $html .= '<div class="portfolio-dv">';
                    $html .= '<div class="portfolio-smallimage mb-3 pb-3">';
                    $html .= '<img src="'. asset($item->image1) .'" class="portfolio-smallimg" alt="">';
                    $html .= '</div>';
                    $html .= '<div class="portolfio-heading mb-3 pb-1">';
                    $html .= '<h3>'. $item->heading .'</h3>';
                    $html .= '</div>';
                    $html .= '<div class="portfolio-content">';
                    $html .= '<p>'. $item->content.'</p>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                }
            }
        }
        else
        {
            $Portfolio = Portfolio::where("category",$request->get_portfolio)->get();

            $html = "";
            foreach($Portfolio as $key => $item)
            {
                if($item != null && $key !== 1)
                {
                    $html .= '<div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">';
                    $html .= '<div class="row mb-3 bg-lightgreen" style="background: '. $item->backgroundcolor .';">';
                    $html .= '<div class="col-lg-6 col-md-6 col-12 my-auto">';
                    $html .= '<div class="portfolio-dv">';
                    $html .= '<div class="portfolio-smallimage mb-3 pb-3">';
                    $html .= '<img src="'. asset($item->image1) .'" class="portfolio-smallimg" alt="">';
                    $html .= '</div>';
                    $html .= '<div class="portolfio-heading mb-3 pb-1">';
                    $html .= '<h3>'. $item->heading .'</h3>';
                    $html .= '</div>';
                    $html .= '<div class="portfolio-content">';
                    $html .= '<p>'. $item->content .'</p>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '<div class="col-lg-6 col-md-6 col-12">';
                    $html .= '<img src="'. asset($item->image2) .'" class="img-fluid" alt="">';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                }
                if($key === 1)
                {
                    $html .= '<div class="tab-pane fade show active" id="mobile-tab-pane" role="tabpanel" aria-labelledby="mobile-tab" tabindex="0">';
                    $html .= '<div class="row mb-3 bg-yellow" style="background: '. $item->backgroundcolor .';">';
                    $html .= '<div class="col-lg-6 col-md-6 col-12 ipad-order1">';
                    $html .= '<img src="'. asset($item->image2) .'" class="img-fluid" alt="">';
                    $html .= '</div>';
                    $html .= '<div class="col-lg-6 col-md-6 col-12 ipad-order2 my-auto my-auto">';
                    $html .= '<div class="portfolio-dv">';
                    $html .= '<div class="portfolio-smallimage mb-3 pb-3">';
                    $html .= '<img src="'. asset($item->image1) .'" class="portfolio-smallimg" alt="">';
                    $html .= '</div>';
                    $html .= '<div class="portolfio-heading mb-3 pb-1">';
                    $html .= '<h3>'. $item->heading .'</h3>';
                    $html .= '</div>';
                    $html .= '<div class="portfolio-content">';
                    $html .= '<p>'. $item->content.'</p>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                }
            }
        }

        return $html;
    }
    public function getTechnologies($request)
    {
        $Technologies = Technologies::where("category", $request->get_technologies)->get();

        $html = "";
        $html .= '<div class="tab-pane fade show active " id="mobile1-tab-pane" role="tabpanel" aria-labelledby="mobile1-tab" tabindex="0">';
        $html .= '<div class="row justify-content-center text-center mt-5 pt-1">';
        foreach($Technologies as $key => $item)
        {
            $html .='<div class="col">';
            $html .='<div class="tec-div">';
            $html .='<img src="'. asset($item->images).'" class="img-fluid tec1" alt="">';
            $html .='<p>'. $item->name .'</p>';
            $html .='</div>';
            $html .='</div>';
        }
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
    public function getMarketingLiForHeaders()
    {
        $ServiceCategory = ServiceCategory::where('id','1')->first();

        $ServiceSubCategory = ServiceSubCategory::select('id')->where('category_id',$ServiceCategory->id)->get();

        $Services = Services::with("ServiceSubCategory")->whereIn('subcategory',$ServiceSubCategory)->get();

        $html = "";

        foreach($Services as $item)
        {
            $html .= "<li><a href='".url('service/'.$item->slug)."'>".$item->ServiceSubCategory->sub_category."</a></li>";
        }

        return $html;
    }
    public function contentService()
    {
        $ServiceCategory = ServiceCategory::where('id','2')->first();

        $ServiceSubCategory = ServiceSubCategory::select('id')->where('category_id',$ServiceCategory->id)->get();

        $Services = Services::with("ServiceSubCategory")->whereIn('subcategory',$ServiceSubCategory)->get();

        $html = "";

        foreach($Services as $item)
        {
            $html .= "<li><a href='".url('service/'.$item->slug)."'>".$item->ServiceSubCategory->sub_category."</a></li>";
        }

        return $html;
    }
    public function designingDevelopment()
    {
        $ServiceCategory = ServiceCategory::where('id','3')->first();

        $ServiceSubCategory = ServiceSubCategory::select('id')->where('category_id',$ServiceCategory->id)->get();

        $Services = Services::with("ServiceSubCategory")->whereIn('subcategory',$ServiceSubCategory)->get();

        $html = "";

        foreach($Services as $item)
        {
            $html .= "<li><a href='".url('service/'.$item->slug)."'>".$item->ServiceSubCategory->sub_category."</a></li>";
        }

        return $html;
    }
    public function ItService()
    {
        $ServiceCategory = ServiceCategory::where('id','4')->first();

        $ServiceSubCategory = ServiceSubCategory::select('id')->where('category_id',$ServiceCategory->id)->get();

        $Services = Services::with("ServiceSubCategory")->whereIn('subcategory',$ServiceSubCategory)->get();

        $html = "";

        foreach($Services as $item)
        {
            $html .= "<li><a href='".url('service/'.$item->slug)."'>".$item->ServiceSubCategory->sub_category."</a></li>";
        }

        return $html;
    }
    public function contactForm($request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'summary' => 'required',
        ]);

        $ContactForm = ContactForm::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "category" => $request->category,
            "summary" => $request->summary,
        ]);

        return "Your Message recived Successfully we will Contact you as soon as possible";
    }
    public function search_with_category($request)
    {
        $Careers = Careers::with("JobCategory")->where("department", $request->id)->get();

        $html = "";
        foreach($Careers as $item)
        {
            $html .= '<div class="col-lg-6 col-md-6 col-12 mb-4">';
            $html .= '<div class="carer-opportunity p-3">';
            $html .= '<div class="career-div">';
            $html .= '<h4>'. $item->job_heading .'</h4>';
            $html .= '<p>'. $item->city .','.  $item->job_type .'</p>';
            $html .= '</div>';
            $html .= '<div class="career-btn">';
            $html .= '<a href="'. url('careers-detail/'. $item->id) .'">see details</a>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }

        return $html; 
    }
    public function search_with_all_category()
    {
        $Careers = Careers::get();

        $html = "";
        foreach($Careers as $item)
        {
            $html .= '<div class="col-lg-6 col-md-6 col-12 mb-4">';
            $html .= '<div class="carer-opportunity p-3">';
            $html .= '<div class="career-div">';
            $html .= '<h4>'. $item->job_heading .'</h4>';
            $html .= '<p>'. $item->city .','.  $item->job_type .'</p>';
            $html .= '</div>';
            $html .= '<div class="career-btn">';
            $html .= '<a href="'. url('careers-detail/'. $item->id) .'">see details</a>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }

        return $html; 
    }
    public function search_with_side_bar($request)
    {
        $search = $request->search;
        $location = $request->location;

        $Careers = Careers::where('job_heading', 'like', '%' . $search . '%')->Where('city', 'like', '%' . $location . '%')->get();

        $html = "";
        foreach($Careers as $item)
        {
            $html .= '<div class="col-lg-6 col-md-6 col-12 mb-4">';
            $html .= '<div class="carer-opportunity p-3">';
            $html .= '<div class="career-div">';
            $html .= '<h4>'. $item->job_heading .'</h4>';
            $html .= '<p>'. $item->city .','.  $item->job_type .'</p>';
            $html .= '</div>';
            $html .= '<div class="career-btn">';
            $html .= '<a href="'. url('careers-detail/'. $item->id) .'">see details</a>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }

        return $html; 
    }
    public function apply_on_job($request)
    {
        if($request->hasFile('cv'))
        {
            $cv = $this->verifyAndUpload($request->cv, "apply_on_job");
        }
        if($request->hasFile('coverLetter'))
        {
            $coverLetter = $this->verifyAndUpload($request->coverLetter, "apply_on_job");
        }
        $AppleOnJob = AppleOnJob::create([
            'name' => $request->name,
            'job_id' => $request->job_id,
            'phone' => $request->phone,
            'email' => $request->email,
            'portfolio' => $request->portfolio,
            'cv' => $cv,
            'cover_letter' => $coverLetter,
        ]);

        return "You Applied Successfully!";
    }
    public function emailSubcription($request)
    {
        $EmailSubcription = EmailSubcription::create([
            "email" => $request->email,
        ]);
        
        return "You Subscript Successfully!";
    }
    public function blogs_with_categories($request)
    {
        $Blogs = Blogs::where("category", $request->id)->get();

        $html = "";

        foreach($Blogs as $item)
        {
            $html .= '<div class="col-lg-4 col-md-6 col-12 mb-4">';
                $html .= '<div class="card blog-card">';
                    $html .= '<div class="card-header blog-header">';
                        $html .= '<img src="'.asset($item->blog_thumbnail_image) .'" class="img-fluid blog-img" alt="'. $item->blog_thumbnail_image .'">';
                    $html .= '</div>';
                    $html .= '<div class="card-body">';
                        $html .= '<div class="blog-body">';
                            $html .= '<p><span style="color: #f55e43;font-weight: bold;">'. $item->author .'</span> | <span style="color: #081c26;font-weight: bold;">'. $item->ServiceCategory->category .'</span> | '. Carbon::parse($item->date)->format('M d, Y') .'</p>';
                            $html .= '<h5><a href="'. url('blog-detail/'.$item->slug) .'" style="color: #081c26;" >'. $item->blog_title .'</a></h5>';
                        $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';
            $html .= '</div>';
        }

        return $html;
    }
    public function all_blogs_with_categories($request)
    {
        $Blogs = Blogs::limit(6)->get();

        $html = "";

        foreach($Blogs as $item)
        {
            $html .= '<div class="col-lg-4 col-md-6 col-12 mb-4">';
                $html .= '<div class="card blog-card">';
                    $html .= '<div class="card-header blog-header">';
                        $html .= '<img src="'.asset($item->blog_thumbnail_image) .'" class="img-fluid blog-img" alt="'. $item->blog_thumbnail_image .'">';
                    $html .= '</div>';
                    $html .= '<div class="card-body">';
                        $html .= '<div class="blog-body">';
                            $html .= '<p><span style="color: #f55e43;font-weight: bold;">'. $item->author .'</span> | <span style="color: #081c26;font-weight: bold;">'. $item->ServiceCategory->category .'</span> | '. Carbon::parse($item->date)->format('M d, Y') .'</p>';
                            $html .= '<h5><a href="'. url('blog-detail/'.$item->slug) .'" style="color: #081c26;" >'. $item->blog_title .'</a></h5>';
                        $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';
            $html .= '</div>';
        }

        return $html;
    }
    public function tab_With_Type($request)
    {
        $Packages = Packages::where("service_id", $request->ServicesID)->where("package_type", $request->tabWithType)->get();

        $html = "";

        foreach($Packages as $item)
        {
            $html .= '<div class="col-lg-4 col-md-4 col-12">';
            $html .= '<div class="card pricing-card">';
            $html .= '<div class="card-header">';
            $html .= '<div class="pricing-header">';
            $html .= '<h5>'. $item->package_name .'</h5>';
            $html .= '<p>'. $item->description .'</p>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="card-body pt-0">';
            $html .= '<div class="pricing-wrapper">';
            $html .= '<div class="pricing-body">';
            $html .= ''. $item->package_list .'';
            $html .= '</div>';
            $html .= '<div class="pricing-btn">';
            $html .= '<a href="#">get started</a>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }

        return $html;
    }
    public function PackagesForHome($request)
    {
        
        if($request->PackagesForHomePage === "blog management")
        {
            $serviceId = ServiceSubCategory::with("Service")->where("sub_category", "Blog Management")->first();
            if($serviceId->Service != null)
            {
                $Packages = Packages::where("service_id", $serviceId->Service->id)->get();
                $html = $this->get_home_page_html($Packages);
                return $html;
            }
            else{
                $html = "";
                return $html;
            }
        }
        if($request->PackagesForHomePage === "digital marketing")
        {
            $serviceId = ServiceSubCategory::with("Service")->where("sub_category", "Digital Marketing Packages")->first();
            if($serviceId->Service != null)
            {
                $Packages = Packages::where("service_id", $serviceId->Service->id)->get();
            
                $html = $this->get_home_page_html($Packages);
                return $html;
            }
            else{
                $html = "";
                return $html;
            }
        }
        if($request->PackagesForHomePage === "website development")
        {
            $serviceId = ServiceSubCategory::with("Service")->where("sub_category", "Website Development")->first();
            
            if($serviceId->Service != null)
            {
                $Packages = Packages::where("service_id", $serviceId->Service->id)->latest()->limit(3)->get();
                $html = $this->get_home_page_html($Packages);
                return $html;
            }
            else{
                $html = "";
                return $html;
            }
        }
        if($request->PackagesForHomePage === "branding")
        {
            $serviceId = ServiceSubCategory::with("Service")->where("sub_category", "Branding")->first();
            if($serviceId->Service != null)
            {
                $Packages = Packages::where("service_id", $serviceId->Service->id)->get();
                $html = $this->get_home_page_html($Packages);
                return $html;
            }
            else{
                $html = "";
                return $html;
            }
        }
    }
    public function get_home_page_html($Packages)
    {
        $html = '';

        foreach($Packages as $item)
        {
            $html .= '<div class="col-lg-4 col-md-4 col-12">';
            $html .= '<div class="card pricing-card">';
            $html .= '<div class="card-header">';
            $html .= '<div class="pricing-header">';
            $html .= '<h5>'. $item->package_name .'</h5>';
            $html .= '<p>'. $item->description .'</p>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="card-body pt-0">';
            $html .= '<div class="pricing-wrapper">';
            $html .= '<div class="pricing-body">';
            $html .= ''. $item->package_list .'';
            $html .= '</div>';
            $html .= '<div class="pricing-btn">';
            $html .= '<a href="#">get started</a>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }

        return $html;
    }
    public function privacy_policy()
    {
        $ServiceCategory = ServiceCategory::get();

        $PrivacyPolicy = PrivacyPolicy::first();

        $MetaTags = MetaTags::where('page','Privacy Policy')->first();

        $alldata = [
            "ServiceCategory" => $ServiceCategory,
            "PrivacyPolicy" => $PrivacyPolicy,
            "MetaTags" => $MetaTags
        ];

        return $alldata;
    }
    public function terms_and_conditions()
    {
        $ServiceCategory = ServiceCategory::get();

        $TermsAndConditions = TermsAndConditions::first();

        $MetaTags = MetaTags::where('page','Terms and Conditions')->first();

        $alldata = [
            "ServiceCategory" => $ServiceCategory,
            "TermsAndConditions" => $TermsAndConditions,
            "MetaTags" => $MetaTags
        ];

        return $alldata;
    }
    public function get_started($request)
    {
        $PackagePurchases = PackagePurchases::create([
            "package_id" => $request->package_id,
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "summary" => $request->summary,
        ]);

        return "message recived successfully";
    }
    public function add_more_blog($request)
    {
        $actualCount = $request->count + 3;
        $Blogs = Blogs::orderBy('date', 'desc')->where('status','Active')->limit($actualCount)->get();
        $html = '';
        foreach($Blogs as $item)
        {
            $html .= '<div class="col-lg-4 col-md-6 col-12 mb-4">';
                $html .= '<div class="card blog-card">';
                    $html .= '<div class="card-header blog-header">';
                        $html .= '<img src="'.asset($item->blog_thumbnail_image) .'" class="img-fluid blog-img" alt="'. $item->blog_thumbnail_image .'">';
                    $html .= '</div>';
                    $html .= '<div class="card-body">';
                        $html .= '<div class="blog-body">';
                            $html .= '<p><span style="color: #f55e43;font-weight: bold;">'. $item->author .'</span> | <span style="color: #081c26;font-weight: bold;">'. $item->ServiceCategory->category .'</span> | '. Carbon::parse($item->date)->format('M d, Y') .'</p>';
                            $html .= '<h5><a href="'. url('blog-detail/'.$item->slug) .'" style="color: #081c26;" >'. $item->blog_title .'</a></h5>';
                        $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';
            $html .= '</div>';
        }

        return $html;
    }
    public function search_blogs($request)
    {
        $Blogs = Blogs::orderBy('date', 'desc')->where('status','Active')->Where('blog_title', 'like', '%' . $request->count . '%')->get();
        
        $html = '';
        foreach($Blogs as $item)
        {
            $html .= '<div class="col-lg-4 col-md-6 col-12 mb-4">';
                $html .= '<div class="card blog-card">';
                    $html .= '<div class="card-header blog-header">';
                        $html .= '<img src="'.asset($item->blog_thumbnail_image) .'" class="img-fluid blog-img" alt="'. $item->blog_thumbnail_image .'">';
                    $html .= '</div>';
                    $html .= '<div class="card-body">';
                        $html .= '<div class="blog-body">';
                            $html .= '<p><span style="color: #f55e43;font-weight: bold;">'. $item->author .'</span> | <span style="color: #081c26;font-weight: bold;">'. $item->ServiceCategory->category .'</span> | '. Carbon::parse($item->date)->format('M d, Y') .'</p>';
                            $html .= '<h5><a href="'. url('blog-detail/'.$item->slug) .'" style="color: #081c26;" >'. $item->blog_title .'</a></h5>';
                        $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';
            $html .= '</div>';
        }

        return $html;
    }
}