<?php

namespace App\Interfaces;

interface OtherPagesInterfaces 
{
    public function admin_other_pages();

    public function store_privacy_policy($request);
    
    public function store_terms_and_conditions($request);

    public function user_contact();
    public function leads();
}