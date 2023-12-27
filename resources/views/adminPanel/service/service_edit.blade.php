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
    .hr{
        border: 2px solid #000;
      margin: 20px 0; 
    }
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Edit Services</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('services') }}" class="text-muted text-hover-primary">Services</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Edit Services</li>
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
                                    <a href="{{ url("services") }}" class="btn btn-success btn-sm">Back</a>&nbsp;&nbsp;
                                    <a href="{{ url("services_packages/".$Services->id) }}" class="btn btn-info btn-sm">Service Packages</a>
                                </div>
                            </div>
                        </div>
                        <div class="py-5 px-lg-17">
                            <div class="me-n7 pe-7">
                                <h2 class="fw-bolder pb-10">Create Services Page Here</h2>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <p class="text-center">Sub Category / Meta Section</p>
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <input disabled type="color" value="{{ $Services != null ? '#00ff00' : '#ff0000' }}" class="form-control form-control-solid edit_background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" style="width: 100%;" />
                                                    <span class="error-message-background-color">
                                                        <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-center">Banner Section</p>
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <input disabled type="color" value="{{ $ServiceBanner != null ? '#00ff00' : '#ff0000' }}" class="form-control form-control-solid edit_background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" style="width: 100%;" />
                                                    <span class="error-message-background-color">
                                                        <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-center">Second Section</p>
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <input disabled type="color" value="{{ $ServiceSecondSection != null ? '#00ff00' : '#ff0000' }}" class="form-control form-control-solid edit_background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" style="width: 100%;" />
                                                    <span class="error-message-background-color">
                                                        <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-center">Work Section</p>
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <input disabled type="color" value="{{ $ServiceWork != null ? '#00ff00' : '#ff0000' }}" class="form-control form-control-solid edit_background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" style="width: 100%;" />
                                                    <span class="error-message-background-color">
                                                        <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-center">CTA 2 Section</p>
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <input disabled type="color" value="{{ $ServiceCTA2 != null ? '#00ff00' : '#ff0000' }}" class="form-control form-control-solid edit_background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" style="width: 100%;" />
                                                    <span class="error-message-background-color">
                                                        <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-center">Process Section</p>
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <input disabled type="color" value="{{ $ServiceProcess != null ? '#00ff00' : '#ff0000' }}" class="form-control form-control-solid edit_background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" style="width: 100%;" />
                                                    <span class="error-message-background-color">
                                                        <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-center">Last Section</p>
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <input disabled type="color" value="{{ $ServiceLastSection != null ? '#00ff00' : '#ff0000' }}"  class="form-control form-control-solid edit_background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" style="width: 100%;" />
                                                    <span class="error-message-background-color">
                                                        <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-center">CTA Section</p>
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <input disabled type="color" value="{{ $ServiceCTA != null ? '#00ff00' : '#ff0000' }}"  class="form-control form-control-solid edit_background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" style="width: 100%;" />
                                                    <span class="error-message-background-color">
                                                        <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                <form class="form" action="{{ url('update_service') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="id" id="id" value="{{ $Services->id }}">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>Sub Category</h3></label>
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Select Sub Category</label>
                                                <select class="form-control form-control-solid subcategory @error('subcategory') is-invalid @enderror" name="subcategory" id="subcategory">
                                                    <option selected disabled>Select</option>
                                                    @foreach($SubCategory as $item)
                                                    <option value="{{ $item->id }}" {{ $Services->subcategory == $item->id ? 'selected' : '' }}>{{ $item->sub_category }}</option>
                                                    @endforeach
                                                </select>
                                                @error('subcategory')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>Meta Section</h3></label>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Meta Title</label>
                                                <input type="text" value="{{ $Services->meta_title }}" class="form-control form-control-solid meta_title @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" placeholder="Meta Title"/>
                                                @error('meta_title')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Meta keywords</label>
                                                <input type="text" value="{{ $Services->meta_keyword }}" class="form-control form-control-solid @error('meta_keyword') is-invalid @enderror" id="kt_tagify_1" multiple="multiple" name="meta_keyword" placeholder="Meta Title"/>
                                                @error('meta_keyword')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Meta Description</label>
                                                <textarea rows="5" class="form-control form-control-solid meta_description @error('meta_description') is-invalid @enderror" name="meta_description" id="meta_description" cols="30" rows="4">{{ $Services->meta_description }}</textarea>
                                                @error('meta_description')
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
                                <hr class="hr">

                                <form class="form" action="{{ url('update_service_banner') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id" value="{{ $Services->id }}">
                                    <input type="hidden" name="ServiceBannerId" id="ServiceBannerId" value="{{ $ServiceBanner == null ? "" : $ServiceBanner->id }}">
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>Banner Section</h3></label>
                                        <div class="col-md-12">
                                            <label class="required fs-6 fw-bold mb-2">Banner Image</label>
                                            <input type="file" class="form-control form-control-solid banner_image" name="banner_image" id="banner_image" />
                                            @error('banner_image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-md-4 p-5" id="show_banner_image">
                                                <img src="{{ $ServiceBanner == null ? "" : asset($ServiceBanner->banner_image) }}" alt="" class="show_banner_image"  srcset="" width="50%">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Heading</label>
                                                <input type="text" value="{{ $ServiceBanner == null ? "" : $ServiceBanner->banner_heading }}" class="form-control form-control-solid service_banner_heading @error('service_banner_heading') is-invalid @enderror" id="service_banner_heading" name="service_banner_heading" placeholder="Service Heading"/>
                                                @error('service_banner_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Content</label>
                                                <textarea rows="5" class="form-control form-control-solid service_banner_content @error('service_banner_content') is-invalid @enderror" name="service_banner_content" id="service_banner_content" cols="30" rows="4">{{ $ServiceBanner == null ? "" : $ServiceBanner->banner_content }}</textarea>
                                                @error('service_banner_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
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
                                </form>
                                <hr class="hr">

                                <form class="form" action="{{ url('update_service_Second_section') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="id" value="{{ $Services->id }}">
                                    <input type="hidden" name="serviceSecondSectionID" id="serviceSecondSectionID" value="{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->id }}">
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>Second Section</h3></label>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Heading</label>
                                                <input type="text" value="{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->service_second_section_heading }}" class="form-control form-control-solid service_second_section_heading @error('service_second_section_heading') is-invalid @enderror" id="service_second_section_heading" name="service_second_section_heading" placeholder="Service Heading"/>
                                                @error('service_second_section_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Image</label>
                                                <input type="file" class="form-control form-control-solid sevice_second_Image" name="sevice_second_Image" id="sevice_second_Image" />
                                                @error('sevice_second_Image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="show_image">
                                                    <img src="{{ $ServiceSecondSection == null ? "" : asset($ServiceSecondSection->sevice_second_Image) }}" alt="" class="show_image "  srcset="" width="50%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Short Description</label>
                                                <textarea rows="5" class="form-control form-control-solid service_second_section_short_description @error('service_second_section_short_description') is-invalid @enderror" name="service_second_section_short_description" id="service_second_section_short_description" cols="30" rows="4">{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->service_second_section_short_description }}</textarea>
                                                @error('service_second_section_short_description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Long Description</label>
                                                <textarea rows="5" class="form-control form-control-solid service_second_section_long_description @error('service_second_section_long_description') is-invalid @enderror" name="service_second_section_long_description" id="service_second_section_long_description" cols="30" rows="4">{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->service_second_section_long_description }}</textarea>
                                                @error('service_second_section_long_description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Heading First</label>
                                                <input type="text" value="{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->service_second_section_heading_first }}" class="form-control form-control-solid service_second_section_heading_first @error('service_second_section_heading_first') is-invalid @enderror" id="service_second_section_heading_first" name="service_second_section_heading_first" placeholder="Service Heading"/>
                                                @error('service_second_section_heading_first')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Long Description First</label>
                                                <textarea rows="5" class="form-control form-control-solid service_second_section_long_description_first @error('service_second_section_long_description_first') is-invalid @enderror" name="service_second_section_long_description_first" id="service_second_section_long_description_first" cols="30" rows="4">{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->service_second_section_description_first }}</textarea>
                                                @error('service_second_section_long_description_first')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Image First</label>
                                                <input type="file" class="form-control form-control-solid sevice_second_Image_first" name="sevice_second_Image_first" id="sevice_second_Image_first" />
                                                @error('sevice_second_Image_first')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="first_show_image">
                                                    <img src="{{ $ServiceSecondSection == null ? "" : asset($ServiceSecondSection->sevice_second_Image_first) }}" alt="" class="show_image "  srcset="" width="50%">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Heading Second</label>
                                                <input type="text" value="{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->service_second_section_heading_second }}" class="form-control form-control-solid service_second_section_heading_second @error('service_second_section_heading_second') is-invalid @enderror" id="service_second_section_heading_second" name="service_second_section_heading_second" placeholder="Service Heading"/>
                                                @error('service_second_section_heading_second')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Long Description Second</label>
                                                <textarea rows="5" class="form-control form-control-solid service_second_section_long_description_second @error('service_second_section_long_description_second') is-invalid @enderror" name="service_second_section_long_description_second" id="service_second_section_long_description_second" cols="30" rows="4">{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->service_second_section_description_second }}</textarea>
                                                @error('service_second_section_long_description_second')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Image Second</label>
                                                <input type="file" class="form-control form-control-solid sevice_second_Image_second" name="sevice_second_Image_second" id="sevice_second_Image_second" />
                                                @error('sevice_second_Image_second')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="second_show_image">
                                                    <img src="{{ $ServiceSecondSection == null ? "" : asset($ServiceSecondSection->sevice_second_Image_second) }}" alt="" class="show_image "  srcset="" width="50%">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Heading Third</label>
                                                <input type="text" value="{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->service_second_section_heading_third }}" class="form-control form-control-solid service_second_section_heading_third @error('service_second_section_heading_third') is-invalid @enderror" id="service_second_section_heading_third" name="service_second_section_heading_third" placeholder="Service Heading"/>
                                                @error('service_second_section_heading_third')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Long Description Third</label>
                                                <textarea rows="5" class="form-control form-control-solid service_second_section_long_description_third @error('service_second_section_long_description_third') is-invalid @enderror" name="service_second_section_long_description_third" id="service_second_section_long_description_third" cols="30" rows="4">{{ $ServiceSecondSection == null ? "" : $ServiceSecondSection->service_second_section_description_third }}</textarea>
                                                @error('service_second_section_long_description_third')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service Second Section Image Third</label>
                                                <input type="file" class="form-control form-control-solid sevice_second_Image_third" name="sevice_second_Image_third" id="sevice_second_Image_third" />
                                                @error('sevice_second_Image_third')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="second_show_image_third">
                                                    <img src="{{ $ServiceSecondSection == null ? "" : asset($ServiceSecondSection->sevice_second_Image_third) }}" alt="" class="show_image "  srcset="" width="50%">
                                                </div>
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
                                <hr class="hr">

                                <form class="form" action="{{ url('update_service_work_section') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="service_id" id="service_id" value="{{ $Services->id }}">
                                    <input type="hidden" name="serviceWorkSectionId" id="serviceWorkSectionId" value="{{ $ServiceWork == null ? "" : $ServiceWork->id }}">
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>Work Section</h3></label>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">First Work Heading</label>
                                                <input type="text" value="{{ $ServiceWork == null ? "" : $ServiceWork->first_work_heading }}" class="form-control form-control-solid first_work_heading @error('first_work_heading') is-invalid @enderror" id="first_work_heading" name="first_work_heading" placeholder="Service Heading"/>
                                                @error('first_work_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">First Work Content</label>
                                                <textarea rows="5" class="form-control form-control-solid first_work_content @error('first_work_content') is-invalid @enderror" name="first_work_content" id="first_work_content" cols="30" rows="4">{{ $ServiceWork == null ? "" : $ServiceWork->first_work_content }}</textarea>
                                                @error('first_work_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">First Work Icon</label>
                                                <input type="file" class="form-control form-control-solid first_work_icon" name="first_work_icon" id="first_work_icon" />
                                                @error('first_work_icon')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="show_first_work_icon">
                                                    <img src="{{ $ServiceWork == null ? "" : asset($ServiceWork->first_work_icon) }}" alt="" class=""  srcset="" width="50%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">First Work Image</label>
                                                <input type="file" class="form-control form-control-solid first_work_image" name="first_work_image" id="first_work_image" />
                                                @error('first_work_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="show_first_work_image">
                                                    <img src="{{ $ServiceWork == null ? "" : asset($ServiceWork->first_work_image) }}" alt="" class=""  srcset="" width="90%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Background Color</label>
                                                <input type="color" class="form-control form-control-solid first_background_color" value="{{ $ServiceWork == null ? "" : $ServiceWork->first_background_color }}" placeholder="Enter Background Color Here..." name="first_background_color" id="first_background_color" />
                                                @error('first_background_color')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Second Work Heading</label>
                                                <input type="text" value="{{ $ServiceWork == null ? "" : $ServiceWork->second_work_heading }}" class="form-control form-control-solid second_work_heading @error('second_work_heading') is-invalid @enderror" id="second_work_heading" name="second_work_heading" placeholder="Service Heading"/>
                                                @error('second_work_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Second Work Content</label>
                                                <textarea rows="5" class="form-control form-control-solid second_work_content @error('second_work_content') is-invalid @enderror" name="second_work_content" id="second_work_content" cols="30" rows="4">{{ $ServiceWork == null ? "" : $ServiceWork->second_work_content }}</textarea>
                                                @error('second_work_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Second Work Icon</label>
                                                <input type="file" class="form-control form-control-solid second_work_icon" name="second_work_icon" id="second_work_icon" />
                                                @error('second_work_icon')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="show_second_work_icon">
                                                    <img src="{{ $ServiceWork == null ? "" : asset($ServiceWork->second_work_icon) }}" alt="" class=""  srcset="" width="50%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Second Work Image</label>
                                                <input type="file" class="form-control form-control-solid second_work_image" name="second_work_image" id="second_work_image" />
                                                @error('second_work_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="show_second_work_image">
                                                    <img src="{{ $ServiceWork == null ? "" : asset($ServiceWork->second_work_image) }}" alt="" class=""  srcset="" width="90%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Background Color</label>
                                                <input type="color" class="form-control form-control-solid second_background_color" value="{{ $ServiceWork == null ? "" : $ServiceWork->second_background_color }}" placeholder="Enter Background Color Here..." name="second_background_color" id="second_background_color" />
                                                @error('second_background_color')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Third Work Heading</label>
                                                <input type="text" value="{{ $ServiceWork == null ? "" : $ServiceWork->third_work_heading }}" class="form-control form-control-solid third_work_heading @error('third_work_heading') is-invalid @enderror" id="third_work_heading" name="third_work_heading" placeholder="Service Heading"/>
                                                @error('third_work_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Third Work Content</label>
                                                <textarea rows="5" class="form-control form-control-solid third_work_content @error('third_work_content') is-invalid @enderror" name="third_work_content" id="third_work_content" cols="30" rows="4">{{ $ServiceWork == null ? "" : $ServiceWork->third_work_content }}</textarea>
                                                @error('third_work_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Third Work Icon</label>
                                                <input type="file" class="form-control form-control-solid third_work_icon" name="third_work_icon" id="third_work_icon" />
                                                @error('third_work_icon')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="show_third_work_icon">
                                                    <img src="{{ $ServiceWork == null ? "" : asset($ServiceWork->third_work_icon) }}" alt="" class=""  srcset="" width="50%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Third Work Image</label>
                                                <input type="file" class="form-control form-control-solid third_work_image" name="third_work_image" id="third_work_image" />
                                                @error('third_work_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="show_third_work_image">
                                                    <img src="{{ $ServiceWork == null ? "" : asset($ServiceWork->third_work_image) }}" alt="" class=""  srcset="" width="90%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Background Color</label>
                                                <input type="color" class="form-control form-control-solid third_background_color" value="{{ $ServiceWork == null ? "" : $ServiceWork->third_background_color }}" placeholder="Enter Background Color Here..." name="third_background_color" id="third_background_color" />
                                                @error('third_background_color')
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
                                <hr class="hr">

                                <form class="form" action="{{ url('update_service_Cta') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="service_id" id="service_id" value="{{ $Services->id }}">
                                    <input type="hidden" name="serviceCtaId" id="serviceCtaId" value="{{ $ServiceCTA2 == null ? "" : $ServiceCTA2->id }}">
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>CTA Section</h3></label>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service CTA Heading 1</label>
                                                <input type="text" value="{{ $ServiceCTA2 == null ? "" : $ServiceCTA2->service_cta_heading_1 }}" class="form-control form-control-solid service_cta_heading_1 @error('service_cta_heading_1') is-invalid @enderror" id="service_cta_heading_1" name="service_cta_heading_1" placeholder="Service CTA Heading 1"/>
                                                @error('service_cta_heading_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service CTA Heading 2</label>
                                                <input type="text" value="{{ $ServiceCTA2 == null ? "" : $ServiceCTA2->service_cta_heading_2 }}" class="form-control form-control-solid service_cta_heading_2 @error('service_cta_heading_2') is-invalid @enderror" name="service_cta_heading_2" id="service_cta_heading_2" placeholder="Service CTA Heading 2"/>
                                                @error('service_cta_heading_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service CTA Percentage 1</label>
                                                <input type="text" value="{{ $ServiceCTA2 == null ? "" : $ServiceCTA2->service_cta_percentage_1 }}" class="form-control form-control-solid service_cta_percentage_1 @error('service_cta_percentage_1') is-invalid @enderror" id="service_cta_percentage_1" name="service_cta_percentage_1" placeholder="Service CTA Percentage 1"/>
                                                @error('service_cta_percentage_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service CTA Percentage 2</label>
                                                <input type="text" value="{{ $ServiceCTA2 == null ? "" : $ServiceCTA2->service_cta_percentage_2 }}" class="form-control form-control-solid service_cta_percentage_2 @error('service_cta_percentage_2') is-invalid @enderror" name="service_cta_percentage_2" id="service_cta_percentage_2" placeholder="Service CTA Percentage 2"/>
                                                @error('service_cta_percentage_2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service CTA Content 1</label>
                                                <input type="text" value="{{ $ServiceCTA2 == null ? "" : $ServiceCTA2->service_cta_content_1 }}" class="form-control form-control-solid service_cta_content_1 @error('service_cta_content_1') is-invalid @enderror" id="service_cta_content_1" name="service_cta_content_1" placeholder="Service CTA Content 1"/>
                                                @error('service_cta_content_1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Service CTA Content 2</label>
                                                <input type="text" value="{{ $ServiceCTA2 == null ? "" : $ServiceCTA2->service_cta_content_2 }}" class="form-control form-control-solid service_cta_content_2 @error('service_cta_content_2') is-invalid @enderror" name="service_cta_content_2" id="service_cta_content_2" placeholder="Service CTA Content 2"/>
                                                @error('service_cta_content_2')
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
                                <hr class="hr">

                                <form class="form" action="{{ url('update_work_process') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="service_id" id="service_id" value="{{ $Services->id }}">
                                    <input type="hidden" name="workProcessId" id="workProcessId" value="{{ $ServiceProcess == null ? "" : $ServiceProcess->id }}">
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>Process Section</h3></label>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Process Heading 1</label>
                                                <input type="text" value="{{ $ServiceProcess == null ? "" : $ServiceProcess->process_heading_one }}" class="form-control form-control-solid process_heading_one @error('process_heading_one') is-invalid @enderror" id="process_heading_one" name="process_heading_one" placeholder="Process Heading 1"/>
                                                @error('process_heading_one')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Process Content 1</label>
                                                <textarea rows="5" class="form-control form-control-solid process_content_one @error('process_content_one') is-invalid @enderror" name="process_content_one" id="process_content_one" cols="30" rows="4">{{ $ServiceProcess == null ? "" : $ServiceProcess->process_content_one }}</textarea>
                                                @error('process_content_one')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Process Heading 2</label>
                                                <input type="text" value="{{ $ServiceProcess == null ? "" : $ServiceProcess->process_heading_two }}" class="form-control form-control-solid process_heading_two @error('process_heading_two') is-invalid @enderror" id="process_heading_two" name="process_heading_two" placeholder="Process Heading 2"/>
                                                @error('process_heading_two')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Process Content 2</label>
                                                <textarea rows="5" class="form-control form-control-solid process_content_two @error('process_content_two') is-invalid @enderror" name="process_content_two" id="process_content_two" cols="30" rows="4">{{ $ServiceProcess == null ? "" : $ServiceProcess->process_content_two }}</textarea>
                                                @error('process_content_two')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Process Heading 3</label>
                                                <input type="text" value="{{ $ServiceProcess == null ? "" : $ServiceProcess->process_heading_three }}" class="form-control form-control-solid process_heading_three @error('process_heading_three') is-invalid @enderror" id="process_heading_three" name="process_heading_three" placeholder="Process Heading 3"/>
                                                @error('process_heading_three')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Process Content 3</label>
                                                <textarea rows="5" class="form-control form-control-solid process_content_three @error('process_content_three') is-invalid @enderror" name="process_content_three" id="process_content_three" cols="30" rows="4">{{ $ServiceProcess == null ? "" : $ServiceProcess->process_content_three }}</textarea>
                                                @error('process_content_three')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Process Heading 4</label>
                                                <input type="text" value="{{ $ServiceProcess == null ? "" : $ServiceProcess->process_heading_four }}" class="form-control form-control-solid process_heading_four @error('process_heading_four') is-invalid @enderror" id="process_heading_four" name="process_heading_four" placeholder="Process Heading 4"/>
                                                @error('process_heading_four')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Process Content 4</label>
                                                <textarea rows="5" class="form-control form-control-solid process_content_four @error('process_content_four') is-invalid @enderror" name="process_content_four" id="process_content_four" cols="30" rows="4">{{ $ServiceProcess == null ? "" : $ServiceProcess->process_content_four }}</textarea>
                                                @error('process_content_four')
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
                                <hr class="hr">

                                <form class="form" action="{{ url('update_last_section') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="service_id" id="service_id" value="{{ $Services->id }}">
                                    <input type="hidden" name="lastSectionId" id="lastSectionId" value="{{ $ServiceLastSection == null ? "" : $ServiceLastSection->id }}">
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>Last Section</h3></label>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Heading</label>
                                                <input type="text" value="{{ $ServiceLastSection == null ? "" : $ServiceLastSection->heading }}" class="form-control form-control-solid last_section_heading @error('last_section_heading') is-invalid @enderror" id="last_section_heading" name="last_section_heading" placeholder="Service Heading"/>
                                                @error('last_section_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Content</label>
                                                <textarea rows="5" class="form-control form-control-solid last_section_content @error('last_section_content') is-invalid @enderror" name="last_section_content" id="last_section_content" cols="30" rows="4">{{ $ServiceLastSection == null ? "" : $ServiceLastSection->content }}</textarea>
                                                @error('last_section_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Second Heading</label>
                                                <input type="text" value="{{ $ServiceLastSection == null ? "" : $ServiceLastSection->heading_2 }}" class="form-control form-control-solid last_heading_first @error('last_heading_first') is-invalid @enderror" id="last_heading_first" name="last_heading_first" placeholder="Service Heading"/>
                                                @error('last_heading_first')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">First Heading</label>
                                                <input type="text" value="{{ $ServiceLastSection == null ? "" : $ServiceLastSection->heading_3 }}" class="form-control form-control-solid last_heading_second @error('last_heading_second') is-invalid @enderror" id="last_heading_second" name="last_heading_second" placeholder="Service Heading"/>
                                                @error('last_heading_second')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Image</label>
                                                <input type="file" value="" class="form-control form-control-solid last_image_first @error('last_image_first') is-invalid @enderror" id="last_image_first" name="last_image_first" placeholder="Service Heading"/>
                                                @error('last_image_first')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="col-md-4 p-5" id="show_last_image_first">
                                                    <img src="{{ $ServiceLastSection == null ? "" : asset($ServiceLastSection->image_1) }}" alt="" class=""  srcset="" width="90%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Image Content</label>
                                                <input type="text" value="{{ $ServiceLastSection == null ? "" : $ServiceLastSection->image_content }}" class="form-control form-control-solid image_content @error('image_content') is-invalid @enderror" id="image_content" name="image_content" placeholder="Image Content"/>
                                                @error('image_content')
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
                                <hr class="hr">

                                <form class="form" action="{{ url('update_cta') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="service_id" id="service_id" value="{{ $Services->id }}">
                                    <input type="hidden" name="CtaSecionID" id="CtaSecionID" value="{{ $ServiceCTA == null ? "" : $ServiceCTA->id }}">
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>CTA</h3></label>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Heading</label>
                                                <input type="text" value="{{ $ServiceCTA == null ? "" : $ServiceCTA->heading }}" class="form-control form-control-solid cta_heading @error('cta_heading') is-invalid @enderror" id="cta_heading" name="cta_heading" placeholder="Service Heading"/>
                                                @error('cta_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Content</label>
                                                <textarea rows="5" class="form-control form-control-solid cta_content @error('cta_content') is-invalid @enderror" name="cta_content" id="cta_content" cols="30">{{ $ServiceCTA == null ? "" : $ServiceCTA->content }}</textarea>
                                                @error('cta_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
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

var input1 = document.querySelector("#kt_tagify_1");

new Tagify(input1);

$('#banner_image').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_banner_image').html('<img src="' + e.target.result + '" width="80%">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_banner_image').empty();
    }
});

$('#sevice_second_Image').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_image').html('<img src="' + e.target.result + '" width="80%">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_image').empty();
    }
});

$('#sevice_second_Image_first').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#first_show_image').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#first_show_image').empty();
    }
});

$('#sevice_second_Image_second').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#second_show_image').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#second_show_image').empty();
    }
});

$('#sevice_second_Image_third').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#second_show_image_third').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#second_show_image_third').empty();
    }
});

$('#first_work_icon').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_first_work_icon').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_first_work_icon').empty();
    }
});

$('#first_work_image').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_first_work_image').html('<img src="' + e.target.result + '" width="50px">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_first_work_image').empty();
    }
});

$('#second_work_icon').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_second_work_icon').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_second_work_icon').empty();
    }
});

$('#second_work_image').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_second_work_image').html('<img src="' + e.target.result + '" width="50px">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_second_work_image').empty();
    }
});

$('#third_work_icon').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_third_work_icon').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_third_work_icon').empty();
    }
});

$('#third_work_image').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_third_work_image').html('<img src="' + e.target.result + '" width="50px">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_third_work_image').empty();
    }
});

$('#last_icon_first').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_last_section_image_one').html('<img src="' + e.target.result + '" width="50px">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_last_section_image_one').empty();
    }
});

$('#last_icon_second').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_last_section_image_two').html('<img src="' + e.target.result + '" width="50px">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_last_section_image_two').empty();
    }
});










$('#last_image_first').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_last_image_first').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_last_image_first').empty();
    }
});

$('#last_image_second').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_last_image_second').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_last_image_second').empty();
    }
});

$('#datatable').dataTable();

</script>

@endpush
@endsection