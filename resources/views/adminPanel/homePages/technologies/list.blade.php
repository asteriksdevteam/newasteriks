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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Technologies</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Technologies</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">All Technologies</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a portfolio">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                New Technologies
                            </a>
                        </div>
                    </div>
                    <div class="card-px py-10 my-10">
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 10%"><b>#no</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Name</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Categories</b></th>
                                        <th class="text-dark" style="width: 30%"><b>Images</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <img src="{{ asset($item->images) }}" style="width:20px" alt="" srcset="">
                                        </td>
                                        <td>
                                            <a href="javascript:void()" data-id="{{ $item->id }}" class="btn btn-sm btn-danger btn-active-primary deleteTechnologies">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                        <h1 class="mb-3">Add Technologies</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Category</span>
                        </label>
                        <select class="form-select form-control-solid category" aria-label="Select example" name="category" id="category">
                            <option selected disabled>Open this and select Category</option>
                            <option value="frontend">Frontend</option>
                            <option value="database">Database</option>
                            <option value="backend">Backend</option>
                            <option value="Mobile">Mobile</option>
                            <option value="cms">CMS</option>
                            <option value="Infra-&-devops">Infra & devops</option>
                        </select>
                        <span class="error-message-category">
                            <small class="text-danger error-message category-error" id="category-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Name</span>
                        </label>
                        <input type="text" class="form-control form-control-solid name" placeholder="Enter Name Here..." name="name" id="name" />
                        <span class="error-message-name">
                            <small class="text-danger error-message name-error" id="name-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Icon</span>
                        </label>
                        <input type="file" class="form-control form-control-solid image" placeholder="Enter Image Here..." name="image" id="image" accept="" />
                        <span class="error-message-image">
                            <small class="text-danger error-message image-error" id="image-error"></small>
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

            var name = $(".name").val();

            var image = $(".image").val();

            if (category === null) 
            {
                $(".category-error").text("Please Select Category here...");
            }

            if (image === "") 
            {
                $(".image-error").text("Please Select Image here...");
            }

            if (name === "") 
            {
                $(".name-error").text("Please Enter Name here...");
            }

            if(category !== null && image !== "")  
            {

                let formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('category', category);
                formData.append('name', name);
                formData.append('image', $('.image')[0].files[0]);

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                    
                $.ajax({
                    url: "{{ url('create_technologies') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result)
                    {
                        toastr.success(result.success);
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
                });
            }
        })

        $(document).on('click','.deleteTechnologies', function()
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
                url: "{{ url('delete_technologies') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result)
                {
                    if(result.success == "your technologies deleted successfully")
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