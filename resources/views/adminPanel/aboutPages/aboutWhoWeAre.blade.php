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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">First Section of About us</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">First Section of About us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <form class="form" action="{{ url('updateWhoWeAre') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="py-5 px-lg-17">
                                <div class="me-n7 pe-7">
                                    <h2 class="fw-bolder pb-10">Update First Section of About us</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <input type="hidden" value="{{ $alldata->id }}" id="id" name="id"/>

                                                <label class="required fs-6 fw-bold mb-2">Who We Are Heading</label>
                                                <input type="text" value="{{ $alldata->who_we_are }}" class="form-control form-control-solid who_we_are @error('who_we_are') is-invalid @enderror" id="who_we_are" name="who_we_are" placeholder="Who We Are Heading"/>
                                                @error('who_we_are')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Who We Are Content</label>
                                                <textarea class="form-control form-control-solid who_we_are_content @error('who_we_are_content') is-invalid @enderror" name="who_we_are_content" id="who_we_are_content" cols="30" rows="4">{{ $alldata->who_we_are_content }}</textarea>
                                                @error('who_we_are_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Section Image</label>
                                                <input type="file"  class="form-control form-control-solid section_image @error('section_image') is-invalid @enderror" name="section_image" id="section_image"/>
                                                @error('section_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div>
                                                <img src="{{ asset($alldata->section_image) }}" alt="" srcset="" width="10%">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Heading 1</label>
                                                <input type="text" value="{{ $alldata->heading_1 }}" class="form-control form-control-solid heading_1 @error('heading_1') is-invalid @enderror" id="heading_1" name="heading_1" placeholder="Heading 1"/>
                                                @error('heading_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Content 1</label>
                                                <textarea class="form-control form-control-solid content_1 @error('content_1') is-invalid @enderror" name="content_1" id="content_1" cols="30" rows="4">{{ $alldata->content_1 }}</textarea>
                                                @error('content_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Icon Image 1</label>
                                                <input type="file"  class="form-control form-control-solid icon_image_1 @error('icon_image_1') is-invalid @enderror" name="icon_image_1" id="icon_image_1"/>
                                                @error('icon_image_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div>
                                                <img src="{{ asset($alldata->icon_image_1) }}" alt="" srcset="" width="10%">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Heading 2</label>
                                                <input type="text" value="{{ $alldata->heading_2 }}" class="form-control form-control-solid heading_2 @error('heading_2') is-invalid @enderror" id="heading_2" name="heading_2" placeholder="Heading 2"/>
                                                @error('heading_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Content 2</label>
                                                <textarea class="form-control form-control-solid content_2 @error('content_2') is-invalid @enderror" name="content_2" id="content_2" cols="30" rows="4">{{ $alldata->content_2 }}</textarea>
                                                @error('content_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Icon Image 2</label>
                                                <input type="file"  class="form-control form-control-solid icon_image_2 @error('icon_image_2') is-invalid @enderror" name="icon_image_2" id="icon_image_2"/>
                                                @error('icon_image_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div>
                                                <img src="{{ asset($alldata->icon_image_2) }}" alt="" srcset="" width="10%">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Heading 3</label>
                                                <input type="text" value="{{ $alldata->heading_3 }}" class="form-control form-control-solid heading_3 @error('heading_3') is-invalid @enderror" id="heading_3" name="heading_3" placeholder="Heading 3"/>
                                                @error('heading_3')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Content 3</label>
                                                <textarea class="form-control form-control-solid content_3 @error('content_3') is-invalid @enderror" name="content_3" id="content_3" cols="30" rows="4">{{ $alldata->content_3 }}</textarea>
                                                @error('content_3')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Icon Image 3</label>
                                                <input type="file"  class="form-control form-control-solid icon_image_3 @error('icon_image_3') is-invalid @enderror" name="icon_image_3" id="icon_image_3"/>
                                                @error('icon_image_3')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div>
                                                <img src="{{ asset($alldata->icon_image_3) }}" alt="" srcset="" width="10%">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Heading 4</label>
                                                <input value="{{ $alldata->heading_4 }}" type="text" class="form-control form-control-solid heading_4 @error('heading_4') is-invalid @enderror" id="heading_4" name="heading_4" placeholder="Heading 4"/>
                                                @error('heading_4')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Content 4</label>
                                                <textarea class="form-control form-control-solid content_4 @error('content_4') is-invalid @enderror" name="content_4" id="content_4" cols="30" rows="4">{{ $alldata->content_4 }}</textarea>
                                                @error('content_4')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Icon Image 4</label>
                                                <input type="file"  class="form-control form-control-solid icon_image_4 @error('icon_image_4') is-invalid @enderror" name="icon_image_4" id="icon_image_4"/>
                                                @error('icon_image_3')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div>
                                                <img src="{{ asset($alldata->icon_image_4) }}" alt="" srcset="" width="10%">
                                            </div>
                                        </div>
                                    </div>
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