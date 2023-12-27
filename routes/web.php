<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControllers\UserController;
use App\Http\Controllers\AdminControllers\HomeController;
use App\Http\Controllers\AdminControllers\AboutController;
use App\Http\Controllers\AdminControllers\ServicesController;
use App\Http\Controllers\AdminControllers\CareerController;
use App\Http\Controllers\AdminControllers\BlogController;
use App\Http\Controllers\AdminControllers\ContactController;
use App\Http\Controllers\AdminControllers\RoleUserController;
use App\Http\Controllers\AdminControllers\OtherPagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class,'index']);
Route::get('about-us', [UserController::class,'aboutUs']);
Route::get('contact-us', [UserController::class,'contactUs']);
Route::get('blog', [UserController::class,'blog']);
Route::get('blog-detail/{slug}', [UserController::class,'blogDetail']);

Route::get('careers', [UserController::class,'careers']);
Route::get('careers-detail/{id}', [UserController::class,'careers_detail']);
Route::POST('search_with_category', [UserController::class,'search_with_category']);
Route::get('search_with_all_category', [UserController::class,'search_with_all_category']);
Route::post('search_with_side_bar', [UserController::class,'search_with_side_bar']);
Route::post('apply_on_job_dddd', [UserController::class,'apply_on_job_dddd']);

Route::get('get_portfolio', [UserController::class,'getPortfolio']);
Route::get('get_technologies', [UserController::class,'getTechnologies']);

Route::get('get-marketing-li-for-headers', [UserController::class,'getMarketingLiForHeaders']);
Route::get('content-service', [UserController::class,'contentService']);
Route::get('designing-development', [UserController::class,'designingDevelopment']);
Route::get('It-service', [UserController::class,'ItService']);
Route::get('service/{slug}', [UserController::class,'service']);
Route::post('contactForm', [UserController::class,'contactForm']);

Route::post('emailSubcription', [UserController::class,'emailSubcription']);

Route::post('blogs_with_categories', [UserController::class,'blogs_with_categories']);
Route::post('all_blogs_with_categories', [UserController::class,'all_blogs_with_categories']);
Route::post('add_more_blog', [UserController::class,'add_more_blog']);

Route::post('tab_With_Type', [UserController::class,'tab_With_Type']);
Route::post('PackagesForHome', [UserController::class, 'PackagesForHome']);

Route::get('privacy_policy', [UserController::class,'privacy_policy']);
Route::get('terms_and_conditions', [UserController::class,'terms_and_conditions']);

