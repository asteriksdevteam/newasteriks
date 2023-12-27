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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Second Section</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Second Section</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <form class="form" action="{{ url('updateSecondSection') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h2 class="fw-bolder pb-10">Update Second Section</h2>
                            <div class="table-responsive">
                                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                    <thead>
                                        <tr class="fw-bolder text-muted">
                                            <th class="min-w-120px text-dark" style="width: 25%"><b>Heading</b></th>
                                            <th class="min-w-120px text-dark" style="width: 25%"><b>Content</b></th>
                                            <th class="min-w-120px text-dark" style="width: 25%"><b>Image</b></th>
                                            <th class="min-w-120px text-dark" style="width: 25%"><b>Show Image</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <input type="hidden" value="{{ $alldata->id }}" name="id">
                                        <tr>
                                            <td>
                                                <input type="text" value="{{ $alldata->heading1 }}" class="form-control form-control-solid second_section_heading_1 @error('second_section_heading_1') is-invalid @enderror" id="second_section_heading_1" name="second_section_heading_1" placeholder="Heading"/>
                                                @error('second_section_heading_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </td>
                                            <td>
                                                <textarea class="form-control form-control-solid second_section_content_1 @error('second_section_content_1') is-invalid @enderror" id="second_section_content_1" name="second_section_content_1" rows="6" cols="5" placeholder="Content">{{ $alldata->content1 }}</textarea>
                                                @error('second_section_content_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror                                                            
                                            </td>
                                            <td>
                                                <input type="file" value="" class="form-control form-control-solid second_section_image_1 @error('second_section_image_1') is-invalid @enderror" id="second_section_image_1" name="second_section_image_1" placeholder="Heading" accept=".jpg, .jpeg, .png"/>
                                                @error('second_section_image_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror                                                            
                                            </td>
                                            <td>
                                                <img width="30%" src="{{ asset($alldata->image1) }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" value="{{ $alldata->heading2 }}" class="form-control form-control-solid second_section_heading_2 @error('second_section_heading_2') is-invalid @enderror" id="second_section_heading_2" name="second_section_heading_2" placeholder="Heading"/>
                                                @error('second_section_heading_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </td>
                                            <td>
                                                <textarea class="form-control form-control-solid second_section_content_2 @error('second_section_content_2') is-invalid @enderror" id="second_section_content_2" name="second_section_content_2" rows="6" cols="5" placeholder="Content">{{ $alldata->content2 }}</textarea>
                                                @error('second_section_content_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror                                                            
                                            </td>
                                            <td>
                                                <input type="file" value="" class="form-control form-control-solid second_section_image_2 @error('second_section_image_2') is-invalid @enderror" id="second_section_image_2" name="second_section_image_2" accept=".jpg, .jpeg, .png"/>
                                                @error('second_section_image_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror                                                            
                                            </td>
                                            <td>
                                                <img width="30%" src="{{ asset($alldata->image2) }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" value="{{ $alldata->heading3 }}" class="form-control form-control-solid second_section_heading_3 @error('second_section_heading_3') is-invalid @enderror" id="second_section_heading_3" name="second_section_heading_3" placeholder="Heading"/>
                                                @error('second_section_heading_3')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </td>
                                            <td>
                                                <textarea class="form-control form-control-solid second_section_content_3 @error('second_section_content_3') is-invalid @enderror" id="second_section_content_3" name="second_section_content_3" rows="6" cols="5" placeholder="Content">{{ $alldata->content3 }}</textarea>
                                                @error('second_section_content_3')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror                                                            
                                            </td>
                                            <td>
                                                <input type="file" value="" class="form-control form-control-solid second_section_image_3 @error('second_section_image_3') is-invalid @enderror" id="second_section_image_3" name="second_section_image_3" placeholder="Heading"/>
                                                @error('second_section_image_3')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror                                                            
                                            </td>
                                            <td>
                                                <img width="30%" src="{{ asset($alldata->image3) }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" value="{{ $alldata->heading4 }}" class="form-control form-control-solid second_section_heading_4 @error('second_section_heading_4') is-invalid @enderror" id="second_section_heading_4" name="second_section_heading_4" placeholder="Heading"/>
                                                @error('second_section_heading_4')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </td>
                                            <td>
                                                <textarea class="form-control form-control-solid second_section_content_4 @error('second_section_content_4') is-invalid @enderror" id="second_section_content_4" name="second_section_content_4" rows="6" cols="5" placeholder="Content">{{ $alldata->content4 }}</textarea>
                                                @error('second_section_content_4')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror                                                            
                                            </td>
                                            <td>
                                                <input type="file" value="" class="form-control form-control-solid second_section_image_4 @error('second_section_image_4') is-invalid @enderror" id="second_section_image_4" name="second_section_image_4" placeholder="Heading"/>
                                                @error('second_section_image_4')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror                                                            
                                            </td>
                                            <td>
                                                <img width="30%" src="{{ asset($alldata->image4) }}" alt="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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