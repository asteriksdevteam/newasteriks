@extends('userPanel.layouts.app')
@section('content')

<section class="about-banner">
    <div class="container center-container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="about-content">  
                    <h1 class="text-white">Discover <span class="highlight">our story of</span> <br/> innovation <span class="outline">and excellence</span></h1>
                    <p class="text-white">We believe creativity and success go hand in hand. Our journey is about transforming visions into digital masterpieces and pushing boundaries to turn bold ideas into successful, impactful projects for our clients.</p>
                    <div class="aboutbanner-btn mt-5 pt-2">
                        <!--<div class="btn1">-->
                        <!--    <a href="#">Learn More</a>-->
                        <!--</div>-->
                        <!--<div class="btn2">-->
                        <!--    <a href="#">Let’s Talk</a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="whowe-our-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 my-auto ipad-order1">
                <div class="whowe-our-main">
                    <div class="center">
                        <img src="{{ asset($WhoWeAre->section_image) }}" class="img-fluid" alt="Asteriks Images">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 ipad-order2">
                <div class="whowe-content mb-3">
                    <h2 class="title">{{ $WhoWeAre->who_we_are }}</h2>
                    <p class="mb-4">{{ $WhoWeAre->who_we_are_content }}</p>
                </div>
                <div class="whowe-our-div">
                    <div class="row mb-4">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="whowe-our-list"><ul><li><img src="{{ asset($WhoWeAre->icon_image_1)}}" class="ic-icon img-fluid" alt=""> {{ $WhoWeAre->heading_1 }}</li></ul>
                                <p class="mb-0">{{ $WhoWeAre->content_1 }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="whowe-our-list"><ul><li><img src="{{ asset($WhoWeAre->icon_image_2)}}" class="ic-icon img-fluid" alt=""> {{ $WhoWeAre->heading_2 }}</li></ul>
                                <p class="mb-0">{{ $WhoWeAre->content_2 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="whowe-our-list"><ul><li><img src="{{ asset($WhoWeAre->icon_image_3)}}" class="ic-icon img-fluid" alt=""> {{ $WhoWeAre->heading_3 }}</li></ul>
                                <p class="mb-0">{{ $WhoWeAre->content_3 }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="whowe-our-list"><ul><li><img src="{{ asset($WhoWeAre->icon_image_4)}}" class="ic-icon img-fluid" alt=""> {{ $WhoWeAre->heading_4 }}</li></ul>
                                <p class="mb-0">{{ $WhoWeAre->content_4 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="count-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <div class="count-div">
                    <div class="count counter">{{ $Counter->first_counter }}+</div>
                    <p>{{ $Counter->first_counter_name }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="count-div">
                    <div class="count counter">{{ $Counter->Second_counter }}+</div>
                    <p>{{ $Counter->Second_counter_name }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="count-div">
                    <div class="count counter">{{ $Counter->Third_counter }}+</div>
                    <p>{{ $Counter->Third_counter_name }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="count-div">
                    <div class="count counter">{{ $Counter->Fourth_counter }}+</div>
                    <p>{{ $Counter->Fourth_counter_name }}</p>
                </div>
            </div>
        </div>            
    </div>
</section>

<section class="corevalue-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-8">
                <h2 class="title">Our Core Values</h2>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="core-div">
                    <h3 class="subtitle">{{ $CoreValueFirst->heading_1 }}</h3>
                    <p>{{ $CoreValueFirst->content_1 }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="core-div">
                    <h3 class="subtitle">{{ $CoreValueFirst->heading_2 }}</h3>
                    <p>{{ $CoreValueFirst->content_2 }}</p>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="core-div">
                    <h3 class="subtitle">{{ $CoreValueFirst->heading_3 }}</h3>
                    <p>{{ $CoreValueFirst->content_3 }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="core-div">
                    <h3 class="subtitle">{{ $CoreValueFirst->heading_4 }}</h3>
                    <p>{{ $CoreValueFirst->content_4 }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="core-div">
                    <h3 class="subtitle">{{ $CoreValueFirst->heading_5 }}</h3>
                    <p>{{ $CoreValueFirst->content_5 }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="core-div">
                    <h3 class="subtitle">{{ $CoreValueFirst->heading_6 }}</h3>
                    <p>{{ $CoreValueFirst->content_6 }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="mission-section">
    <div class="mission-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mobile-order1">
                    <div class="mission-left-div">
                        <img src="{{ asset($CoreValues->main_image) }}" class="mission-img img-fluid" alt="Asteriks Images">
                        <img src="{{ asset($CoreValues->main_image) }}" class="missionbig img-fluid" alt="Asteriks Images">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 my-auto mobile-order2">
                    <div class="mission-main-div">
                        <div class="mission-div">
                            <div class="mission-heading mb-3">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ asset($CoreValues->icon_1) }}" class="img-fluid" alt="Asteriks Images">
                                    </div>
                                    <div>
                                        <h3 class="subtitle">{{ $CoreValues->heading_1 }}</h3>
                                    </div>
                                </div>
                            </div>
                            <p>{{ $CoreValues->content_1 }}</p>
                        </div>
                        <div class="mission-div">
                            <div class="mission-heading mb-3">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ asset($CoreValues->icon_2) }}" class="img-fluid" alt="Asteriks Images">
                                    </div>
                                    <div>
                                        <h3 class="subtitle">{{ $CoreValues->heading_2 }}</h3>
                                    </div>
                                </div>
                            </div>
                            <p>{{ $CoreValues->content_2 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="mission-section">
    <div class="mission-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mobile-order1">
                    <div class="mission-left-div">
                        <img src="{{ asset($CoreValues->main_image) }}" class="img-fluid img01" alt="Asteriks Images">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 my-auto mobile-order2">
                    <div class="mission-main-div">
                        <div class="mission-div">
                            <div class="mission-heading mb-3">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ asset($CoreValues->icon_1) }}" class="img-fluid" alt="Asteriks Images">
                                    </div>
                                    <div>
                                        <h3 class="subtitle">{{ $CoreValues->heading_1 }}</h3>
                                    </div>
                                </div>
                            </div>
                            <p>{{ $CoreValues->content_1 }}</p>
                        </div>
                        <div class="mission-div mobilemission-div">
                            <div class="mission-heading mb-3">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{ asset($CoreValues->icon_2) }}" class="img-fluid" alt="Asteriks Images">
                                    </div>
                                    <div>
                                        <h3 class="subtitle">{{ $CoreValues->heading_2 }}</h3>
                                    </div>
                                </div>
                            </div>
                            <p>{{ $CoreValues->content_2 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="our-story">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 my-auto">
                <div class="our-story-content">
                    <h2 class="title">Our Story</h2>
                    <p>{{ $StoryCompany->story_content }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="story-div">
                    {{-- <img src="{{ url('userAssets/images/story2.png') }}" class="img-fluid img02" alt="Asteriks Images"> --}}
                    <img src="{{ asset($StoryCompany->story_image) }}" class="img-fluid img01" alt="Asteriks Images">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="company-profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mobile-order1 ipad-order1">
                <div class="company-div">
                    <img src="{{ asset($StoryCompany->company_image) }}" class="img-fluid img1" alt="Asteriks Images">
                    {{-- <img src="{{ url('userAssets/images/profile-img2.png') }}" class="img-fluid img2" alt="Asteriks Images"> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto mobile-order2 ipad-order2">
                <div class="profile-content">
                    <h2 class="title">Company Profile</h2>
                    <p>{{ $StoryCompany->company_content }}</p>
                </div>
                <br>
                {{-- <a href="{{ asset($StoryCompany->company_profile) }}" download="Asterisk Profile Document.pdf" class="download">Estimate Project</a> --}}
                <div class="download">
                    <a href="{{ asset($StoryCompany->company_profile) }}" target="blank">download</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="black-countersection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="black-div">
                    <h2 class="title text-white">{{ $CTA2->first_heading }}</h2>
                    <p class="black-text">{{ $CTA2->second_heading }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="black-counter">
                    <div class="black-leftbigtext black-bigtext">
                        <div class="black-flex"><div class="count">{{ $CTA2->first_persentage }}</div><span style="color:#FF6145;">%</span></div>
                        <p class="text-white">{{ $CTA2->first_content }}</p>
                    </div>
                    <div class="black-bigtext">
                        <div class="black-flex"><div class="count">{{ $CTA2->second_persentage }}</div><span style="color:#FF6145;">%</span></div>
                        <p class="text-white">{{ $CTA2->second_content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="meeting-section">
    <div class="container">
        <div class="row justify-content-center text-center margin20">
            <div class="col-lg-8 col-md-8">
                <h2 class="title">Meet Pioneer</h2>
                <p class="desc">The Architect of Tomorrow’s Marketing Solutions Crafting Marketing Magic At Digi Content Experts- Turning Challenges Into Success.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 mobilemargin20">
                <div class="meeting-div">
                    <div class="meeting-content">
                        <div class="meet1-left">
                            <img src="{{ asset('userAssets/images/meet1.png') }}" class="img-fluid" alt="Asteriks Images">
                        </div>
                        <div class="meet1-right offset-xxl-6 offset-lg-4 offset-md-4">
                            <h4>Muhammad Junaid</h4>
                            <h5>CEO</h5>
                        </div>
                    </div>
                    <p>Junaid Muhammad, the visionary CEO and Co-founder of Asteriks Digital, boasts an impressive academic background, holding degrees in Marketing, International Business, and Project Management. With an illustrious 13-year career, Junaid has consistently exhibited dedication and enthusiasm. His leadership shines as he's led senior teams and collaborated with Fortune 500 giants showcasing his expertise in marketing and strategic partnerships.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="meeting-div">
                    <div class="meeting-content">
                        <div class="meet1-left">
                            <img src="{{ asset('userAssets/images/meet2.png') }}" class="img-fluid" alt="Asteriks Images">
                        </div>
                        <div class="meet1-right offset-xxl-6 offset-lg-4 offset-md-4">
                            <h4>Fahad Khan</h4>
                            <h5>CCO</h5>
                        </div>
                    </div>
                    <p>Fahad Khan, an accomplished CCO and co-founder of Asteriks Digital, brings a unique blend of expertise to the table. With a background in Food Science and a decade-long career, he is a dedicated and enthusiastic professional. Notably, Fahad's role as a food auditor showcases his attention to detail and commitment to quality. Beyond the corporate realm, he's also a talented actor and entrepreneur, embodying versatility and creativity in all his pursuits.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="company-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9 col-md-9 col-12">
                <h2 class="title">The Heartbeat of <br/> Exceptional Leadership</h2>
                <p>Talent may win you games, but intelligence and teamwork can win you the title of champion.</p>
            </div>
        </div>

        @foreach($LeaderShip as $key => $item)
            @if($item != null && $key % 2 == 0)
                <div class="row mt-5 company-row">
                    <div class="col-lg-4 col-12 p-0">
                        <div class="company-section-img">
                            <img src="{{ asset($item->image) }}" class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 my-auto">
                        <div class="company-section-content">
                            <h3 class="m-0">{{ $item->name }}</h3>
                            <h4><span class="highlight">{{ $item->designation }}</span></h4>
                            <p>{{ $item->content }}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if($key === 1 || $key === 3)
                <div class="row mt-5 company-row">
                    <div class="col-lg-8 col-12 my-auto">
                        <div class="company-section-content">
                            <h3 class="m-0">{{ $item->name }}</h3>
                            <h4><span class="highlight">{{ $item->designation }}</span></h4>
                            <p>{{ $item->content }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 p-0">
                        <div class="company-section-img">
                            <img src="{{ asset($item->image) }}" class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>

<section class="mobile-company-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8 col-md-8">
                <h2 class="title">The Heartbeat of <br/> Exceptional Leadership</h2>
                <p>Talent may win you games, but intelligence and teamwork can win you the title of champion.</p>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel mobile-company-carousel">
                <div class="item">
                    <div class="mobile-company-item">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12 p-0">
                                <div class="company-img">
                                    <img src="{{ asset('userAssets/images/c1.png') }}" class="img-fluid c1" alt="Asteriks Images">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 my-auto">
                                <div class="company-content">
                                    <h2 class="title m-0">Fatima Zia</h2>
                                    <h3 class="subtitle"><span class="highlight">HR Manager</span></h3>
                                    <p>Non ullamcorper convallis venenatis sagittis in adipiscing. Risus dignissim purus tincidunt dui dui aenean porttitor nunc id. Volutpat sollicitudin adipiscing  imperdiet sed tempor tristique tempus. Adipiscing tincidunt consectetur congue sem habitant tempor. Nullam congue sodales sit  Non ullamcorper convallis venenatis sagittis in adipiscing. Risus dignissim purus tincidunt dui dui aenean porttitor nunc id.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mobile-company-item">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12 p-0">
                                <div class="company-img">
                                    <img src="{{ asset('userAssets/images/c1.png') }}" class="img-fluid c1" alt="Asteriks Images">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 my-auto">
                                <div class="company-content">
                                    <h2 class="title m-0">Fatima Zia</h2>
                                    <h3 class="subtitle"><span class="highlight">HR Manager</span></h3>
                                    <p>Non ullamcorper convallis venenatis sagittis in adipiscing. Risus dignissim purus tincidunt dui dui aenean porttitor nunc id. Volutpat sollicitudin adipiscing  imperdiet sed tempor tristique tempus. Adipiscing tincidunt consectetur congue sem habitant tempor. Nullam congue sodales sit  Non ullamcorper convallis venenatis sagittis in adipiscing. Risus dignissim purus tincidunt dui dui aenean porttitor nunc id.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mobile-company-item">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12 p-0">
                                <div class="company-img">
                                    <img src="{{ asset('userAssets/images/c1.png') }}" class="img-fluid c1" alt="Asteriks Images">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 my-auto">
                                <div class="company-content">
                                    <h2 class="title m-0">Fatima Zia</h2>
                                    <h3 class="subtitle"><span class="highlight">HR Manager</span></h3>
                                    <p>Non ullamcorper convallis venenatis sagittis in adipiscing. Risus dignissim purus tincidunt dui dui aenean porttitor nunc id. Volutpat sollicitudin adipiscing  imperdiet sed tempor tristique tempus. Adipiscing tincidunt consectetur congue sem habitant tempor. Nullam congue sodales sit  Non ullamcorper convallis venenatis sagittis in adipiscing. Risus dignissim purus tincidunt dui dui aenean porttitor nunc id.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="mobile-company-item">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12 p-0">
                                <div class="company-img">
                                    <img src="{{ asset('userAssets/images/c1.png') }}" class="img-fluid c1" alt="Asteriks Images">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12 my-auto">
                                <div class="company-content">
                                    <h2 class="title m-0">Fatima Zia</h2>
                                    <h3 class="subtitle"><span class="highlight">HR Manager</span></h3>
                                    <p>Non ullamcorper convallis venenatis sagittis in adipiscing. Risus dignissim purus tincidunt dui dui aenean porttitor nunc id. Volutpat sollicitudin adipiscing  imperdiet sed tempor tristique tempus. Adipiscing tincidunt consectetur congue sem habitant tempor. Nullam congue sodales sit  Non ullamcorper convallis venenatis sagittis in adipiscing. Risus dignissim purus tincidunt dui dui aenean porttitor nunc id.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12 my-auto">
                <div class="faq-content">
                    <h2 class="title">Frequently <br/> Asked Questions</h2>
                    <h3 class="subtitle">Have Any Questions?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur. Massa nunc vulputate suscipit eget at nisi turpis fringilla morbi. Mauris tincidunt diam aliquet vestibulum sed venenatis.</p>
                    <div class="btn-link2 mt-5">
                        <a href="javascript:void(Tawk_API.toggle())">let's talk</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="accordion faq-accordion" id="accordionExample">
                    @foreach($Faqs as $key => $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$key}}" aria-expanded="true" aria-controls="collapseOne">
                                {{ $item->question }}
                            </button>
                        </h2>
                        <div id="collapseOne{{$key}}" class="accordion-collapse collapse {{ $key === 0 ? "show" : "" }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $item->answer }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                  </div>
            </div>
        </div>
    </div>
</section>

<section class="affilation-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-8">
                <h2 class="title">Our Affiliations</h2>
                <p>Collaboration fuels our IT and marketing services. Our specialists blend creativity and technology, delivering data-driven marketing and seamless IT solutions. Partner with us for unparalleled brand growth, exploring a future of boundless potential.</p>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel affilation-carousel">
                @foreach($Affiliations as $item)
                    <div class="item">
                        <img src="{{ asset($item->image) }}" class="img-fluid a1" alt="Asteriks Images">
                    </div>
                @endforeach
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
                                <div class="testimonial-image">
                                    <img src="{{ asset($Testimonial->image) }}" class="img-fluid t1" alt="Asteriks Images">
                                </div>
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

<section class="building-digital-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h2 class="title mb-5">Building a Future for Digital Businesses with Innovative Solutions.</h2>
                <div class="btn-link">
                    <a href="{{ url('contact-us') }}" class="orangebtn">learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection