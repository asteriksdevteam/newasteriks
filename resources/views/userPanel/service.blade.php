@extends('userPanel.layouts.app')
@section('content')

<section class="service-banner" style="background:url(  {{ asset($ServiceBanner->banner_image) }}  ) #00000080 no-repeat center; background-blend-mode: multiply;">
    <div class="container center-container">
        <div class="row">
            <div class="col-lg-6 col-12 my-auto">
                <h1>{{ $ServiceBanner->banner_heading }}</h1>
                <p>{{ $ServiceBanner->banner_content }} </p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="custom-form custom-form2 p-5">
                    <h2 class="title">Let's start <br/> a project together</h2>
                    <form action="{{ url('contactForm') }}" method="post">
                        @csrf
                        <div class="row gx-3">
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <input type="text" placeholder="name*" class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <input type="text" placeholder="email*" class="form-control @error('email') is-invalid @enderror" name="email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" placeholder="phone*" class="form-control mbphone @error('phone') is-invalid @enderror" id="phone" name="phone"  oninput="$(this).val($(this).val().replace(/\D/g, '').substring(0, 11));">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <select class="form-select @error('category') is-invalid @enderror" name="category">
                                    <option selected disabled>Select</option>
                                    @foreach($ServiceCategory as $value)
                                        <option value="{{ $value->id }}">{{ $value->category }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-12 mb-3">
                                <textarea tye="text" id="" cols="30" rows="6" placeholder="Summary*" class="form-control @error('summary') is-invalid @enderror" name="summary"></textarea>
                                @error('summary')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <button type="submit" class="submit">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>            
    </div>
</section>

<section class="service-about">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="title">{{ $ServiceSecondSection->service_second_section_heading }}</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <p class="desc">{{ $ServiceSecondSection->service_second_section_short_description }}</p>
            </div>
        </div>
        <div class="row mb-4">
            <p>{{ $ServiceSecondSection->service_second_section_long_description }}</p>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 col-md-4 col-12">
                <div class="service-box-column">
                    <div class="left">
                        <img src="{{ asset($ServiceSecondSection->sevice_second_Image_first) }}" class="img-fluid" alt="Asteriks Images">
                    </div>
                    <div class="right">
                        <h4 >{{ $ServiceSecondSection->service_second_section_heading_first }}</h4>
                        <p>{{ $ServiceSecondSection->service_second_section_description_first }}</p>                            
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-4 col-12">
                <div class="service-box-column">
                    <div class="left">
                        <img src="{{ asset($ServiceSecondSection->sevice_second_Image_second) }}" class="img-fluid" alt="Asteriks Images">
                    </div>
                    <div class="right">
                        <h4 >{{ $ServiceSecondSection->service_second_section_heading_second }}</h4>
                        <p>{{ $ServiceSecondSection->service_second_section_description_second }}</p>                            
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-4 col-12">
                <div class="service-box-column">
                    <div class="left">
                        <img src="{{ asset($ServiceSecondSection->sevice_second_Image_third) }}" class="img-fluid" alt="Asteriks Images">
                    </div>
                    <div class="right">
                        <h4 >{{ $ServiceSecondSection->service_second_section_heading_third }}</h4>
                        <p>{{ $ServiceSecondSection->service_second_section_description_third }}</p>                            
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="service-about-main">
                <div class="service-about-content">
                    <div class="left">
                        <img src="{{ asset($ServiceSecondSection->sevice_second_Image) }}" class="img-fluid" alt="Asteriks Images">
                    </div>
                    {{-- <div class="right">
                        <img src="assets/images/who-img3.png" class="img-fluid" alt="Asteriks Images">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="title">our work</h2>
            </div>
        </div>
        <div class="row mb-3 bg-lightgreen rowmargin" style="background: {{ $ServiceWork->first_background_color }};">
            <div class="col-lg-6 col-md-6 col-12 my-auto">
                <div class="portfolio-dv">
                    <div class="portfolio-smallimage mb-3 pb-3">
                        <img src="{{ asset($ServiceWork->first_work_icon) }}" class="portfolio-smallimg" alt="Asteriks Images" />
                    </div>
                    <div class="portolfio-heading mb-3 pb-1">
                        <h3 class="subtitle">{{ $ServiceWork->first_work_heading }}</h3>
                    </div>
                    <div class="portfolio-content">
                        <p>{{ $ServiceWork->first_work_content }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <img src="{{ asset($ServiceWork->first_work_image) }}" class="img-fluid" alt="Asteriks Images" />
            </div>
        </div>
        <div class="row mb-3 bg-yellow rowmargin" style="background: {{ $ServiceWork->second_background_color }};">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="{{ asset($ServiceWork->second_work_image) }}" class="img-fluid" alt="Asteriks Images" />
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto">
                <div class="portfolio-dv">
                    <div class="portfolio-smallimage mb-3 pb-3">
                        <img src="{{ asset($ServiceWork->second_work_icon) }}" class="portfolio-smallimg" alt="Asteriks Images" />
                    </div>
                    <div class="portolfio-heading mb-3 pb-1">
                        <h3 class="subtitle">{{ $ServiceWork->second_work_heading }}</h3>
                    </div>
                    <div class="portfolio-content">
                        <p>{{ $ServiceWork->second_work_content }}</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row mb-3 bg-green rowmargin" style="background: {{ $ServiceWork->third_background_color }};">
            <div class="col-lg-6 col-md-6 col-12 my-auto">
                <div class="portfolio-dv">
                    <div class="portfolio-smallimage mb-3 pb-3">
                        <img src="{{ asset($ServiceWork->third_work_icon) }}" class="portfolio-smallimg" alt="Asteriks Images" />
                    </div>
                    <div class="portolfio-heading mb-3 pb-1">
                        <h3>{{ $ServiceWork->third_work_heading }}</h3>
                    </div>
                    <div class="portfolio-content">
                        <p>{{ $ServiceWork->third_work_content }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <img src="{{ asset($ServiceWork->third_work_image) }}" class="img-fluid" alt="Asteriks Images" />
            </div>
        </div>
    </div>
</section>

<section class="black-countersection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="black-div">
                    <h2 class="title text-white">{{ $ServiceCTA2->service_cta_heading_1 }}</h2>
                    <p class="black-text">{{ $ServiceCTA2->service_cta_heading_2 }}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto">
                <div class="black-counter">
                    <div class="black-leftbigtext black-bigtext">
                        <div class="black-flex"><div class="count">{{ $ServiceCTA2->service_cta_percentage_1 }}</div><span style="color:#FF6145;">%</span></div>
                        <p class="text-white">{{ $ServiceCTA2->service_cta_content_1 }}</p>
                    </div>
                    <div class="black-bigtext">
                        <div class="black-flex"><div class="count">{{ $ServiceCTA2->service_cta_percentage_2 }}</div><span style="color:#FF6145;">+</span></div>
                        <p class="text-white">{{ $ServiceCTA2->service_cta_content_2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-process">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-8">
                <div class="">
                    <h2 class="title">Our Work Process</h2>
                    <p class="desc">Build a web presence thriving with programming tools like Python, Angular, React Native, and renowned cloud website creation services in the USA with creative experts who formulate customized solutions.</p>
                </div>
            </div>
        </div>
        <div class="process-div mt-4 pt-2">
            <div class="row mb-4">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="work-process-div">
                        <h3 class="subtitle">{{ $ServiceProcess->process_heading_one }}</h3>
                        <p>{{ $ServiceProcess->process_content_one }}</p>
                        <div class="service-num">01</div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 col-md-6 col-12 offset-md-5">
                    <div class="work-process-div2">
                        <h3 class="subtitle">{{ $ServiceProcess->process_heading_two }}</h3>
                        <p>{{ $ServiceProcess->process_content_two }}</p>
                        <div class="service-num2">02</div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="work-process-div">
                        <h3 class="subtitle">{{ $ServiceProcess->process_heading_three }}</h3>
                        <p>{{ $ServiceProcess->process_content_three }}</p>
                        <div class="service-num">03</div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 col-md-6 col-12 offset-md-5">
                    <div class="work-process-div2">
                        <h3 class="subtitle">{{ $ServiceProcess->process_heading_four }}</h3>
                        <p>{{ $ServiceProcess->process_content_four }}</p>
                        <div class="service-num2">04</div>
                    </div>
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

<section class="service-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="service-blog-main">
                    <div class="left">
                        <img src="{{ asset($ServiceLastSection->image_1) }}" class="img-fluid" alt="Asteriks Images">
                    </div>
                    <div class="center">
                        <p>{{ $ServiceLastSection->image_content }}</p>
                        {{-- <p>Sed Commodo.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="service-blog-content">
                    <h2 class="title">{{ $ServiceLastSection->heading }}</h2>
                    <p class="desc mb-4">{{ $ServiceLastSection->content }}</p>    
                    <ul>
                        <li>{{ $ServiceLastSection->heading_2 }}</li>
                        <li>{{ $ServiceLastSection->heading_3 }}</li>
                    </ul>
                    <div class="service-blog-button">
                        <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blacksection">
    <div class="container">
        <div class="row">
           <div class="col-lg-6 col-md-12 col-12 my-auto">
                <div class="blacksection-content">
                    <h2 class="title">{{ $ServiceCTA->heading }}</h2>
                    <p>{{ $ServiceCTA->content }}</p>
                    <div class="custom-form3">
                        <form action="{{ url('emailSubcription') }}" method="post">
                            @csrf
                            <input type="email" placeholder="Enter your Email Address" name="email" required>
                            <button type="submit" class="submit">Contact Us</button>
                        </form>
                    </div>
                    <div class="service-padbtn">
                        <div class="btn-link">
                            <a href="#" class="orangebtn">learn more</a>
                        </div>
                    </div>
                </div>
           </div>
           <div class="col-lg-6 col-md-12 col-12">
                <img src="{{ asset('userAssets/images/laptop.png') }}" class="img-fluid laptop-image"  alt="Asteriks Images">
                <img src="{{ asset('userAssets/images/laptop2.png') }}" class="img-fluid mobilelaptop-image"  alt="Asteriks Images">
           </div>
        </div>
    </div>
</section>

@if($Packages->count() != 0)
<section class="pricing-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-8 col-md-8 col-12">
                <h2 class="title">We’ve got a Perfect Pricing plans that’s for you</h2>
            </div>
        </div>
        <div class="row rowmargin">
            @if($Packages[0]->package_type != "Others")
                <ul class="pricing-tabs nav nav-tabs" id="myTab" role="tablist">
                    <input type="hidden" name="ServicesID" id="ServicesID" class="ServicesID" value="{{ $ServicesID }}">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active tabWithTypeBasic" data-tabWithTypeBasic="basic">basic</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link tabWithTypeIntermediate" data-tabWithTypeIntermediate="intermediate">intermediate</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link tabWithTypeAdvance" data-tabWithTypeAdvance="advance">advance</button>
                    </li>
                </ul>
            @endif
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
@endif

<section class="partner-section mobile-partner-section">
    <div class="container">
        <div class="row gx-4">
            <div class="col-lg-6 col-md-6 col-12 ipad-order1">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="partner-div">
                            <img src="{{ asset('userAssets/images/p1.png') }} " class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="partner-div">
                            <img src="{{ asset('userAssets/images/p2.png') }} " class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="partner-div">
                            <img src="{{ asset('userAssets/images/p3.png') }} " class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="partner-div">
                            <img src="{{ asset('userAssets/images/p4.png') }} " class="img-fluid" alt="Asteriks Images">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto ipad-order2">
                <div class="partner-content">
                    <h2 class="title"><span class="highlight2">We partner with the world’s technology leaders.</span></h2>
                    <p>Sit lectus tincidunt mi quis nunc. Ut libero morbi fermentum nulla tincidunt aliquam malesuada eget nulla. Vitae semper urna et egestas vitae posuere elementum tellus. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="building-digital-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h2 class="title mb-5">Building digital products and we are just getting started!</h2>
                <div class="btn-link">
                    <a href="{{ url('contact-us') }}" class="orangebtn">Start a Project</a>
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

$(document).on("click", ".get_started", function(){

    var package_id = $(this).data("package_id");
    $(".package_id_field").val(package_id);

})


$(document).on("click", ".tabWithTypeBasic", function(){
    var tabWithTypeBasic = "Basic";
    var ServicesID = $(".ServicesID").val();

    let formData = new FormData();
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('ServicesID', ServicesID);
    formData.append('tabWithType', tabWithTypeBasic);


    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        url: "{{ url('tab_With_Type') }}",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(result)
        {
            $(".packages").html(result.html);
        }
    });

})

$(document).on("click", ".tabWithTypeIntermediate", function(){
    var tabWithTypeIntermediate = "Intermediate";
    var ServicesID = $(".ServicesID").val();

    let formData = new FormData();
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('ServicesID', ServicesID);
    formData.append('tabWithType', tabWithTypeIntermediate);


    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        url: "{{ url('tab_With_Type') }}",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(result)
        {
            $(".packages").html(result.html);
        }
    });
})

$(document).on("click", ".tabWithTypeAdvance", function(){
    var tabWithTypeAdvance = "Advance";
    var ServicesID = $(".ServicesID").val();

    let formData = new FormData();
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('ServicesID', ServicesID);
    formData.append('tabWithType', tabWithTypeAdvance);


    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        url: "{{ url('tab_With_Type') }}",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(result)
        {
            $(".packages").html(result.html);
        }
    });
})

</script>
@endpush
@endsection


















{{-- <div class="row mb-3 bg-lightgreen rowmargin">
    <div class="col-lg-6 col-md-6 col-12 my-auto">
        <div class="portfolio-dv">
            <div class="portfolio-smallimage mb-3 pb-3">
                <img src="{{ asset($ServiceWork->first_work_icon) }}" class="portfolio-smallimg" alt="Asteriks Images" />
            </div>
            <div class="portolfio-heading mb-3 pb-1">
                <h3 class="subtitle">{{ $ServiceWork->first_work_heading }}</h3>
            </div>
            <div class="portfolio-content">
                <p>{{ $ServiceWork->first_work_content }}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <img src="{{ asset($ServiceWork->first_work_image) }}" class="img-fluid" alt="Asteriks Images" />
    </div>
</div>

<div class="row mb-3 bg-yellow rowmargin">
    <div class="col-lg-6 col-md-6 col-12">
        <img src="{{ asset($ServiceWork->second_work_icon) }}" class="img-fluid" alt="Asteriks Images" />
    </div>
    <div class="col-lg-6 col-md-6 col-12 my-auto">
        <div class="portfolio-dv">
            <div class="portfolio-smallimage mb-3 pb-3">
                <img src="{{ asset($ServiceWork->second_work_image) }}" class="portfolio-smallimg" alt="Asteriks Images" />
            </div>
            <div class="portolfio-heading mb-3 pb-1">
                <h3 class="subtitle">{{ $ServiceWork->second_work_heading }}</h3>
            </div>
            <div class="portfolio-content">
                <p>{{ $ServiceWork->second_work_content }}</p>
            </div>
        </div>
    </div>
</div> --}}