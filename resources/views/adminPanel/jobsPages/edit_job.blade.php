@extends('adminPanel.layouts.app')
@section('content')


<style>
    .garbage1
    {
        font-size: 30px;
        text-align: center
    }
    .garbage1 i
    {
        font-size: 20px;
    }
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Create Jobs</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Create Jobs</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column fv-row  flex-row-reverse">
                                    <a href="{{ url("jobs") }}" class="btn btn-success btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="py-5 px-lg-17">
                            <div class="me-n7 pe-7">
                                <h2 class="fw-bolder pb-10">Create Jobs Page Here</h2>
                                <form class="form" action="{{ url('update_job') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id" value="{{ $Careers->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Department</label>
                                                <select name="department" id="department" class="form-control form-control-solid department @error('department') is-invalid @enderror">
                                                    <option selected disabled>Select</option>
                                                    @foreach($JobCategory as $item)
                                                    <option value="{{ $item->id }}" {{ $Careers->department == $item->id ? "selected" : ""  }}>{{ $item->job_categories }}</option>
                                                    @endforeach
                                                </select>
                                                @error('department')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Job Heading</label>
                                                <input type="text" value="{{ $Careers->job_heading }}" class="form-control form-control-solid job_heading @error('job_heading') is-invalid @enderror" id="job_heading" name="job_heading" placeholder="Enter Job Heading"/>
                                                @error('job_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-start p-5"><h3>All Job Descriptions</h3></label>
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Job Specifications</label>
                                                <textarea id="job_specification" name="job_specification" class="tox-target @error('job_specification') is-invalid @enderror">{{ $Careers->job_specification }}</textarea>
                                                @error('job_specification')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Job Overview</label>
                                                <textarea id="job_overview" name="job_overview" class="tox-target @error('job_overview') is-invalid @enderror">{{ $Careers->job_overview }}</textarea>
                                                @error('job_overview')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Job Description</label>
                                                <textarea id="job_description" name="job_description" class="tox-target @error('job_description') is-invalid @enderror">{{ $Careers->job_description }}</textarea>
                                                @error('job_description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="required fs-6 fw-bold mb-2 d-flex justify-content-start p-5"><h3>Perks & Benefits</h3></label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-7">
                                                        <input type="checkbox" id="full_allowance" name="full_allowance" {{ $Careers->full_allowance == "on" ? "checked" : "" }}/> &nbsp;
                                                        <label class="fs-6 fw-bold mb-2">Fuel Allowance</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-7">
                                                        <input type="checkbox" id="leave_encashment" name="leave_encashment" {{ $Careers->leave_encashment == "on" ? "checked" : "" }}/> &nbsp;
                                                        <label class="fs-6 fw-bold mb-2">Leave Encashment</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-7">
                                                        <input type="checkbox" id="LDopp" name="LDopp" {{ $Careers->LDopp == "on" ? "checked" : "" }}/> &nbsp;
                                                        <label class="fs-6 fw-bold mb-2">Learning & Development Opportunities</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-7">
                                                        <input type="checkbox" id="recognition_rewards" name="recognition_rewards" {{ $Careers->recognition_rewards == "on" ? "checked" : "" }}/> &nbsp;
                                                        <label class="fs-6 fw-bold mb-2">Recognition & Rewards</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-7">
                                                        <input type="checkbox" id="medical_insurance" name="medical_insurance" {{ $Careers->medical_insurance == "on" ? "checked" : "" }}/> &nbsp;
                                                        <label class="fs-6 fw-bold mb-2">Medical Insurance</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-7">
                                                        <input type="checkbox" id="maternity_paternity_leave" name="maternity_paternity_leave" {{ $Careers->maternity_paternity_leave == "on" ? "checked" : "" }}/> &nbsp;
                                                        <label class="fs-6 fw-bold mb-2">Maternity & Paternity Leave</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-7">
                                                        <input type="checkbox" id="increment_twice_a_year" name="increment_twice_a_year" {{ $Careers->increment_twice_a_year == "on" ? "checked" : "" }}/> &nbsp;
                                                        <label class="fs-6 fw-bold mb-2">Increment Twice a Year</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-7">
                                                        <input type="checkbox" id="paid_time_off" name="paid_time_off" {{ $Careers->paid_time_off == "on" ? "checked" : "" }}/> &nbsp;
                                                        <label class="fs-6 fw-bold mb-2">Paid Time Off</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-7">
                                                        <input type="checkbox" id="mental_health_leave" name="mental_health_leave" {{ $Careers->mental_health_leave == "on" ? "checked" : "" }}/> &nbsp;
                                                        <label class="fs-6 fw-bold mb-2">Mental Health Leave</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-start p-5"><h3>Other Description</h3></label>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Number of Vacancies</label>
                                                <input type="number" value="{{ $Careers->number_of_vacancies }}" class="form-control form-control-solid number_of_vacancies @error('number_of_vacancies') is-invalid @enderror" id="number_of_vacancies" name="number_of_vacancies" placeholder="Enter Number of Vacancies"/>
                                                @error('number_of_vacancies')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Working Hours</label>
                                                <input type="number" value="{{ $Careers->working_hours }}" class="form-control form-control-solid working_hours @error('working_hours') is-invalid @enderror" id="working_hours" name="working_hours" placeholder="Enter Number of Vacancies"/>
                                                @error('working_hours')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Job Shift</label>
                                                <select name="job_shift" id="job_shift" class="form-control form-control-solid job_shift @error('job_shift') is-invalid @enderror">
                                                    <option selected disabled>Select</option>
                                                    <option value="Morning" {{ $Careers->job_shift == "Morning" ? "selected" : "" }}>Morning</option>
                                                    <option value="Evening" {{ $Careers->job_shift == "Evening" ? "selected" : "" }}>Evening</option>
                                                    <option value="Night" {{ $Careers->job_shift == "Night" ? "selected" : "" }}>Night</option>
                                                </select>
                                                @error('job_shift')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Job Type</label>
                                                <select name="job_type" id="job_type" class="form-control form-control-solid job_type @error('job_type') is-invalid @enderror">
                                                    <option selected disabled>Select</option>
                                                    <option value="Full-Time" {{ $Careers->job_type == "Full-Time" ? "selected" : "" }}>Full-Time</option>
                                                    <option value="Part-Time" {{ $Careers->job_type == "Part-Time" ? "selected" : "" }}>Part-Time</option>
                                                    <option value="Contracted" {{ $Careers->job_type == "Contracted" ? "selected" : "" }}>Contracted</option>
                                                    <option value="Freelance" {{ $Careers->job_type == "Freelance" ? "selected" : "" }}>Freelance</option>
                                                </select>
                                                @error('job_type')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">City</label>
                                                <select name="city" id="city" class="form-control form-control-solid city @error('city') is-invalid @enderror">
                                                    <option selected disabled>Select</option>
                                                    <option value="Karachi" {{ $Careers->city == "Karachi" ? "selected" : "" }}>Karachi</option>
                                                    <option value="Lahore" {{ $Careers->city == "Lahore" ? "selected" : "" }}>Lahore</option>
                                                    <option value="Islamabad" {{ $Careers->city == "Islamabad" ? "selected" : "" }}>Islamabad</option>
                                                </select>
                                                @error('city')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="modal-footer flex-center">
                                                <button type="submit" id="UpdateBanner" class="btn btn-primary d-flex justify-content-end">
                                                    <span class="indicator-label">Create</span>
                                                    <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>               
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
    tinymce.init({
        selector: "#job_overview",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });

    tinymce.init({
        selector: "#job_description",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });

    tinymce.init({
        selector: "#job_specification",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });
</script>

@endpush
@endsection