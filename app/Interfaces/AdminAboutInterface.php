<?php

namespace App\Interfaces;

interface AdminAboutInterface 
{
    public function aboutWhoWeAre();
    public function updateWhoWeAre($request);
    public function counter();
    public function updateCounter($request);
    public function core_values();
    public function updateCoreValues($request);
    public function core_values_first();
    public function updateCoreValuesFirst($request);
    public function story_company();
    public function updateStoryCompany($request);    
    public function cta2();
    public function updateCTA2($request);
    public function leadership();
    public function create_leaderShip($request);
    public function update_leaderShip($request);
    public function delete_Leadership($request);
    public function faqs();
    public function create_faqs($request);
    public function update_faqs($request);
    public function delete_faqs($request);
    public function affiliations();
    public function create_or_update_affiliations($request);
    public function delete_Affiliations($request);

    
    

}