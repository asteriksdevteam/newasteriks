<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\UserInterface;

class UserController extends Controller
{
    private UserInterface $UserInterface;

    public function __construct(UserInterface $UserInterface) 
    {
        $this->UserInterface = $UserInterface;
    }

    public function index()
    {
        $allData = $this->UserInterface->home();
        $HomeBanner = $allData['HomeBanner']; 
        $HomeBannerImages = $allData['HomeBannerImages'];
        $HomeBannerTrustedByImage = $allData['HomeBannerTrustedByImage'];
        $HomeSecondSection = $allData['HomeSecondSection'];
        $HomeServices = $allData['HomeServices'];
        $Portfolio = $allData['Portfolio'];
        $Technologies = $allData['HomeTechnologies'];
        $Awards = $allData['HomeAwards'];
        $Testimonials = $allData['HomeTestimonials'];
        $MetaTags = $allData['MetaTags'];
        $ServiceCategory = $allData['ServiceCategory'];
        $Packages = $allData['Packages'];

        return view("userPanel.home", compact(
                                                "HomeBanner",
                                                "HomeBannerImages",
                                                "HomeBannerTrustedByImage",
                                                "HomeSecondSection",
                                                "HomeServices",
                                                "Portfolio",
                                                "Technologies",
                                                "Awards",
                                                "Testimonials",
                                                "MetaTags", 'ServiceCategory',
                                                "Packages"
                                            ));
    }

    public function aboutUs()
    {
        $allData = $this->UserInterface->aboutUs();

        $WhoWeAre = $allData['WhoWeAre'];
        $Counter = $allData['Counter'];
        $CoreValues = $allData['CoreValues'];
        $CoreValueFirst = $allData['CoreValueFirst'];
        $StoryCompany = $allData['StoryCompany'];
        $CTA2 = $allData['CTA2'];
        $LeaderShip = $allData['LeaderShip'];
        $Faqs = $allData['Faqs'];
        $Affiliations = $allData['Affiliations'];
        $MetaTags = $allData['MetaTags'];
        $Testimonials = $allData['Testimonials'];
        $ServiceCategory = $allData['ServiceCategory'];

        return view("userPanel.aboutus", compact(
                                                    'WhoWeAre', 
                                                    'Counter', 
                                                    'CoreValues', 
                                                    'CoreValueFirst',
                                                    'StoryCompany',
                                                    'CTA2',
                                                    'LeaderShip',
                                                    'Faqs',
                                                    'Affiliations',
                                                    'MetaTags',
                                                    'Testimonials', 'ServiceCategory'
                                                ));
    }

    public function contactus()
    {
        $allData = $this->UserInterface->contactUs();

        $Contactus = $allData['Contactus'];
        $ServiceCategory = $allData['ServiceCategory'];
        $MetaTags = $allData['MetaTags'];


        return view("userPanel.contactus", compact('Contactus', 'ServiceCategory', 'MetaTags'));
    }

    public function service($slug)
    {
        $allData = $this->UserInterface->Service($slug);

        $Services = $allData['Services']; 
        $ServiceBanner = $allData['ServiceBanner']; 
        $ServiceSecondSection = $allData['ServiceSecondSection']; 
        $ServiceWork = $allData['ServiceWork'];
        $ServiceCTA2 = $allData['ServiceCTA2'];
        $ServiceProcess = $allData['ServiceProcess'];
        $ServiceLastSection = $allData['ServiceLastSection'];
        $ServiceCategory = $allData['ServiceCategory'];
        $Packages = $allData['Packages'];
        $ServicesID = $allData['ServicesID'];
        $Testimonials = $allData['Testimonials'];
        $ServiceCTA = $allData['ServiceCTA'];
        
        if($ServiceCategory != null && $Services != null && $ServiceBanner != null && $ServiceSecondSection != null && $ServiceWork != null && $ServiceCTA2 != null && $ServiceProcess != null && $ServiceLastSection != null && $ServiceCTA != null)
        {
            return view("userPanel.service",compact(
                                                    "Services",
                                                    "ServiceBanner",
                                                    "ServiceSecondSection",
                                                    "ServiceWork",
                                                    "ServiceCTA2",
                                                    "ServiceProcess",
                                                    "ServiceLastSection",
                                                    "ServiceCategory",
                                                    "Packages",
                                                    "ServicesID",
                                                    "Testimonials",
                                                    "ServiceCTA",
                                                ));
        }
        else
        {
            return view("userPanel.underContruction");
        }
    }

    public function blog()
    {
        $allData = $this->UserInterface->blog();

        $Blogs = $allData["Blogs"];
        $ServiceCategory = $allData["ServiceCategory"];
        $RecentBlogs = $allData["RecentBlogs"];
        $MetaTags = $allData['MetaTags'];

        return view("userPanel.blog", compact('Blogs', 'ServiceCategory', 'RecentBlogs', 'MetaTags'));
    }

