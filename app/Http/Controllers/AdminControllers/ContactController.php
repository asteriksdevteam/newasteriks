<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\AdminContactInterface;

class ContactController extends Controller
{
    private AdminContactInterface $AdminContactInterface;

    public function __construct(AdminContactInterface $AdminContactInterface) 
    {
        $this->AdminContactInterface = $AdminContactInterface;
        $this->middleware('role:Contact-us-Manager', ['only' => [
            'contactus', 'edit_contactus'
        ]]);
    }
    public function contactus()
    {
        $allData = $this->AdminContactInterface->contactus();

        return view("adminPanel.contactUs", compact("allData"));
    }
    public function edit_contactus(Request $request)
    {
        $allData = $this->AdminContactInterface->edit_contactus($request);

        return redirect()->back()->with("success",$allData);
    }
}
