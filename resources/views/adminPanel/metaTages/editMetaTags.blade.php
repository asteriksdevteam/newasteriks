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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Meta Tags</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('meta_tags') }}" class="text-muted text-hover-primary">Meta Tags</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Edit Meta Tags</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">All Meta Tags For Difference Pages</span>
                        </h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column fv-row  flex-row-reverse">
                                    <a href="{{ url("meta_tags") }}" class="btn btn-success btn-sm">Back</a>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-px py-10 my-10">
                        <div class="table-responsive">
                            <form action="{{ url('update_meta_tags') }}" method="post">
                                @csrf
                                <div class="mb-13 text-center">
                                    <h1 class="mb-3">Edit Pages</h1>
                                </div>
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Category</span>
                                    </label>
                                    <input type="hidden" name="editPageId" id="editPageId" value="{{ $alldata->id }}">
                                    <select class="form-select form-select-solid editCategory @error('editCategory') is-invalid @enderror" aria-label="Select example" name="editCategory" id="editCategory">
                                        <option selected disabled>Open this select editCategory</option>
                                        <option value="Home" {{ $alldata->page == "Home" ? "selected" : "" }}>Home</option>
                                        <option value="About us" {{ $alldata->page == "About us" ? "selected" : "" }}>About us</option>
                                        <option value="Blog" {{ $alldata->page == "Blog" ? "selected" : "" }}>Blog</option>
                                        <option value="Careers" {{ $alldata->page == "Careers" ? "selected" : "" }}>Careers</option>
                                        <option value="Contact Us" {{ $alldata->page == "Contact Us" ? "selected" : "" }}>Contact Us</option>
                                        <option value="Privacy Policy" {{ $alldata->page == "Privacy Policy" ? "selected" : "" }}>Privacy Policy</option>
                                        <option value="Terms and Conditions" {{ $alldata->page == "Terms and Conditions" ? "selected" : "" }}>Terms and Conditions</option>
                                    </select>
                                    @error('editCategory')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
            
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Meta Title</span>
                                    </label>
                                    <input type="text" value="{{ $alldata->title }}" class="form-control form-control-solid editTitle @error('editTitle') is-invalid @enderror" name="editTitle" id="editTitle" placeholder="Enter Title"/>
                                    @error('editTitle')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Meta Keyword</span>
                                    </label>
                                    <input class="form-control form-control-solid keywordVal" value="{{ $alldata->keyword }}" name="keyword" id="kt_tagify_1" multiple="multiple"/>
                                    @error('keyword')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
            
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Description</span>
                                    </label>
                                    <textarea class="form-control form-control-solid editDescription @error('editDescription') is-invalid @enderror" name="editDescription" id="editDescription" cols="30" rows="4">{{$alldata->description}}</textarea>
                                    @error('editDescription')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" id="submit" class="btn btn-primary">
                                        <span class="indicator-label">Update</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </form>
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
    $(document).ready(function ()
    {
        var input1 = document.querySelector("#kt_tagify_1");

        new Tagify(input1);
    })
</script>
@endpush
@endsection