    public function blogDetail($slug)
    {
        $allData = $this->UserInterface->blogDetail($slug);

        $ServiceCategory = $allData['ServiceCategory'];
        $Blogs = $allData['Blogs'];
        $RelatedBlogs = $allData['RelatedBlogs'];
        $RecentBlogs = $allData['RecentBlogs'];
        $shareComponent = $allData['shareComponent'];

        $OG_Title = $allData['OG_Title'];
        $OG_Image = $allData['OG_Image'];
        $OG_URL = $allData['OG_URL'];
        $OG_Site_Name = $allData['OG_Site_Name'];
        $OG_Description = $allData['OG_Description'];

        return view("userPanel.blogDetail", compact('Blogs', 'RelatedBlogs', 'RecentBlogs', 'ServiceCategory','shareComponent','OG_Title','OG_Image','OG_URL','OG_Site_Name','OG_Description'));
    }

    public function careers()
    {
        $allData = $this->UserInterface->careers();

        $Careers = $allData["Careers"];
        $JobCategory = $allData["JobCategory"];
        $CareerImages = $allData["CareerImages"];
        $MetaTags = $allData['MetaTags'];
        $ServiceCategory = $allData['ServiceCategory'];


        return view("userPanel.careers", compact('Careers', 'JobCategory', 'CareerImages', 'MetaTags', 'ServiceCategory'));
    }

    public function careers_detail($id)
    {
        $allData = $this->UserInterface->careers_detail($id);

        $Careers = $allData["Careers"];
        $ServiceCategory = $allData['ServiceCategory'];

        return view("userPanel.careers_detail", compact('allData', 'Careers', 'ServiceCategory'));
    }

    public function getPortfolio(Request $request)
    {
        $allData = $this->UserInterface->getPortfolio($request);

        return response()->json(["html" => $allData]);
    }

    public function getTechnologies(Request $request)
    {
        $allData = $this->UserInterface->getTechnologies($request);

        return response()->json(["html" => $allData]);
    }

    public function getMarketingLiForHeaders()
    {
        $alldata = $this->UserInterface->getMarketingLiForHeaders();

        return response()->json(["html" => $alldata]);
    }

    public function contentService()
    {
        $alldata = $this->UserInterface->contentService();

        return response()->json(["html" => $alldata]);
    }

    public function designingDevelopment()
    {
        $alldata = $this->UserInterface->designingDevelopment();

        return response()->json(["html" => $alldata]);
    }

    public function ItService()
    {
        $alldata = $this->UserInterface->ItService();

        return response()->json(["html" => $alldata]); 
    }

    public function contactForm(Request $request)
    {
        $alldata = $this->UserInterface->contactForm($request);

        return redirect()->back()->with("success", $alldata);
    }

    public function search_with_category(Request $request)
    {
        $alldata = $this->UserInterface->search_with_category($request);

        return response()->json(["html" => $alldata]);
    }

    public function search_with_all_category()
    {
        $alldata = $this->UserInterface->search_with_all_category();

        return response()->json(["html" => $alldata]);
    }

    public function search_with_side_bar(Request $request)
    {
        $alldata = $this->UserInterface->search_with_side_bar($request);

        return response()->json(["html" => $alldata]);
    }

    public function apply_on_job_dddd(Request $request)
    {
        $alldata = $this->UserInterface->apply_on_job($request);

        return response()->json(["success" => $alldata]);
    }

    public function emailSubcription(Request $request)
    {
        $alldata = $this->UserInterface->emailSubcription($request);
        
        return redirect()->back()->with("success", $alldata);
    }

    public function blogs_with_categories(Request $request)
    {
        $alldata = $this->UserInterface->blogs_with_categories($request);

        return response()->json(["html" => $alldata]);
    }

    public function all_blogs_with_categories(Request $request)
    {
        $alldata = $this->UserInterface->all_blogs_with_categories($request);

        return response()->json(["html" => $alldata]);
    }

    public function tab_With_Type(Request $request)
    {
        $alldata = $this->UserInterface->tab_With_Type($request);

        return response()->json(["html" => $alldata]);
    }

    public function PackagesForHome(Request $request)
    {
        $alldata = $this->UserInterface->PackagesForHome($request);

        return response()->json(["html" => $alldata]);
    }

    public function privacy_policy()
    {
        $allData = $this->UserInterface->privacy_policy();

        $ServiceCategory = $allData['ServiceCategory'];
        $PrivacyPolicy = $allData['PrivacyPolicy'];
        $MetaTags = $allData['MetaTags'];

        return view("userPanel.privacy_policy", compact("ServiceCategory", "PrivacyPolicy", "MetaTags"));
    }
 
    public function terms_and_conditions()
    {
        $allData = $this->UserInterface->terms_and_conditions();

        $ServiceCategory = $allData['ServiceCategory'];
        $TermsAndConditions = $allData['TermsAndConditions'];
        $MetaTags = $allData['MetaTags'];

        return view("userPanel.terms_and_conditions", compact("ServiceCategory", "TermsAndConditions", "MetaTags"));
    }

    public function get_started(Request $request)
    {
        $allData = $this->UserInterface->get_started($request);

        return redirect()->back()->with("success", $allData);
    }
    
    public function add_more_blog(Request $request)
    {
        $allData = $this->UserInterface->add_more_blog($request);
        
        return response()->json(["html" => $allData]);
    }
    
    public function search_blogs(Request $request)
    {
        $allData = $this->UserInterface->search_blogs($request);
        
        return response()->json(["html" => $allData]);
    }
}
