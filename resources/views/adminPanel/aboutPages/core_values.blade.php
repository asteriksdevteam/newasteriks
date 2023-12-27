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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Mission / Vission</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Mission / Vission</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <form class="form" action="{{ url('updateCoreValues') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="py-5 px-lg-17">
                                <div class="me-n7 pe-7">
                                    <h2 class="fw-bolder pb-10">Update Mission / Vission</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <input type="hidden" value="{{ $alldata->id }}" name="id">
                                                <label class="required fs-6 fw-bold mb-2">Image</label>
                                                <input type="file" value="" class="form-control form-control-solid main_image @error('main_image') is-invalid @enderror" id="main_image" name="main_image" placeholder="First Heading"/>
                                                @error('main_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="{{ asset($alldata->main_image) }}" alt="" srcset="" width="50%">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Heading 1</label>
                                                <input type="text" value="{{ $alldata->heading_1 }}" class="form-control form-control-solid heading_1 @error('heading_1') is-invalid @enderror" id="heading_1" name="heading_1" placeholder="First Heading"/>
                                                @error('heading_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Content 1</label>
                                                <textarea class="form-control form-control-solid content_1 @error('content_1') is-invalid @enderror" id="content_1" name="content_1" placeholder="First Content" rows="8">{{ $alldata->content_1 }}</textarea>
                                                @error('content_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Icon 1</label>
                                                <input type="file" value="" class="form-control form-control-solid icon_1 @error('icon_1') is-invalid @enderror" id="icon_1" name="icon_1" placeholder="First Icon"/>
                                                @error('icon_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{ asset($alldata->icon_1) }}" alt="" srcset="" width="50%">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Heading 2</label>
                                                <input type="text" value="{{ $alldata->heading_2 }}" class="form-control form-control-solid heading_2 @error('heading_2') is-invalid @enderror" id="heading_2" name="heading_2" placeholder="Second Heading"/>
                                                @error('heading_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Content 2</label>
                                                <textarea class="form-control form-control-solid content_2 @error('content_2') is-invalid @enderror" id="content_2" name="content_2" placeholder="Second Content" rows="8">{{ $alldata->content_2 }}</textarea>
                                                @error('content_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Icon 2</label>
                                                <input type="file" value="" class="form-control form-control-solid icon_2 @error('icon_2') is-invalid @enderror" id="icon_2" name="icon_2" placeholder="Second Icon"/>
                                                @error('icon_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{ asset($alldata->icon_2) }}" alt="" srcset="" width="50%">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="modal-footer flex-center">
                                <button type="submit" id="UpdateBanner" class="btn btn-primary">
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

@push('scripts')

@if(session('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endif

@endpush
@endsection