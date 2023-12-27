@extends('adminPanel.layouts.app')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Privacy Polices and Terms & Conditions</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Privacy Polices and Terms & Conditions</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <div class="py-5 px-lg-17">
                            <div class="me-n7 pe-7">
                                <h2 class="fw-bolder pb-10">Update Privacy Polices</h2>
                                <form class="form" action="{{ url('store_privacy_policy') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $PrivacyPolicy != null ? $PrivacyPolicy->id : "" }}" name="privacy_policy_id">
                                    <input type="hidden" value="privacy_policy" name="tableName">
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Privacy Polices</label>
                                                <textarea id="privacy_policy" name="privacy_policy" class="tox-target @error('privacy_policy') is-invalid @enderror">{{ $PrivacyPolicy != null ? $PrivacyPolicy->privacy_policy : "" }}</textarea>
                                                @error('privacy_policy')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="modal-footer flex-center">
                                                <button type="submit" id="UpdateBanner" class="btn btn-primary d-flex justify-content-end">
                                                    <span class="indicator-label">Update</span>
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
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <div class="py-5 px-lg-17">
                            <div class="me-n7 pe-7">
                                <h2 class="fw-bolder pb-10">Update Terms & Conditions</h2>
                                <form class="form" action="{{ url('store_terms_and_conditions') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $TermsAndConditions != null ? $TermsAndConditions->id : "" }}" name="terms_and_conditions_id">
                                    <input type="hidden" value="terms_and_conditions" name="tableName">

                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Terms & Conditions</label>
                                                <textarea id="terms_and_conditions" name="terms_and_conditions" class="tox-target @error('terms_and_conditions') is-invalid @enderror">{{ $TermsAndConditions != null ? $TermsAndConditions->terms_and_conditions : "" }}</textarea>
                                                @error('terms_and_conditions')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="modal-footer flex-center">
                                                <button type="submit" id="UpdateBanner" class="btn btn-primary d-flex justify-content-end">
                                                    <span class="indicator-label">Update</span>
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
        selector: "#privacy_policy",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });

    tinymce.init({
        selector: "#terms_and_conditions",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });

    
</script>

@endpush
@endsection