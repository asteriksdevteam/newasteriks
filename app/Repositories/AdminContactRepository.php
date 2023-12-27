<?php

namespace App\Repositories;

use App\Interfaces\AdminContactInterface;
use App\Models\Contactus;

class AdminContactRepository implements AdminContactInterface
{
    public function contactus()
    {
        $Contactus = Contactus::first();
        return $Contactus;
    }
    public function edit_contactus($request)
    {
        $validated = $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'pakistan_map' => 'required',
            'use_map' => 'required',
        ]);

        $Contactus = Contactus::where("id", $request->id)->update(
            [
                "phone" => $request->phone,
                'email' => $request->email,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'pakistan_map' => $request->pakistan_map,
                'use_map' => $request->use_map,
            ]
        );

        return "contact us updated successfully";
    }
}