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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Portfolio</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Portfolio</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">All Portfolio</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a portfolio">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            New Portfolio</a>
                        </div>
                    </div>
                    <div class="card-px py-10 my-10">
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 10%"><b>Categories</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Heading</b></th>
                                        <th class="text-dark" style="width: 10%"><b>Image 1</b></th>
                                        <th class="text-dark" style="width: 10%"><b>Image 2</b></th>
                                        <th class="text-dark" style="width: 10%"><b>Background Color</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $item)
                                    <tr>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->heading }}</td>
                                        <td>
                                            <img src="{{ asset($item->image1) }}" alt="" srcset="">
                                        </td>
                                        <td>
                                            <img src="{{ asset($item->image2) }}" width="70%" alt="" srcset="">
                                        </td>
                                        <td>{{ $item->backgroundcolor }}</td>
                                        <td>
                                            <a href="javascript:void()" data-id="{{ $item->id }}" data-category="{{ $item->category }}" data-heading="{{ $item->heading }}" data-content="{{ $item->content }}" data-backgroundcolor="{{ $item->backgroundcolor }}" class="btn btn-sm btn-info btn-active-primary editPortfolio" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target_edit" id="editPortfolio">Edit</a>
                                            <a href="javascript:void()" data-id="{{ $item->id }}" class="btn btn-sm btn-danger btn-active-primary deletePortfolio">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $alldata->links() }}
                        </div>
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_target_form" class="form">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Add Portfolio</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Category</span>
                        </label>
                        <select class="form-select form-control-solid category" aria-label="Select example" name="category" id="category">
                            <option selected disabled>Open this select Category</option>
                            <option value="mobile-app">Mobile App</option>
                            <option value="branding">Branding</option>
                            <option value="logo-design">Logo Design</option>
                            <option value="web-app">Web App</option>
                            <option value="Website-design">Website Design</option>
                        </select>
                        <span class="error-message-category">
                            <small class="text-danger error-message category-error" id="category-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Heading</span>
                        </label>
                        <input type="text" class="form-control form-control-solid heading" placeholder="Enter Heading Here..." name="heading" id="heading" />
                        <span class="error-message-heading">
                            <small class="text-danger error-message heading-error" id="heading-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Content</span>
                        </label>
                        <textarea class="form-control form-control-solid portfolioContent" placeholder="Enter Content Here..." name="content" rows="4" id="content"></textarea>
                        <span class="error-message-content">
                            <small class="text-danger error-message content-error" id="content-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Icon</span>
                        </label>
                        <input type="file" class="form-control form-control-solid image1" placeholder="Enter Image 1 Here..." name="image1" id="image1" />
                        <span class="error-message-image1">
                            <small class="text-danger error-message image1-error" id="image1-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Main Image</span>
                        </label>
                        <input type="file" class="form-control form-control-solid image2" placeholder="Enter Image 2 Here..." name="image2" id="image2" accept=".jpg, .jpeg, .png" />
                        <span class="error-message-image2">
                            <small class="text-danger error-message image2-error" id="image2-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">BackGround Color</span>
                        </label>
                        <input type="color" class="form-control form-control-solid background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" />
                        <span class="error-message-background-color">
                            <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                        </span>
                    </div>
                    
                    <div class="text-center">
                        <button type="button" id="submit" class="btn btn-primary">
                            <span class="indicator-label">Create</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kt_modal_new_target_edit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="kt_modal_new_target_form" class="form">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit Portfolio</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Category</span>
                        </label>
                        <input type="hidden" name="portfolioId" class="portfolioId" id="portfolioId">
                        <select class="form-select form-control-solid edit_category" aria-label="Select example" name="category" id="category">
                            <option selected disabled>Open this select Category</option>
                            <option value="mobile-app">Mobile App</option>
                            <option value="branding">Branding</option>
                            <option value="logo-design">Logo Design</option>
                            <option value="web-app">Web App</option>
                            <option value="Website-design">Website Design</option>
                        </select>
                        <span class="error-message-category">
                            <small class="text-danger error-message category-error" id="category-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Heading</span>
                        </label>
                        <input type="text" class="form-control form-control-solid edit_heading" placeholder="Enter Heading Here..." name="heading" id="heading" />
                        <span class="error-message-heading">
                            <small class="text-danger error-message heading-error" id="heading-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Content</span>
                        </label>
                        <textarea class="form-control form-control-solid edit_portfolioContent" placeholder="Enter Content Here..." name="content" rows="4" id="content"></textarea>
                        <span class="error-message-content">
                            <small class="text-danger error-message content-error" id="content-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Icon</span>
                        </label>
                        <input type="file" class="form-control form-control-solid edit_image1" placeholder="Enter Image 1 Here..." name="image1" id="image1" />
                        <span class="error-message-image1">
                            <small class="text-danger error-message image1-error" id="image1-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Main Image</span>
                        </label>
                        <input type="file" class="form-control form-control-solid edit_image2" placeholder="Enter Image 2 Here..." name="image2" id="image2" accept=".jpg, .jpeg, .png" />
                        <span class="error-message-image2">
                            <small class="text-danger error-message image2-error" id="image2-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">BackGround Color</span>
                        </label>
                        <input type="color" class="form-control form-control-solid edit_background_color" placeholder="Enter Background Color Here..." name="background_color" id="background_color" />
                        <span class="error-message-background-color">
                            <small class="text-danger error-message background-color-error" id="background-color-error"></small>
                        </span>
                    </div>
                    
                    <div class="text-center">
                        <button type="button" id="UpdateProtfolio" class="btn btn-primary UpdateProtfolio">
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

