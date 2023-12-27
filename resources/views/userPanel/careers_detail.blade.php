@extends('userPanel.layouts.app')
@section('content')


<section class="career-inner-banner">
    <div class="container center-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <h1 class="text-white">{{ $Careers->job_heading }}</h1>
                <p class="text-white">You’ll be part of an inclusive and diverse team, and you’ll receive the training you need to help keep you and us greater.</p>
            </div>
        </div>
    </div>
</section>

<section class="career-inner-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8 col-12">
                <div class="row">
                    <div class="job-title">
                        <h2 class="title">{{ $Careers->job_heading }}</h2>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-10 col-md-10 col-12">
                        <div class="job-overview">
                            <h3 class="subtitle mb-3">Job Overview</h3>
                            <p>{!! $Careers->job_overview !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <h3 class="subtitle mb-3">Job Description</h3>
                   <div class="job-list">
                        {!! $Careers->job_description !!}
                   </div>
                </div>
                <div class="row mb-3">
                    <h3 class="subtitle mb-3">Job Specifications</h3>
                    <div class="job-list">
                        {!! $Careers->job_specification !!}
                    </div>
                </div>
                <div class="row">
                    <h3 class="subtitle mb-4">Perks & Benefits</h3>
                    <div class="job-list">
                        <div class="row mb-3">
                            @if($Careers->full_allowance == "on")
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="career-inner-list career-inner-list2 mb-3">
                                        <div class="item1">
                                            <img src="{{ asset('userAssets/images/CareerIcons/Fuel Allowance.svg')}}" class="img-fluid" alt="Fuel Allowance">
                                        </div>
                                        <div class="item2">
                                            <p class="m-0">Fuel Allowance</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($Careers->recognition_rewards == "on")
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="career-inner-list career-inner-list2 mb-3">
                                        <div class="item1">
                                            <img src="{{ asset('userAssets/images/CareerIcons/Recognition & Rewards.svg')}}" class="img-fluid" alt="Recognition & Rewards">
                                        </div>
                                        <div class="item2">
                                            <p class="m-0">Recognition & Rewards</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            @if($Careers->increment_twice_a_year == "on")
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="career-inner-list career-inner-list2 mb-3">
                                        <div class="item1">
                                            <img src="{{ asset('userAssets/images/CareerIcons/Increment Twice a Year.svg')}}" class="img-fluid" alt="Increment Twice a Year">
                                        </div>
                                        <div class="item2">
                                            <p class="m-0">Increment Twice a Year</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            @if($Careers->leave_encashment == "on")
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="career-inner-list career-inner-list2 mb-3">
                                        <div class="item1">
                                            <img src="{{ asset('userAssets/images/CareerIcons/Leave Encashment.svg')}}" class="img-fluid" alt="Leave Encashment">
                                        </div>
                                        <div class="item2">
                                            <p class="m-0">Leave Encashment</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            @if($Careers->medical_insurance == "on")
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="career-inner-list career-inner-list2 mb-3">
                                        <div class="item1">
                                            <img src="{{ asset('userAssets/images/CareerIcons/Medical Insurance.svg')}}" class="img-fluid" alt="Medical Insurance">
                                        </div>
                                        <div class="item2">
                                            <p class="m-0">Medical Insurance</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            @if($Careers->paid_time_off == "on")
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="career-inner-list career-inner-list2 mb-3">
                                        <div class="item1">
                                            <img src="{{ asset('userAssets/images/CareerIcons/Paid Time Off.svg')}}" class="img-fluid" alt="Paid Time Off">
                                        </div>
                                        <div class="item2">
                                            <p class="m-0">Paid Time Off</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                       
                            @if($Careers->LDopp == "on")
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="career-inner-list career-inner-list2 mb-3">
                                        <div class="item1">
                                            <img src="{{ asset('userAssets/images/CareerIcons/L & D.svg')}}" class="img-fluid" alt="Learning & Development Opportunities">
                                        </div>
                                        <div class="item2">
                                            <p class="m-0">Learning & Development Opportunities</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            @if($Careers->maternity_paternity_leave == "on")
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="career-inner-list career-inner-list2 mb-3">
                                        <div class="item1">
                                            <img src="{{ asset('userAssets/images/CareerIcons/Maternity & Paternity Leave.svg')}}" class="img-fluid" alt="Maternity & Paternity Leave">
                                        </div>
                                        <div class="item2">
                                            <p class="m-0">Maternity & Paternity Leave</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            @if($Careers->mental_health_leave == "on")
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="career-inner-list career-inner-list2 mb-3">
                                        <div class="item1">
                                            <img src="{{ asset('userAssets/images/CareerIcons/Mental Health Leave.svg')}}" class="img-fluid" alt="Mental Health Leave">
                                        </div>
                                        <div class="item2">
                                            <p class="m-0">Mental Health Leave</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-12">
                <div class="row mb-3">
                    <div class="cv-form">
                        <h2 class="subtitle text-center">Apply for Job</h2>
                        <div class="form">
                            <form>
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="hidden" class="job_id" name="job_id" id="job_id" value="{{ $Careers->id }}">
                                    <input type="text" name="name" placeholder="Name*" class="form-control name" required>
                                    <span class="error-message">
                                        <small class="text-danger error-message name-error" id="name-error"></small>
                                    </span>
                                </div>
                                <br>
                                <div class="form-group mb-3">
                                    <input type="number" name="phone" placeholder="Phone Number*" class="form-control phoneNumber" required>
                                    <span class="error-message">
                                        <small class="text-danger error-message phoneNumber-error" id="phoneNumber-error"></small>
                                    </span>
                                </div>
                                <br>
                                <div class="form-group mb-3">
                                    <input type="text" name="email" placeholder="Email*" class="form-control email" required>
                                    <span class="error-message">
                                        <small class="text-danger error-message email-error" id="email-error"></small>
                                    </span>
                                </div>
                                <br>
                                <div class="form-group mb-3">
                                    <input type="file" name="cv" id="getCvText" class="form-control cv custom-file-input" required>
                                    <span class="error-message">
                                        <small class="text-danger error-message cv-error" id="cv-error"></small>
                                    </span>
                                </div>
                                <br>
                                <div class="form-group mb-3">
                                    <input type="text" name="portfolio" placeholder="Portfolio Link" class="form-control portfolio" required>
                                    <span class="error-message">
                                        <small class="text-danger error-message portfolio-error" id="portfolio-error"></small>
                                    </span>
                                </div>
                                <br>
                                <div class="form-group mb-3">
                                    <input type="file" name="cv1" id="cv1" class="form-control coverLetter" required>
                                    <span class="error-message">
                                        <small class="text-danger error-message coverLetter-error" id="coverLetter-error"></small>
                                    </span>
                                </div>
                                <br>
                                <button type="button" class="submit1">apply now</button>
                                <!--<button type="submit" class="submit2">Share</button>-->
                                <!--<button type="button" class="submit1">-->
                                <!--  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>-->
                                <!--  Loading...-->
                                <!--</button>-->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="career-inner-list col-6 mb-3">
                        <div class="item1">
                            <img src="{{ asset('userAssets/images/CareerIcons/Number of Vacancies.svg')}}" class="img-fluid" alt="Number of Vacancies">
                        </div>
                        <div class="item2">
                            <h5>{{ $Careers->number_of_vacancies }}</h5>
                            <p>Number of Vacancies</p>
                        </div>
                    </div>
                    <div class="career-inner-list col-6 mb-3">
                        <div class="item1">
                            <img src="{{ asset('userAssets/images/CareerIcons/Working Hours.svg')}}" class="img-fluid" alt="Working Hours">
                        </div>
                        <div class="item2">
                            <h5>{{ $Careers->working_hours }}</h5>
                            <p>Working Hours</p>
                        </div>
                    </div>
                    <div class="career-inner-list col-6 mb-3">
                        <div class="item1">
                            <img src="{{ asset('userAssets/images/CareerIcons/Job Shift.svg')}}" class="img-fluid" alt="Job Shift">
                        </div>
                        <div class="item2">
                            <h5>{{ $Careers->job_shift }}</h5>
                            <p>Job Shift</p>
                        </div>
                    </div>
                    <div class="career-inner-list col-6 mb-3">
                        <div class="item1">
                            <img src="{{ asset('userAssets/images/CareerIcons/Working Hours.svg')}}" class="img-fluid" alt="Job Type">
                        </div>
                        <div class="item2">
                            <h5>{{ $Careers->job_type }}</h5>
                            <p>Job Type</p>
                        </div>
                    </div>
                    <div class="career-inner-list col-6 mb-3">
                        <div class="item1">
                            <img src="{{ asset('userAssets/images/CareerIcons/City.svg')}}" class="img-fluid" alt="City">
                        </div>
                        <div class="item2">
                            <h5>{{ $Careers->city }}</h5>
                            <p>City</p>
                        </div>
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
$(document).on('click', '.submit1', function(){
    var job_id = $(".job_id").val(); 
    var name = $(".name").val();
    var phone = $(".phoneNumber").val();
    var email = $(".email").val();
    var cv = $(".cv").val();
    var portfolio = $(".portfolio").val();
    var coverLetter = $(".coverLetter").val();
    
    if (name === "") 
    {
        $(".name").addClass("is-invalid");
        $(".name-error").text("please enter full name here...");
    }
    if (phone === "") 
    {
        $(".phoneNumber").addClass("is-invalid");
        $(".phoneNumber-error").text("please enter phone number here...");
    }
    if (email === "") 
    {
        $(".email").addClass("is-invalid");
        $(".email-error").text("please enter email here...");
    }
    if (cv === "") 
    {
        $(".cv").addClass("is-invalid");
        $(".cv-error").text("please select CV here...");
    }
    if (portfolio === "") 
    {
        $(".portfolio").addClass("is-invalid");
        $(".portfolio-error").text("please enter link here...");
    }
    if (coverLetter === "") 
    {
        $(".coverLetter").addClass("is-invalid");
        $(".coverLetter-error").text("please select cover letter here...");
    }
    if(name !== "" && phone !== "" && email !== "" && cv !== "" && portfolio !== "" && coverLetter !== "")
    {
        
        
        // let formData = new FormData();
        // formData.append('_token', "{{ csrf_token() }}");
        // formData.append('job_id', job_id);
        // formData.append('name', name);
        // formData.append('phone', phone);
        // formData.append('email', email);
        // formData.append('cv', $('.cv')[0].files[0]);
        // formData.append('portfolio', portfolio);
        // formData.append('coverLetter', $('.coverLetter')[0].files[0]);
        
        // $.ajaxSetup({
        //     headers: {
        //     'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //     }
        // });
            
        // $.ajax({
        //     url: "{{ url('apply_on_job_dddd') }}",
        //     type: 'POST',
        //     data: formData,
        //     processData: false,
        //     contentType: false,
        //     success: function(result)
        //     {
        //         if(result.success == "You Applied Successfully!")
        //         {
        //             toastr.success(result.success);
        //             setTimeout(function() {
        //                 location.reload();
        //             }, 2000);
        //         }
        //         else
        //         {
        //             toastr.error(result.success);
        //         }
        //     }
        // });
    }

    
})
</script>

@endpush
@endsection