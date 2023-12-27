<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Interfaces\AdminServiceInterface;
use App\Models\ServiceSubCategory;
use App\Models\Services;

use function PHPUnit\Framework\returnSelf;

class ServicesController extends Controller
{
    private AdminServiceInterface $AdminServiceInterface;

    public function __construct(AdminServiceInterface $AdminServiceInterface) 
    {
        $this->AdminServiceInterface = $AdminServiceInterface;
        $this->middleware('role:Roles-Managers', ['only' => [
            'sub_categories', 'create_sub_category', 'delete_subCategory',
            'services', 'create_service', 'store_service', 'edit_service', 'update_service', 'update_service_banner', 'update_service_Second_section', 'update_service_work_section', 'update_service_Cta',
            'update_work_process', 'update_last_section', 'delete_service',
            'services_packages', 'create_package', 'update_package', 'delete_package'
        ]]);
    }

    // these all function are for Sub Categories start 
    public function sub_categories()
    {
        $alldata = $this->AdminServiceInterface->sub_categories();

        $catgory = $alldata["category"];
        $subCategory = $alldata["sub-category"];

        // dd($subCategory);

        return view("adminPanel.service.service_subCategory", compact('catgory', 'subCategory'));
    }
    public function create_sub_category(Request $request)
    {
        $alldata = $this->AdminServiceInterface->create_sub_category($request);

        return redirect()->back()->with("success", $alldata);
    } 
    public function delete_subCategory($id)
    {
        $alldata = $this->AdminServiceInterface->delete_subCategory($id);

        return redirect()->back()->with("success", $alldata);
    }
    // end

    // these all function are for services start 
    public function services()
    {
        $alldata = $this->AdminServiceInterface->services();

        return view("adminPanel.service.service_list", compact('alldata'));
    }
    public function create_service()
    {
        $services = Services::pluck('subcategory')->toArray();

        $SubCategory = ServiceSubCategory::whereNotIn('id',$services)->get();

        return view("adminPanel.service.service_create", compact('SubCategory'));
    }
    public function store_service(Request $request)
    {
        $alldata = $this->AdminServiceInterface->store_service($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function edit_service($id)
    {
        $alldata = $this->AdminServiceInterface->edit_service($id);

        $Services = $alldata["Services"];
        $SubCategory = $alldata["SubCategory"];
        $ServiceBanner = $alldata["ServiceBanner"];
        $ServiceSecondSection = $alldata["ServiceSecondSection"];
        $ServiceWork = $alldata["ServiceWork"];
        $ServiceCTA2 = $alldata["ServiceCTA2"];
        $ServiceProcess = $alldata["ServiceProcess"];
        $ServiceLastSection = $alldata["ServiceLastSection"];
        $ServiceCTA = $alldata["ServiceCTA"];

        return view("adminPanel.service.service_edit", compact('Services','ServiceCTA' ,'SubCategory', 'ServiceBanner','ServiceSecondSection', 'ServiceWork', 'ServiceCTA2','ServiceProcess','ServiceLastSection'));
    }
    public function update_service(Request $request)
    {
        $alldata = $this->AdminServiceInterface->update_service($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function update_service_banner(Request $request)
    {
        $alldata = $this->AdminServiceInterface->update_service_banner($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function update_service_Second_section(Request $request)
    {
        $alldata = $this->AdminServiceInterface->update_service_Second_section($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function update_service_work_section(Request $request)
    {
        $alldata = $this->AdminServiceInterface->update_service_work_section($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function update_service_Cta(Request $request)
    {
        $alldata = $this->AdminServiceInterface->update_service_Cta($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function update_work_process(Request $request)
    {
        $alldata = $this->AdminServiceInterface->update_work_process($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function update_last_section(Request $request)
    {
        $alldata = $this->AdminServiceInterface->update_last_section($request);

        return redirect()->back()->with("success", $alldata);
    }
    public function delete_service($id)
    {
        $alldata = $this->AdminServiceInterface->delete_service($id);

        return redirect()->back()->with("success", $alldata);
    }
    // end

    // these all function are for services packages start 
    public function services_packages($id)
    {
        $alldata  = $this->AdminServiceInterface->services_packages($id);

        $Packages = $alldata["Packages"];
        $IfSelectedOtherPackages = $alldata["IfSelectedOtherPackages"];

        return view("adminPanel.service.service_packages", compact('id','Packages','IfSelectedOtherPackages'));
    }
    public function create_package(Request $request)
    {
        $alldata  = $this->AdminServiceInterface->create_package($request);

        return response()->json( $alldata);
    }
    public function update_package(Request $request)
    {
        $alldata  = $this->AdminServiceInterface->update_package($request);

        return response()->json($alldata);
    }
    public function delete_package($id)
    {
        $alldata = $this->AdminServiceInterface->delete_package($id);

        return redirect()->back()->with('success', $alldata);
    }
    // end

    public function update_cta(Request $request)
    {
        $alldata = $this->AdminServiceInterface->update_cta($request);

        return redirect()->back()->with("success", $alldata);
    }
}
