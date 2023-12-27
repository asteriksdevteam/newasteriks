<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\AdminHomeInterface;

class HomeController extends Controller
{
    private AdminHomeInterface $AdminHomeInterface;

    public function __construct(AdminHomeInterface $AdminHomeInterface) 
    {
        $this->AdminHomeInterface = $AdminHomeInterface;

        $this->middleware('role:Home-Manager', ['only' => [
            'homeBanner', 'updateHomeBanner', 'deleteHomeBannerImages', 'deleteTrustedByImageId',
            'secondSection', 'updateSecondSection',
            'service', 'updateService',
            'portfolio', 'create_protfolio', 'update_protfolio', 'delete_protfolio',
            'technologies', 'create_technologies', 'delete_technologies',
            'awards', 'create_awards', 'delete_awards', 'update_awards',
            'testimonials', 'create_testimonials', 'update_testimonials', 'delete_testimonials',
            'meta_tags', 'create_meta_tags', 'edit_meta_tags', 'update_meta_tags', 'delete_meta_tags',
            'offer_tab', 'updateOfferTabs'
        ]]);
    }

    // these all function are for home page banner start 
    public function homeBanner()
    {
        $alldata = $this->AdminHomeInterface->homeBanner();

        $HomeBanner = $alldata["HomeBanner"];
        $HomeBannerImages = $alldata["HomeBannerImages"];
        $HomeBannerTrustedByImage = $alldata["HomeBannerTrustedByImage"];

        return view("adminPanel.homePages.homeBanner", compact('HomeBanner', 'HomeBannerImages', 'HomeBannerTrustedByImage')); 
    }
    public function updateHomeBanner(Request $request)
    {
        $alldata = $this->AdminHomeInterface->updateHomeBanner($request);

        return redirect()->back()->with("success", "Banner Updated Successfully");
    }
    public function deleteHomeBannerImages(Request $request)
    {
        $reponse = $this->AdminHomeInterface->deleteHomeBannerImages($request->id);

        return response()->json(["success"=>"Banner Deleted Successfully"]);

    }
    public function deleteTrustedByImageId(Request $request)
    {
        $reponse = $this->AdminHomeInterface->deleteTrustedByImageId($request->id);

        return response()->json(["success"=>"Banner Deleted Successfully"]);

    }
    // end

    // these all function are for home page second section start 
    public function secondSection()
    {
        $alldata = $this->AdminHomeInterface->secondSection();

        return view("adminPanel.homePages.secondSection", compact('alldata'));
    }
    public function updateSecondSection(Request $request)
    {
        $alldata = $this->AdminHomeInterface->updateSecondSection($request);

        return redirect()->back()->with("success", "Second Section Updated Successfully");
    }
    // end


    // these all function are for home page Services start 
    public function service()
    {
        $alldata = $this->AdminHomeInterface->service();

        return view("adminPanel.homePages.service", compact('alldata'));
    }
    public function updateService(Request $request)
    {
        $alldata = $this->AdminHomeInterface->updateService($request);

        return redirect()->back()->with("success", "Services Updated Successfully");
    }
    // end

    // these all function are for home page Portfolio start 
    public function portfolio()
    {
        $alldata  = $this->AdminHomeInterface->portfolio();
        return view("adminPanel.homePages.portfolio.list", compact("alldata"));
    }
    public function create_protfolio(Request $request)
    {
        $alldata = $this->AdminHomeInterface->create_protfolio($request);

        if($alldata == "your portfolio allready uploaded please edit one of them")
        {
            return response()->json(["success" => $alldata]);
        }

        return response()->json(["success" => $alldata]);
    }

    public function update_protfolio(Request $request)
    {
        $alldata = $this->AdminHomeInterface->update_protfolio($request);

        return response()->json(["success" => $alldata]);
    }

    public function delete_protfolio(Request $request)
    {
        $alldata = $this->AdminHomeInterface->delete_protfolio($request);

        return response()->json(["success" => $alldata]);
    }
    // end
    
    // these all function are for home page Technologies start 
    public function technologies()
    {
        $alldata = $this->AdminHomeInterface->technologies();

        return view("adminPanel.homePages.technologies.list", compact("alldata"));
    }

    public function create_technologies(Request $request)
    {
        $alldata = $this->AdminHomeInterface->create_technologies($request);

        return response()->json(["success" => $alldata]);
    }

    public function delete_technologies(Request $request)
    {
        $alldata = $this->AdminHomeInterface->delete_technologies($request);

        return response()->json(["success" => $alldata]);
    }
    // end

    // these all function are for home page Awards start 
    public function awards()
    {
        $alldata = $this->AdminHomeInterface->awards();

        return view("adminPanel.homePages.awards.list", compact("alldata"));
    }
    public function create_awards(Request $request)
    {
        $alldata = $this->AdminHomeInterface->create_awards($request);

        return response()->json(["success" => $alldata]);
    }
    public function delete_awards(Request $request)
    {
        $alldata = $this->AdminHomeInterface->delete_awards($request);

        return response()->json(["success" => $alldata]);
    }
    public function update_awards(Request $request)
    {
        $alldata = $this->AdminHomeInterface->update_awards($request);

        return response()->json(["success" => $alldata]);
    }
    // end

    // these all function are for home page testimonials start 
    public function testimonials()
    {
        $alldata = $this->AdminHomeInterface->testimonials();

        return view("adminPanel.homePages.testimonials.list", compact("alldata"));
    }
    public function create_testimonials(Request $request)
    {
        $alldata = $this->AdminHomeInterface->create_testimonials($request);

        return response()->json(["success" => $alldata]);
        
    }
    public function update_testimonials(Request $request)
    {
        $alldata = $this->AdminHomeInterface->update_testimonials($request);

        return response()->json(["success" => $alldata]);
    }
    public function delete_testimonials(Request $request)
    {
        $alldata = $this->AdminHomeInterface->delete_testimonials($request);

        return response()->json(["success" => $alldata]);
    }
    // end

    // these all function are for meta tags start 
    public function meta_tags()
    {
        $alldata = $this->AdminHomeInterface->meta_tags();

        return view("adminPanel.metaTages.metaTags", compact("alldata"));
    }
    public function create_meta_tags(Request $request)
    {
        $alldata = $this->AdminHomeInterface->create_meta_tags($request);

        return response()->json(["success" => $alldata]);
    }
    public function edit_meta_tags($id)
    {
        $alldata = $this->AdminHomeInterface->edit_meta_tags($id);
        return view("adminPanel.metaTages.editMetaTags", compact('alldata'));
    }
    public function update_meta_tags(Request $request)
    {
        $alldata = $this->AdminHomeInterface->update_meta_tags($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function delete_meta_tags($id)
    {
        $alldata = $this->AdminHomeInterface->delete_meta_tags($id);

        return redirect()->back()->with("success", $alldata);
    }
    // end

    // these all function are for offer tabs start 
    public function offer_tab()
    {
        $alldata = $this->AdminHomeInterface->offer_tab();
        
        return view("adminPanel.homePages.offerTab", compact("alldata"));
    }
    public function updateOfferTabs(Request $request)
    {
        $alldata = $this->AdminHomeInterface->updateOfferTabs($request);

        return redirect()->back()->with("success", $alldata);
    }
    // end
}
