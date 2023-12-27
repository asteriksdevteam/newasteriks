<?php

namespace App\Interfaces;

interface AdminHomeInterface 
{
    public function homeBanner();
    public function updateHomeBanner($request);
    public function deleteHomeBannerImages($request);
    public function deleteTrustedByImageId($request);
    public function secondSection();
    public function updateSecondSection($request);
    public function service();
    public function updateService($request);
    public function portfolio();
    public function create_protfolio($request);
    public function update_protfolio($request);
    public function delete_protfolio($request);
    public function technologies();
    public function create_technologies($request);
    public function delete_technologies($request);
    public function awards();
    public function create_awards($request);
    public function delete_awards($request);
    public function update_awards($request);
    public function testimonials();
    public function create_testimonials($request);
    public function update_testimonials($request);
    public function delete_testimonials($request);
    public function meta_tags();
    public function create_meta_tags($request);
    public function edit_meta_tags($id);
    public function update_meta_tags($request);
    public function delete_meta_tags($id);

    public function offer_tab();
    public function updateOfferTabs($request);
}