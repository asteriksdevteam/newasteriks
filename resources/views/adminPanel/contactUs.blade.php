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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Contact Us</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <div class="table-responsive">
                            <form action="{{ url("edit_contactus") }}" method="POST">
                                @csrf
                                <div class="mb-13 text-center">
                                    <h1 class="mb-3">Set Contact Us Details</h1>
                                </div>
                                <input type="hidden" name="id" id="id" value="{{ $allData != null ? $allData->id : "" }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Phone Number</span>
                                            </label>
                                            <input type="number" value="{{ $allData != null ? $allData->phone : "" }}" class="form-control @error('phone') is-invalid @enderror form-control-solid phone" placeholder="Enter Phone Here..." name="phone" id="phone" />
                                            @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Email</span>
                                            </label>
                                            <input type="email" value="{{ $allData != null ? $allData->email : "" }}" class="form-control form-control-solid email @error('email') is-invalid @enderror" placeholder="Enter Email Here..." name="email" id="email" />
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Pakistan Address</span>
                                            </label>
                                            <textarea class="form-control form-control-solid address1 @error('address1') is-invalid @enderror" name="address1" id="address1" cols="30" rows="3">{{ $allData != null ? $allData->address1 : "" }}</textarea>
                                            @error('address1')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">USA Address</span>
                                            </label>
                                            <textarea class="form-control form-control-solid address2 @error('address2') is-invalid @enderror" name="address2" id="address2" cols="30" rows="3">{{ $allData != null ? $allData->address2 : "" }}</textarea>
                                            @error('address2')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Pakistan Map</span>
                                            </label>
                                            <textarea class="form-control form-control-solid pakistan_map @error('pakistan_map') is-invalid @enderror" name="pakistan_map" id="pakistan_map" cols="30" rows="3">{{ $allData != null ? $allData->pakistan_map : "" }}</textarea>
                                            @error('pakistan_map')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">USA Map</span>
                                            </label>
                                            <textarea class="form-control form-control-solid use_map @error('use_map') is-invalid @enderror" name="use_map" id="use_map" cols="30" rows="3">{{ $allData != null ? $allData->use_map : "" }}</textarea>
                                            @error('use_map')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
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

@endpush
@endsection