@push('scripts')

@if(session('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endif

<script>
    $(document).ready(function ()
    {
        $(document).on('click', '#submit', function()
        {
            var category = $(".category").val();

            var heading = $(".heading").val();

            var content = $(".portfolioContent").val();

            var image1 = $(".image1").val();

            var image2 = $(".image2").val();

            var background_color = $(".background_color").val();

            if (category === null) 
            {
                $(".category-error").text("Please Select Category here...");
            }

            if (heading === "") 
            {
                $(".heading-error").text("Please Enter Heading here...");
            }

            if (content === "") 
            {
                $(".content-error").text("Please Enter Content here...");
            }

            if (image1 === "") 
            {
                $(".image1-error").text("Please Select First Image here...");
            }

            if (image2 === "") 
            {
                $(".image2-error").text("Please Second Image here...");
            }

            if (background_color === "") 
            {
                $(".background-color-error").text("Please Enter BackGround Color here...");
            }

            if(category !== null && heading !== "" && content !== "" && image1 !== "" && image2 !== "" && background_color !== "")  
            {

                let formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('category', category);
                formData.append('heading', heading);
                formData.append('content', content);
                formData.append('background_color', background_color);

                formData.append('image1', $('.image1')[0].files[0]);
                formData.append('image2', $('.image2')[0].files[0]);

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                    
                $.ajax({
                    url: "{{ url('create_protfolio') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result)
                    {
                        if(result.success == "your portfolio created successfully")
                        {
                            toastr.success(result.success);
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                        else
                        {
                            toastr.error(result.success);
                        }
                    }
                });
            }
        })

        $(document).on('click', '.editPortfolio', function()
        {
            var id = $(this).data("id");
            var category = $(this).data("category");
            var heading = $(this).data("heading");
            var content = $(this).data("content");
            var backgroundcolor = $(this).data("backgroundcolor");

            $(".portfolioId").val(id);
            $(".edit_category").val(category);
            $(".edit_heading").val(heading);
            $(".edit_portfolioContent").val(content);
            $(".edit_background_color").val(backgroundcolor);
        })

        $(document).on('click', '.UpdateProtfolio', function()
        {
            var id = $(".portfolioId").val();

            var category = $(".edit_category").val();

            var heading = $(".edit_heading").val();

            var content = $(".edit_portfolioContent").val();

            var background_color = $(".edit_background_color").val();

            if (category === null) 
            {
                $(".category-error").text("Please Select Category here...");
            }

            if (heading === "") 
            {
                $(".heading-error").text("Please Enter Heading here...");
            }

            if (content === "") 
            {
                $(".content-error").text("Please Enter Content here...");
            }

            if (background_color === "") 
            {
                $(".background-color-error").text("Please Enter BackGround Color here...");
            }

            if(category !== null && heading !== "" && content !== "" && background_color !== "")  
            {
                let formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('id', id);
                formData.append('category', category);
                formData.append('heading', heading);
                formData.append('content', content);
                formData.append('background_color', background_color);

                formData.append('image1', $('.edit_image1')[0].files[0]);
                formData.append('image2', $('.edit_image2')[0].files[0]);

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                    
                $.ajax({
                    url: "{{ url('update_protfolio') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result)
                    {
                        if(result.success == "your portfolio updated successfully")
                        {
                            toastr.success(result.success);
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    }
                });
            }
        })
        
        $(document).on('click','.deletePortfolio', function()
        {
            var id = $(this).data("id");

            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('id', id);
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
                
            $.ajax({
                url: "{{ url('delete_protfolio') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result)
                {
                    if(result.success == "your portfolio deleted successfully")
                    {
                        toastr.success(result.success);
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        })
    })
</script>

@endpush
@endsection