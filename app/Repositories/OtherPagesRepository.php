<?php

namespace App\Repositories;

use App\Interfaces\OtherPagesInterfaces;
use App\Traits\ImageTrait;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndConditions;
use App\Models\ContactForm;
use App\Models\PackagePurchases;

class OtherPagesRepository implements OtherPagesInterfaces
{
    use ImageTrait; 

    public function admin_other_pages()
    {
        $PrivacyPolicy = PrivacyPolicy::first();

        $TermsAndConditions = TermsAndConditions::first();

        $alldata = [
            "PrivacyPolicy" => $PrivacyPolicy, 
            "TermsAndConditions" => $TermsAndConditions,
        ];

        return $alldata;
    }
    public function store_privacy_policy($request)
    {
        $validated = $request->validate([
            'privacy_policy' => 'required',
        ]);

        if($request->tableName === "privacy_policy")
        {
            if($request->privacy_policy_id === null)
            {
                $PrivacyPolicy = PrivacyPolicy::create([
                    "privacy_policy" => $request->privacy_policy,
                ]);
            }
            else
            {
                $PrivacyPolicy = PrivacyPolicy::where("id", $request->privacy_policy_id)->update([
                    "privacy_policy" => $request->privacy_policy,
                ]);
            }

            return "Privacy Policy Updated Successfully";
        }
    }
    public function store_terms_and_conditions($request)
    {
        $validated = $request->validate([
            'terms_and_conditions' => 'required',
        ]);

        if($request->tableName === "terms_and_conditions")
        {
            if($request->terms_and_conditions_id === null)
            {
                $TermsAndConditions = TermsAndConditions::create([
                    "terms_and_conditions" => $request->terms_and_conditions,
                ]);    
            }
            else
            {
                $TermsAndConditions = TermsAndConditions::where("id", $request->terms_and_conditions_id)->update([
                    "terms_and_conditions" => $request->terms_and_conditions,
                ]);
            }

            return "Terms and Conditions Updated Successfully";
        }
    }
    public function user_contact()
    {
        $ContactForm = ContactForm::with("ServiceCategory")->get();

        return $ContactForm;
    }
    public function leads()
    {
        $PackagePurchases = PackagePurchases::with("Packages", "Packages.Services", "Packages.Services.ServiceSubCategory")->get();

        return $PackagePurchases;
    }
}