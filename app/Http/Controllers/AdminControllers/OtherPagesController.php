<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\OtherPagesInterfaces;

class OtherPagesController extends Controller
{
    private OtherPagesInterfaces $OtherPagesInterfaces;

    public function __construct(OtherPagesInterfaces $OtherPagesInterfaces) 
    {
        $this->OtherPagesInterfaces = $OtherPagesInterfaces;
    }

    public function admin_other_pages()
    {
        $alldata = $this->OtherPagesInterfaces->admin_other_pages();

        $PrivacyPolicy = $alldata["PrivacyPolicy"];
        $TermsAndConditions = $alldata["TermsAndConditions"];

        return view("adminPanel.otherPages.otherPages", compact("PrivacyPolicy", "TermsAndConditions"));
    }

    public function store_privacy_policy(Request $request)
    {
        $alldata = $this->OtherPagesInterfaces->store_privacy_policy($request);

        return redirect()->back()->with("success", $alldata);
    }

    public function store_terms_and_conditions(Request $request)
    {
        $alldata = $this->OtherPagesInterfaces->store_terms_and_conditions($request);

        return redirect()->back()->with("success", $alldata);
    }

    public function user_contact()
    {
        $alldata = $this->OtherPagesInterfaces->user_contact();

        return view("adminPanel.otherPages.user_contact", compact('alldata'));
    }

    public function leads()
    {
        $alldata = $this->OtherPagesInterfaces->leads();

        return view("adminPanel.otherPages.leads", compact('alldata'));
    }
}
