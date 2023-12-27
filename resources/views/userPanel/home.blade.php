@extends('userPanel.layouts.app')
@section('content')

<section class="home-banner">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="owl-carousel homebanner-carousel p-0">
                @foreach($HomeBannerImages as $item)
                    <div class="item" style="background:url( {{ asset($item->image) }} ) no-repeat; background-position: center; background-size: cover;">
                        <div class="home-bannercontent">
                               
                            <h1>360 <span class="highlight">Digital </span> Solutions Firm </br> <span class="outline">{{ $HomeBanner->banner_heading }}</span> elevate, and dominate online.</h1>
                            <p style="display:none;">{{ $HomeBanner->banner_content }}</p>
                            <div class="home-bannerbtn mt-5">
                                <div class="home-bannerbtn1">
                                    <a href="{{ url("about-us") }}">learn more</a>
                                </div>
                                <div class="home-bannerbtn2">
                                    <a href="javascript:void(Tawk_API.toggle())" >let's talk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="clients-logos">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="clients-text">
                    <p>trusted by</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="owl-carousel client-carousel">
                    @foreach($HomeBannerTrustedByImage as $item)
                    <div class="item">
                        <img src="{{ asset($item->trusted_by_image) }}" class="img-fluid client1" alt="Asteriks Images">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="graysection">
    <div class="container">
        <div class="row graybg">
            <div class="col-lg-6 col-md-6 col-12 my-auto">
                <div class="graysection-content">
                    <h3 class="subtitle">{{ $HomeSecondSection->heading1 }}</h3>
                    <p>{{ $HomeSecondSection->content1 }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <img src="{{ asset($HomeSecondSection->image1) }}" class="img-fluid graysection-img" alt="Asteriks Images">
            </div>
            <div class="col-lg-6 col-md-6 col-12 ipad-order1">
                <img src="{{ asset($HomeSecondSection->image2) }}" class="graysection-img" alt="Asteriks Images">
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto ipad-order2">
                <div class="graysection-content pad0">
                    <h3 class="subtitle">{{ $HomeSecondSection->heading2 }}</h3>
                    <p>{{ $HomeSecondSection->content2 }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto ipad-order1">
                <div class="graysection-content pad0">
                    <h3 class="subtitle">{{ $HomeSecondSection->heading3 }}</h3>
                    <p>{{ $HomeSecondSection->content3 }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 ipad-order2">
                <img src="{{ asset($HomeSecondSection->image3) }}" class="graysection-img" alt="Asteriks Images">
            </div>
            <div class="col-lg-6 col-md-6 col-12 ipad-order1">
                <img src="{{ asset($HomeSecondSection->image4) }}" class="graysection-img" alt="Asteriks Images">
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto ipad-order2">
                <div class="graysection-content pad0">
                    <h3 class="subtitle">{{ $HomeSecondSection->heading4 }}</h3>
                    <p>{{ $HomeSecondSection->content4 }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="help-business">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-md-8 col-12">
                <h2 class="title">How Can We Boost Your Business Growth?</h2>
                <p class="desc">At the core of our services is a commitment to accelerating growth. We are a digital marketing services provider, handling everything from market analysis to strategic implementation, all designed to propel your business.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="help-businesscontent" style="background:url({{ asset($HomeServices->image1) }}) no-repeat; background-size:cover;">
                    <h3 class="subtitle">{{ $HomeServices->heading1 }}</h3>
                    <p>{{ $HomeServices->content1 }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="help-businesscontent help-businesscontent2" style="background:url({{ asset($HomeServices->image2) }}) no-repeat; background-size:cover;">
                    <h3 class="subtitle">{{ $HomeServices->heading2 }}</h3>
                    <p>{{ $HomeServices->content2 }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="help-businesscontent help-businesscontent3" style="background:url({{ asset($HomeServices->image3) }}) no-repeat; background-size:cover;">
                    <h3 class="subtitle">{{ $HomeServices->heading3 }}</h3>
                    <p>{{ $HomeServices->content3 }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="help-businesscontent help-businesscontent4" style="background:url({{ asset($HomeServices->image4) }}) no-repeat; background-size:cover;">
                    <h3 class="subtitle">{{ $HomeServices->heading4 }}</h3>
                    <p>{{ $HomeServices->content4 }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-md-8 col-12">
                <h2 class="title">Our Portfolio</h2>
            </div>
        </div>
        <div class="row rowmargin">
            <ul class="custom-tabs nav nav-tabs mt-2 mb-5 pt-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active get-portfolio" data-get-portfolio="all-protfolio"  id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">all</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link get-portfolio" data-get-portfolio="mobile-app" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile-tab-pane" type="button" role="tab" aria-controls="mobile-tab-pane" aria-selected="false">mobile app</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link get-portfolio" data-get-portfolio="branding" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding-tab-pane" type="button" role="tab" aria-controls="branding-tab-pane" aria-selected="false">branding</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link get-portfolio" data-get-portfolio="logo-design" id="logodesign-tab" data-bs-toggle="tab" data-bs-target="#logodesign-tab-pane" type="button" role="tab" aria-controls="logodesign-tab-pane" aria-selected="false">logo design</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link get-portfolio" data-get-portfolio="web-app" id="webapp-tab" data-bs-toggle="tab" data-bs-target="#webapp-tab-pane" type="button" role="tab" aria-controls="webapp-tab-pane" aria-selected="false">web app</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link get-portfolio" data-get-portfolio="Website-design" id="webitedesign-tab" data-bs-toggle="tab" data-bs-target="#webitedesign-tab-pane" type="button" role="tab" aria-controls="webitedesign-tab-pane" aria-selected="false">Website design</button>
                </li>
            </ul>
            <div class="tab-content get_protfolio_on_home" id="myTabContent">
                @foreach($Portfolio as $key => $item)
                    @if($item != null && $key !== 1)
                        <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                            <div class="row mb-3 bg-lightgreen" style="background: {{ $item->backgroundcolor }};">
                                <div class="col-lg-6 col-md-6 col-12 my-auto">
                                    <div class="portfolio-dv">
                                        <div class="portfolio-smallimage mb-3 pb-3">
                                            <img src="{{ asset($item->image1) }}" class="portfolio-smallimg" alt="Asteriks Images">
                                        </div>
                                        <div class="portolfio-heading mb-3 pb-1">
                                            <h3>{{ $item->heading }}</h3>
                                        </div>
                                        <div class="portfolio-content">
                                            <p>{{ $item->content }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <img src="{{ asset($item->image2) }}" class="img-fluid" alt="Asteriks Images">
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($key === 1)
                        <div class="tab-pane fade show active" id="mobile-tab-pane" role="tabpanel" aria-labelledby="mobile-tab" tabindex="0">
                            <div class="row mb-3 bg-yellow" style="background: {{ $item->backgroundcolor }};">
                                <div class="col-lg-6 col-md-6 col-12 ipad-order1">
                                    <img src="{{ asset($item->image2) }}" class="img-fluid" alt="Asteriks Images">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 ipad-order2 my-auto my-auto">
                                    <div class="portfolio-dv">
                                        <div class="portfolio-smallimage mb-3 pb-3">
                                            <img src="{{ asset($item->image1) }}" class="portfolio-smallimg" alt="Asteriks Images">
                                        </div>
                                        <div class="portolfio-heading mb-3 pb-1">
                                            <h3>{{ $item->heading }}</h3>
                                        </div>
                                        <div class="portfolio-content">
                                            <p>{{ $item->content }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="blacksection">
    <div class="container">
        <div class="row">
           <div class="col-md-6 my-auto">
                <div class="blacksection-content">
                    <h2 class="title">Reach us out for big business wins</h2>
                    <p>Our strategic approach is designed to place your business among the best, ensuring sustainable success and a distinguished market presence with expert guidance.</p>
                    <div class="btn-link">
                        <a href="{{ url('contact-us') }}" class="orangebtn">Contact Us</a>
                    </div>
                </div>
           </div>
           <div class="col-md-6">
                <img src="{{ asset('userAssets/images/laptop.png') }}" class="img-fluid laptop-image"  alt="Asteriks Image">
                <div class="mobilelaptop-image">
                    <img src="{{ asset('userAssets/images/laptop2.png') }}" class="img-fluid mobilelaptop-image"  alt="Asteriks Image">
                </div>
           </div>
        </div>
    </div>
</section>

<section class="pricing-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-8 col-md-8 col-12">
                <h2 class="title">We’ve got a Perfect Pricing plans that’s for you</h2>
            </div>
        </div>
        <div class="row rowmargin gx-3">
            <ul class="pricing-tabs nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active BlogManagmentPackagesForHomePage" id="blogmanagement-tab" data-bs-toggle="tab" type="button" role="tab"  aria-selected="true">Blog Management</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link DigitalMarketingPackagesForHomePage" id="digitalmarketing-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Digital Marketing</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link WebsitDevelopmentPackagesForHomePage" id="websitedevelopment-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Website Development</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link BrandingPackagesForHomePage" id="unlimitted-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Unlimited design</button>
                </li>
            </ul>
            <div class="tab-content mt-5 pt-5" id="myTabContent">
                <div class="tab-pane fade show active" id="basic1-tab-pane" role="tabpanel" aria-labelledby="basic1-tab" tabindex="0">
                    <div class="row packages">
                        @foreach($Packages as $item)
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="card pricing-card">
                                    <div class="card-header">
                                        <div class="pricing-header">
                                            <h5>{{ $item->package_name }}</h5>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="pricing-wrapper">
                                            <div class="pricing-body">
                                                {!!  $item->package_list !!}
                                            </div>
                                            <div class="pricing-btn">
                                                <a href="javascript:void();" data-package_id="{{ $item->id }}" class="get_started" data-bs-toggle="modal" data-bs-target="#pricingbox">get started</a>
                                                <!--<a href="#">get started</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="technologies-section">
    <div class="conrainer">
        <div class="row justify-content-center text-center m-0">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="technologies-content">
                    <h2 class="title">Technologies we work with</h2>
                    <p>From advanced programming languages to the latest software platforms, we're equipped to handle various tech needs, ensuring your projects are powered by the best in the industry.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center m-0 pt-3">
            <div class="col-xl-8 col-lg-10 col-12">
                <ul class="custom-tabs nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active get-technologies" data-get-technologies="Mobile" id="mobile1-tab" data-bs-toggle="tab" data-bs-target="#mobile1-tab-pane" type="button" role="tab" aria-controls="mobile1-tab-pane" aria-selected="true">mobile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link get-technologies" data-get-technologies="frontend" id="frontend2-tab" data-bs-toggle="tab" data-bs-target="#frontend2-tab-pane" type="button" role="tab" aria-controls="frontend2-tab-pane" aria-selected="false">frontend</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link get-technologies" data-get-technologies="database" id="Database3-tab" data-bs-toggle="tab" data-bs-target="#Database3-tab-pane" type="button" role="tab" aria-controls="Database3-tab-pane" aria-selected="false">Database</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link get-technologies" data-get-technologies="backend" id="backend4-tab" data-bs-toggle="tab" data-bs-target="#backend4-tab-pane" type="button" role="tab" aria-controls="backend4-tab-pane" aria-selected="false">backend</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link get-technologies" data-get-technologies="cms" id="cms5-tab" data-bs-toggle="tab" data-bs-target="#cms5-tab-pane" type="button" role="tab" aria-controls="cms5-tab-pane" aria-selected="false">CMS</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link get-technologies" data-get-technologies="Infra-&-devops" id="Infra6-tab" data-bs-toggle="tab" data-bs-target="#Infra6-tab-pane" type="button" role="tab" aria-controls="Infra6-tab-pane" aria-selected="false">Infra & devops</button>
                      </li>
                  </ul>
                  <div class="tab-content get_technology_on_home" id="myTabContent">
                    <div class="tab-pane fade show active " id="mobile1-tab-pane" role="tabpanel" aria-labelledby="mobile1-tab" tabindex="0">
                        <div class="row justify-content-center text-center mt-5 pt-1">
                            @foreach($Technologies as $item)
                                <div class="col">
                                    <div class="tec-div">
                                        <img src="{{ asset($item->images) }}" class="img-fluid tec1" alt="Asteriks Images">
                                        <p>{{ $item->name }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="award-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-5 col-md-12 col-12 my-auto">
                <div class="award-content">
                    <h2 class="title">Awards & Recognitions</h2>
                    <p>Recipient of prestigious awards and widespread recognition for excellence in innovation, design, and customer satisfaction, showcasing our commitment to industry leadership.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12 col-12">
                <div class="owl-carousel award-carousel">
                    @foreach($Awards as $item)
                        <div class="item">
                            <div class="award-card">
                                <div class="award-head">
                                    <img src="{{ asset( $item->images ) }}" class="img-fluid" alt="Asteriks Images">
                                </div>
                                <div class="award-body">
                                    <h4>{{ $item->heading }}</h4>
                                    <p>{{ $item->content }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-md-8 col-12">
                <h2 class="title text-white">Our Client Testimonials</h2>
            </div>
        </div>
        <div class="row mt-3 rowmargin">
            <div class="owl-carousel testimonial-carousel">

                @foreach($Testimonials as $Testimonial)
                    <div class="item">
                        <div class="testimonial-div">
                        <div class="testimonial-body">
                                <div class="testimonial-icon">
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                                <div class="testimonial-text">
                                    <p>{{ $Testimonial->content }}</p>
                                </div>
                        </div>
                            <div class="testimonial-footer">
                                <!--<div class="testimonial-image">-->
                                <!--    <img src="{{ asset($Testimonial->image) }}" class="img-fluid t1" alt="Asteriks Images">-->
                                <!--</div>-->
                                <div class="testimonial-heading">
                                    <h4>{{ $Testimonial->name }}</h4>
                                    <p>{{ $Testimonial->desigantion }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<section class="partner-section">
    <div class="container">
        <div class="row gx-4">
            <div class="col-lg-6 col-md-6 col-12 ipad-order1">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="partner-div">
                            <img src="{{ asset('userAssets/images/p1.png') }}" class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="partner-div">
                            <img src="{{ asset('userAssets/images/p2.png') }}" class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="partner-div">
                            <img src="{{ asset('userAssets/images/p3.png') }}" class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="partner-div">
                            <img src="{{ asset('userAssets/images/p4.png') }}" class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto ipad-order2">
                <div class="partner-content">
                    <h2 class="title"><span class="highlight2">We partner with the world’s technology leaders.</span></h2>
                    <p>We collaborate with top tech firms, creative agencies, and business experts, ensuring our solutions are enriched by a breadth of expertise and cutting-edge insights.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="building-digital-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-md-8 col-12">
                <h2 class="title mb-5">Building a Future for Digital Businesses with Innovative Solutions.</h2>
                <div class="btn-link">
                    <a href="{{ url('contact-us') }}" class="orangebtn">learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="pricingbox" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="pricingboxLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Pricing</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="pricing-form">
                    <form action="{{ url('get_started') }}" method="POST"> 
                        @csrf
                        <input type="hidden" value="" name="package_id" id="package_id" class="package_id_field">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name*" name="name" class="form-control name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email*" name="email" class="form-control email" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <input type="text" placeholder="Phione*" name="phone" class="form-control phone" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea name="summary" id="" cols="30" rows="6" class="form-control summary" placeholder="Summary" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="price-modal-btn">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
@if(session('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endif
<script>
    $(document).on("click", ".BlogManagmentPackagesForHomePage", function ()
    {
        var PackagesForHomePage = "blog management";

        let formData = new FormData();
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('PackagesForHomePage', PackagesForHomePage);

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ url('PackagesForHome') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(result)
            {
                console.log(result.html);
                if(result.html != null)
                {
                    $(".packages").html(result.html);
                }
                else
                {
                    $(".packages").html();
                }
            }
        });
    })
    $(document).on("click", ".DigitalMarketingPackagesForHomePage", function ()
    {
        var PackagesForHomePage = "digital marketing";

        let formData = new FormData();
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('PackagesForHomePage', PackagesForHomePage);

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ url('PackagesForHome') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(result)
            {
                if(result.html != null)
                {
                    $(".packages").html(result.html);
                }
                else
                {
                    $(".packages").html();
                }
            }
        });
    })
    $(document).on("click", ".WebsitDevelopmentPackagesForHomePage", function ()
    {
        var PackagesForHomePage = "website development";

        let formData = new FormData();
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('PackagesForHomePage', PackagesForHomePage);

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ url('PackagesForHome') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(result)
            {
                console.log(result.html)
                if(result.html != null)
                {
                    $(".packages").html(result.html);
                }
                else
                {
                    $(".packages").html();
                }
            }
        });
    })
    $(document).on("click", ".BrandingPackagesForHomePage", function ()
    {
        var PackagesForHomePage = "branding";

        let formData = new FormData();
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('PackagesForHomePage', PackagesForHomePage);

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ url('PackagesForHome') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(result)
            {
                if(result.html != null)
                {
                    $(".packages").html(result.html);
                }
                else
                {
                    $(".packages").html();
                }
            }
        });
    })
    $(document).on('click', '.get-portfolio', function()
    {
        var get_portfolio = $(this).data('get-portfolio');

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
            
        $.ajax({
            url: "{{ url('get_portfolio') }}",
            type: 'get',
            data: {
                "get_portfolio" : get_portfolio,
            },
            success: function(result)
            {
                $(".get_protfolio_on_home").html(result.html);
            }
        });
    })
    $(document).on('click', '.get-technologies', function()
    {
        var get_technologies = $(this).data('get-technologies');

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
            
        $.ajax({
            url: "{{ url('get_technologies') }}",
            type: 'get',
            data: {
                "get_technologies" : get_technologies,
            },
            success: function(result)
            {
                $(".get_technology_on_home").html(result.html);
            }
        });
    })
    $(document).on("click", ".get_started", function(){
        var package_id = $(this).data("package_id");
        $(".package_id_field").val(package_id);
    })
    
    // $(window).on('load', function()
    // {
    //     $('#exampleModal2').modal('show');
    // });
</script>

@endpush

@endsection