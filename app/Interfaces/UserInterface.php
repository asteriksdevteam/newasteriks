<?php

namespace App\Interfaces;

interface UserInterface 
{
    public function home();
    public function aboutUs();
    public function Service($slug);
    public function contactUs();
    public function blog();
    public function blogDetail($slug);
    public function careers();
    public function careers_detail($id);
    public function getPortfolio($request);
    public function getTechnologies($request);
    public function getMarketingLiForHeaders();
    public function contentService();
    public function designingDevelopment();
    public function ItService();
    public function contactForm($request);
    public function search_with_category($request);
    public function search_with_all_category();
    public function search_with_side_bar($request);
    public function apply_on_job($request);
    public function emailSubcription($request);
    public function blogs_with_categories($request);
    public function all_blogs_with_categories($request);
    public function tab_With_Type($request);
    public function PackagesForHome($request);
    public function privacy_policy();
    public function terms_and_conditions();
    public function get_started($request);
    public function add_more_blog($request);
    public function search_blogs($request);
}