Route::post('get_started', [UserController::class, 'get_started']);
Route::post('search_blog', [UserController::class, 'search_blogs']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () 
{
    //Routes For Home Tab on Admin Panel Starts

    Route::get('homeBanner', [HomeController::class,'homeBanner']);
    Route::post('updateHomeBanner', [HomeController::class,'updateHomeBanner']);
    Route::post('deleteHomeBannerImages', [HomeController::class,'deleteHomeBannerImages']);
    Route::post('deleteTrustedByImageId', [HomeController::class,'deleteTrustedByImageId']);

    Route::get('secondSection', [HomeController::class,'secondSection']);
    Route::post('updateSecondSection', [HomeController::class,'updateSecondSection']);

    Route::get('service', [HomeController::class,'service']);
    Route::post('updateService', [HomeController::class,'updateService']);

    Route::get('portfolio', [HomeController::class,'portfolio']);
    Route::post('create_protfolio', [HomeController::class,'create_protfolio']);
    Route::post('update_protfolio', [HomeController::class,'update_protfolio']);
    Route::post('delete_protfolio', [HomeController::class,'delete_protfolio']);

    Route::get('technologies', [HomeController::class,'technologies']);
    Route::post('create_technologies', [HomeController::class,'create_technologies']);
    Route::post('delete_technologies', [HomeController::class, 'delete_technologies']);

    Route::get('awards', [HomeController::class,'awards']);
    Route::post('create_awards', [HomeController::class,'create_awards']);
    Route::post('delete_awards', [HomeController::class,'delete_awards']);
    Route::post('update_awards', [HomeController::class,'update_awards']);

    Route::get('testimonials', [HomeController::class,'testimonials']);
    Route::post('create_testimonials', [HomeController::class,'create_testimonials']);
    Route::post('update_testimonials', [HomeController::class,'update_testimonials']);
    Route::post('delete_testimonials', [HomeController::class,'delete_testimonials']);

    //Routes For Home Tab on Admin Panel Ends

    //Routes For About Tab on Admin Panel Starts

    Route::get('aboutWhoWeAre', [AboutController::class,'aboutWhoWeAre']);
    Route::post('updateWhoWeAre', [AboutController::class,'updateWhoWeAre']);

    Route::get('counter', [AboutController::class,'counter']);
    Route::post('updateCounter', [AboutController::class,'updateCounter']);

    Route::get('core_values_first', [AboutController::class,'core_values_first']);
    Route::post('updateCoreValuesFirst', [AboutController::class,'updateCoreValuesFirst']);

    Route::get('core_values', [AboutController::class,'core_values']);
    Route::post('updateCoreValues', [AboutController::class,'updateCoreValues']);

    Route::get('story_company',[AboutController::class,"story_company"]);
    Route::post('updateStoryCompany',[AboutController::class,'updateStoryCompany']);

    Route::get('cta2', [AboutController::class,'cta2']);
    Route::post('updateCTA2', [AboutController::class,'updateCTA2']);

    Route::get('leadership',[AboutController::class,'leadership']);
    Route::post('create_leaderShip', [AboutController::class,'create_leaderShip']);
    Route::post('update_leaderShip', [AboutController::class,'update_leaderShip']);
    Route::post('delete_Leadership',[AboutController::class,'delete_Leadership']);

    Route::get('faqs',[AboutController::class,'faqs']);
    Route::post('create_faqs',[AboutController::class,'create_faqs']);
    Route::post('update_faqs',[AboutController::class,'update_faqs']);
    Route::post('delete_faqs',[AboutController::class,'delete_faqs']);

    Route::get('affiliations',[AboutController::class,'affiliations']);
    Route::post('create_or_update_affiliations',[AboutController::class,'create_or_update_affiliations']);
    Route::post('delete_Affiliations', [AboutController::class,'delete_Affiliations']);

    //Routes For About Tab on Admin Panel Ends

    //Routes For Services Tab on Admin Panel Starts

    Route::get('sub_categories', [ServicesController::class,'sub_categories']);
    Route::post('create_sub_category', [ServicesController::class,'create_sub_category']);
    Route::get('delete_subCategory/{id}', [ServicesController::class,'delete_subCategory']);

    Route::get('services', [ServicesController::class,'services']);
    Route::get('create_service', [ServicesController::class,'create_service']);
    Route::post('store_service', [ServicesController::class,'store_service']);
    Route::get('edit_service/{id}', [ServicesController::class,'edit_service']);
    Route::post('update_service',[ServicesController::class,'update_service']);
    Route::post('update_service_banner', [ServicesController::class,'update_service_banner']);
    Route::post('update_service_Second_section', [ServicesController::class,'update_service_Second_section']);
    Route::post('update_service_work_section', [ServicesController::class,'update_service_work_section']);
    Route::post('update_service_Cta', [ServicesController::class,'update_service_Cta']);
    Route::post('update_work_process', [ServicesController::class,'update_work_process']);
    Route::post('update_last_section', [ServicesController::class,'update_last_section']);
    Route::get('delete_service/{id}', [ServicesController::class,'delete_service']);

    Route::get('services_packages/{id}', [ServicesController::class,'services_packages']);
    Route::post('create_package', [ServicesController::class,'create_package']);
    Route::post('update_package', [ServicesController::class,'update_package']);
    Route::get('delete_package/{id}', [ServicesController::class,'delete_package']);

    Route::post('update_cta', [ServicesController::class, "update_cta"]);

    //Routes For Services Tab on Admin Panel Ends

    //Routes For Careers Tab on Admin Panel Start
    Route::get('job_sub_category', [CareerController::class,'job_sub_category']);
    Route::post('create_job_sub_category', [CareerController::class,'create_job_sub_category']);
    Route::get('delete_subCategory_of_job/{id}', [CareerController::class,'delete_subCategory_of_job']);

    Route::get('jobs',[CareerController::class,'jobs']);
    Route::get('create_jobs', [CareerController::class,'create_jobs']);
    Route::post('store_jobs', [CareerController::class,'store_jobs']);
    Route::get('edit_job/{id}', [CareerController::class,'edit_job']);
    Route::post('update_job', [CareerController::class,'update_job']);
    Route::get('delete_job/{id}', [CareerController::class,'delete_job']);

    Route::get('jobs_gallery', [CareerController::class,'jobs_gallery']);
    Route::post('create_careers_page_images', [CareerController::class,'create_careers_page_images']);
    Route::get('delete_image/{id}', [CareerController::class,'delete_image']);
    Route::get('applicants_on_jobs/{id}', [CareerController::class,'applicants_on_jobs']);

    //Routes For Careers Tab on Admin Panel Ends

    //Routes For Blog Tab on Admin Panel Start

    Route::get('subcription', [CareerController::class,'subcription']);
    Route::get('blogs', [BlogController::class,'blogs']);
    Route::get('create_blog', [BlogController::class,'create_blog']);
    Route::post('store_blog', [BlogController::class,'store_blog']);
    Route::get('edit_blog/{id}', [BlogController::class,'edit_blog']);
    Route::post('update_blog', [BlogController::class,'update_blog']);
    Route::get('delete_blog/{id}', [BlogController::class,"delete_blog"]);

    //Routes For Blog Tab on Admin Panel End

    //Routes For Conatct us Tab on Admin Panel Start

    Route::get('contactus', [ContactController::class,'contactus']);
    Route::post('edit_contactus', [ContactController::class,'edit_contactus']);

    //Routes For Conatct us Tab on Admin Panel End

    //Routes For Meta Tags Tab on Admin Panel Start

    Route::get('meta_tags', [HomeController::class, 'meta_tags']);
    Route::post('create_meta_tags', [HomeController::class, 'create_meta_tags']);
    Route::get('edit_meta_tags/{id}', [HomeController::class, 'edit_meta_tags']);
    Route::post('update_meta_tags', [HomeController::class,'update_meta_tags']);
    Route::get('delete_meta_tags/{id}', [HomeController::class, 'delete_meta_tags']);

    //Routes For Meta Tags Tab on Admin Panel End


    //Routes For offer tabs on Admin Panel Start

    Route::get('offer_images', [HomeController::class,'offer_tab']);
    Route::post('updateOfferTabs', [HomeController::class, 'updateOfferTabs']);

    //Routes For offer tabs on Admin Panel End

    //Routes For Roles And Managers on Admin Panel Start

    Route::get('managers', [RoleUserController::class,'managers']);
    Route::post('create_manager', [RoleUserController::class, 'create_manager']);
    Route::post('update_manager', [RoleUserController::class,'update_manager']);
    Route::post('update_password', [RoleUserController::class,'update_password']);
    Route::get('delete_managers/{id}', [RoleUserController::class, 'delete_managers']);

    //Routes For Roles And Managers on Admin Panel End

    //Routes For Other Pages on Admin Panel Start
    
    Route::get('admin_other_pages', [OtherPagesController::class,'admin_other_pages']);
    Route::post('store_privacy_policy', [OtherPagesController::class,'store_privacy_policy']);
    Route::post('store_terms_and_conditions', [OtherPagesController::class,'store_terms_and_conditions']);
    Route::get('user_contact', [OtherPagesController::class, 'user_contact']);
    Route::get('leads', [OtherPagesController::class, 'leads']);
    
    //Routes For Other Pages on Admin Panel End

});
