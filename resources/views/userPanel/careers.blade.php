@extends('userPanel.layouts.app')
@section('content')

<section class="career-banner">
    <div class="container center-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <h1 class="text-white">Build you careers with us</h1>
                <p class="text-white">You’ll be part of an inclusive and diverse team, and you’ll receive the training you need to help keep you and us greater than.</p>
            </div>
        </div>
    </div>
</section>

<section class="caeer-detail">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-md-8 col-12">
                <h2 class="title">Get exciting jobs from all over the Asteriks Digital</h2>
                <p class="desc">Asteriks aims to build high-quality software while also fostering an enjoyable work environment that allows everyone the opportunity to reach their highest potential.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                <ul class="custom-tabs nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active AllJobCategory" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All</button>
                    </li>
                    @foreach($JobCategory as $item)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link JobCategory" data-id="{{ $item->id }}" id="{{ $item->job_categories }}" data-bs-toggle="{{ $item->job_categories }}tab" data-bs-target="#{{ $item->job_categories }}" type="button" role="{{ $item->job_categories }}tab" aria-controls="{{ $item->job_categories }}" aria-selected="false">{{ $item->job_categories }}</button>
                        </li>
                    @endforeach
                </ul>
            </div>            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 d-none d-sm-block">
                            <div class="row mb-3">
                                <div class="career-input">
                                    <i class="fa fa-search"></i>
                                    <input type="text" class="form-control" id="search" placeholder="Search">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="career-input">
                                    <i class="fa fa-search"></i>
                                    <input type="text" class="form-control" id="location" placeholder="Location">
                                </div>
                            </div>
                            <button type="search" class="search search_with_button">Search</button>
                        </div>
                        <div class="col-lg-9 col-md-6 col-12">
                            <div class="row searchCareers">
                                @foreach($Careers as $item)
                                    <div class="col-lg-6 col-md-6 col-12 mb-4">
                                        <div class="carer-opportunity p-3">
                                            <div class="career-div">
                                                <h4>{{ $item->job_heading }}</h4>
                                                <p>{{ $item->city }}, {{ $item->job_type }}</p>
                                            </div>
                                            <div class="career-btn">
                                                <a href="{{ url('careers-detail/'. $item->id) }}">see details</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <div class="row">
            <div class="grid">
                @foreach($CareerImages as $item)
                    <div class="grid-item grid-item--height2">
                        <a data-fancybox="gallery" href="{{ asset($item->images) }}">
                            <img src="{{ asset($item->images) }}" alt="{{ asset($item->images) }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="job-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
               <div class="job-img">
                    <img src="{{ asset('userAssets/images/job1.png')}}" class="img-fluid job1" alt="Asteriks Images">
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto">
                <div class="job-content">
                    <h2 class="title">Never want to miss <br/> any <span class="highlight">Job News?</span></h2>
                    <p>Get Notifications of new Jobs. No spam ever</p>
                   <div class="job-form">
                        <form action="{{ url('emailSubcription') }}" method="post">
                            @csrf
                            <input type="email" placeholder="Enter Email Address" class="form-control" name="email" required>
                            <button type="submit" class="submit">submit</button>
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')

@if(session('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endif

<script>

// jquery msonary

// $('.grid').masonry({
//     itemSelector: '.grid-item',
//     columnWidth: 160,
//     gutter: 10
// });

$(document).on("click", ".JobCategory", function(){
    var id = $(this).data("id");

    let formData = new FormData();
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('id', id);

    console.log(formData);

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{ url('search_with_category') }}",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(result)
        {
            $(".searchCareers").html(result.html);
        }
    });
})

$(document).on("click", ".AllJobCategory", function(){

    let formData = new FormData();

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{ url('search_with_all_category') }}",
        type: 'get',
        processData: false,
        contentType: false,
        success: function(result)
        {
            $(".searchCareers").html(result.html);
        }
    });
})

$(document).on("click", ".search_with_button", function(){

    var search = $("#search").val();
    var location = $("#location").val();

    let formData = new FormData();
    formData.append('_token', "{{ csrf_token() }}");
    formData.append('search', search);
    formData.append('location', location);

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "{{ url('search_with_side_bar') }}",
        type: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(result)
        {
            $(".searchCareers").html(result.html);
        }
    });
})

</script>

@endpush

@endsection