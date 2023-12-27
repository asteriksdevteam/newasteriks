<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\AdminAboutInterface;
use App\Models\LeaderShip;
class AboutController extends Controller
{
    private AdminAboutInterface $AdminAboutInterface;

    public function __construct(AdminAboutInterface $AdminAboutInterface) 
    {
        $this->AdminAboutInterface = $AdminAboutInterface;

        $this->middleware('role:About-us-Manager', ['only' => [
            'aboutWhoWeAre', 'updateWhoWeAre', 
            'counter', 'updateCounter',
            'core_values', 'updateCoreValues',
            'core_values_first', 'updateCoreValuesFirst',
            'story_company', 'updateStoryCompany',
            'cta2', 'updateCTA2', 
            'leadership', 'create_leaderShip', 'update_leaderShip', 'delete_Leadership',
            'faqs', 'create_faqs', 'update_faqs', 'delete_faqs',
            'testimonials', 'create_testimonials', 'update_testimonials', 'delete_testimonials',
            'affiliations', 'create_or_update_affiliations', 'delete_Affiliations'
        ]]);
    }

    // these all function are for about page Who We Are start 
    public function aboutWhoWeAre()
    {
        $alldata = $this->AdminAboutInterface->aboutWhoWeAre();

        return view("adminPanel.aboutPages.aboutWhoWeAre", compact("alldata"));
    }
    public function updateWhoWeAre(Request $request)
    {
        $alldata = $this->AdminAboutInterface->updateWhoWeAre($request);

        return redirect()->back()->with("success", $alldata);
    }
    //end

    // these all function are for about page Counter start 
    public function counter()
    {
        $alldata = $this->AdminAboutInterface->counter();

        return view("adminPanel.aboutPages.counter", compact('alldata'));
    }
    public function updateCounter(Request $request)
    {
        $alldata = $this->AdminAboutInterface->updateCounter($request);

        return redirect()->back()->with("success", $alldata);
    }
    //end

    // these all function are for about page Mission And Vission start 
    public function core_values()
    {
        $alldata = $this->AdminAboutInterface->core_values();

        return view("adminPanel.aboutPages.core_values", compact("alldata"));
    }
    public function updateCoreValues(Request $request)
    {
        $alldata = $this->AdminAboutInterface->updateCoreValues($request);

        return redirect()->back()->with("success", $alldata);
    }
    //end

    // these all function are for about page Core Values start 
    public function core_values_first()
    {
        $alldata = $this->AdminAboutInterface->core_values_first();

        return view("adminPanel.aboutPages.core_values_first", compact('alldata'));
    }
    public function updateCoreValuesFirst(Request $request)
    {
        $alldata = $this->AdminAboutInterface->updateCoreValuesFirst($request);

        return redirect()->back()->with("success", $alldata);
    }
    //end

    // these all function are for about page Story Company start
    public function story_company()
    {
        $alldata = $this->AdminAboutInterface->story_company();

        return view("adminPanel.aboutPages.storyCompany", compact("alldata"));
    }
    public function updateStoryCompany(Request $request)
    {
        $alldata = $this->AdminAboutInterface->updateStoryCompany($request);

        return redirect()->back()->with("success", $alldata);
    }
    //end

    // these all function are for about page cta2 start
    public function cta2()
    {
        $alldata = $this->AdminAboutInterface->cta2();

        return view("adminPanel.aboutPages.cta2", compact('alldata'));
    }
    public function updateCTA2(Request $request)
    {
        $alldata = $this->AdminAboutInterface->updateCTA2($request);

        return redirect()->back()->with("success", $alldata);
    }
    //end

    // these all function are for about page Leader Ship start
    public function leadership()
    {
        $alldata = $this->AdminAboutInterface->leadership();

        return view("adminPanel.aboutPages.leadership", compact('alldata'));
    }
    public function create_leaderShip(Request $request)
    {
        $alldata = $this->AdminAboutInterface->create_leaderShip($request);

        return response()->json(["success" => $alldata]);
    }
    public function update_leaderShip(Request $request)
    {
        $alldata = $this->AdminAboutInterface->update_leaderShip($request);

        return response()->json(["success" => $alldata]);
    }
    public function delete_Leadership(Request $request)
    {
        $alldata = $this->AdminAboutInterface->delete_Leadership($request);

        return response()->json(["success" => $alldata]);
    }
    //end

    // these all function are for about page FAQS start
    public function faqs()
    {
        $alldata = $this->AdminAboutInterface->faqs();

        return view("adminPanel.aboutPages.faqs", compact('alldata'));
    }
    public function create_faqs(Request $request)
    {
        $alldata = $this->AdminAboutInterface->create_faqs($request);

        return response()->json(["success" => $alldata]);
    }
    public function update_faqs(Request $request)
    {
        $alldata = $this->AdminAboutInterface->update_faqs($request);

        return response()->json(["success" => $alldata]);
    }
    public function delete_faqs(Request $request)
    {
        $alldata = $this->AdminAboutInterface->delete_faqs($request);

        return response()->json(["success" => $alldata]);
    }
    //end

    // these all function are for about page Affiliations start
    public function affiliations()
    {
        $alldata = $this->AdminAboutInterface->affiliations(); 
        
        return view("adminPanel.aboutPages.affiliations", compact("alldata"));
    }
    public function create_or_update_affiliations(Request $request)
    {
        $alldata = $this->AdminAboutInterface->create_or_update_affiliations($request);

        return response()->json(["success" => $alldata]);
    }
    public function delete_Affiliations(Request $request)
    {
        $alldata = $this->AdminAboutInterface->delete_Affiliations($request);

        return response()->json(["success" => $alldata]);
    }
    //end
}
