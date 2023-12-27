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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Packages</h1>
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
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('edit_service/'.$id) }}" class="text-muted text-hover-primary">Edit Service</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Packages</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">All Packages</span>
                        </h3>
                    </div>
                    <div class="card-px  my-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column mb-8 fv-row pt-9 flex-row-reverse">
                                    <a href="{{ url("edit_service/". $id) }}" class="btn btn-info btn-sm">Back</a>&nbsp;&nbsp;
                                    <a href="{{ url("create_service") }}" class="btn btn-success btn-sm"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create Packages</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 15%"><b>Package Type</b></th>
                                        <th class="text-dark" style="width: 15%"><b>Package Name</b></th>
                                        <th class="text-dark" style="width: 30%"><b>Discription</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Package List</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Packages as $item)
                                    <tr>
                                        <td>{{ $item->package_type }}</td>
                                        <td>{{ $item->package_name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{!! $item->package_list !!}</td>
                                        <td>
                                            <a href="javascript:void()"
                                                data-id="{{ $item->id }}" 
                                                data-service_id="{{ $item->service_id }}" 
                                                data-package_type="{{ $item->package_type }}" 
                                                data-package_name="{{ $item->package_name }}" 
                                                data-description="{{ $item->description }}" 
                                                data-package_list="{{ $item->package_list }}" 
                                                class="btn btn-sm btn-info btn-active-primary editPackages" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target_edit" id="editPortfolio">Edit</a>
                                            <a href="{{ url('delete_package/'. $item->id) }}" data-id="{{ $item->id }}" class="btn btn-sm btn-danger btn-active-primary deletePortfolio">Delete</a>
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
                        <h1 class="mb-3">Add Packages</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <div class="row">
                            <div class="col-md-9">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required text-danger">If you want a personalized package, please check it.</span>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" id="customize_packages" name="customize_packages">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="service_id" name="service_id" id="service_id" value="{{ $id }}">
                    <div class="hide_show_div">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Package Type</span>
                            </label>
                            <select class="form-select form-control-solid package_type" aria-label="Select example" name="package_type" id="package_type">
                                <option selected disabled>Open this select Package Type</option>
                                <option value="Basic" class="{{ $IfSelectedOtherPackages == "Others" ? "d-none" : "" }}">Basic</option>
                                <option value="Intermediate" class="{{ $IfSelectedOtherPackages == "Others" ? "d-none" : "" }}">Intermediate</option>
                                <option value="Advance" class="{{ $IfSelectedOtherPackages == "Others" ? "d-none" : "" }}">Advance</option>
                                <option value="Others" class="{{ $IfSelectedOtherPackages == "Intermediate" || $IfSelectedOtherPackages == "Basic" || $IfSelectedOtherPackages == "Advance" ? "d-none" : "" }}">Others</option>
    
                            </select>
                            <span class="error-message-package_type">
                                <small class="text-danger error-message package_type-error" id="package_type-error"></small>
                            </span>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Package Name</span>
                            </label>
                            <input type="text" class="form-control form-control-solid package_name" placeholder="Enter Name Here..." name="name" id="name" />
                            <span class="error-message-name">
                                <small class="text-danger error-message name-error" id="name-error"></small>
                            </span>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Description</span>
                            </label>
                            <textarea class="form-control form-control-solid description" placeholder="Enter Description Here..." name="description" rows="4" id="description"></textarea>
                            <span class="error-message-description">
                                <small class="text-danger error-message description-error" id="description-error"></small>
                            </span>
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Package List</span>
                        </label>
                        <textarea id="package_list" name="package_list" class="tox-target package_list"></textarea>
                        <span class="error-message-package_list">
                            <small class="text-danger error-message package_list-error" id="package_list-error"></small>
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
                        <h1 class="mb-3">Add Packages</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <div class="row">
                            <div class="col-md-9">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required text-danger">If you want a personalized package, please check it.</span>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" id="edit_customize_packages" name="edit_customize_packages">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="service_id" name="service_id" id="service_id" value="{{ $id }}">
                    <input type="hidden" class="package_id" name="package_id" id="package_id">
                    <div class="hide_show_div">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Package Type</span>
                            </label>
                            <select class="form-select form-control-solid edit_package_type" aria-label="Select example" name="edit_package_type" id="edit_package_type">
                                <option selected disabled>Open this select Package Type</option>
                                <option value="Basic" class="{{ $IfSelectedOtherPackages == "Others" ? "d-none" : "" }}">Basic</option>
                                <option value="Intermediate" class="{{ $IfSelectedOtherPackages == "Others" ? "d-none" : "" }}">Intermediate</option>
                                <option value="Advance" class="{{ $IfSelectedOtherPackages == "Others" ? "d-none" : "" }}">Advance</option>
                                <option value="Others" class="{{ $IfSelectedOtherPackages == "Intermediate" || $IfSelectedOtherPackages == "Basic" || $IfSelectedOtherPackages == "Advance" ? "d-none" : "" }}">Others</option>
                            </select>
                            <span class="error-message-edit_package_type">
                                <small class="text-danger error-message edit_package_type-error" id="edit_package_type-error"></small>
                            </span>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Package Name</span>
                            </label>
                            <input type="text" class="form-control form-control-solid edit_package_name" placeholder="Enter Name Here..." name="name" id="name" />
                            <span class="error-message-name">
                                <small class="text-danger error-message edit_name-error" id="edit_name-error"></small>
                            </span>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Description</span>
                            </label>
                            <textarea class="form-control form-control-solid edit_description" placeholder="Enter Description Here..." name="edit_description" rows="4" id="edit_description"></textarea>
                            <span class="error-message-edit-description">
                                <small class="text-danger error-message edit_description-error" id="edit_description-error"></small>
                            </span>
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Package List</span>
                        </label>
                        <textarea id="edit_package_list" name="edit_package_list" class="tox-target package_list"></textarea>
                        <span class="error-message-package_list">
                            <small class="text-danger error-message edit_package_list-error" id="edit_package_list-error"></small>
                        </span>
                    </div>
                    <div class="text-center">
                        <button type="button" id="update" class="btn btn-primary">
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
    tinymce.init({
        selector: "#package_list",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });

    tinymce.init({
        selector: "#edit_package_list",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });

    $("#customize_packages").click(function(){
        var customize_packages = $("#customize_packages").is(":checked");

        if(customize_packages == true)
        {
            $('.package_type').prop('required',false);
            $('.package_name').prop('required',false);
            $('.description').prop('required',false);
            
            $('.package_type').val("");
            $('.package_name').val("");
            $('.description').val("");
            $('.hide_show_div').hide();
        }
        if(customize_packages == false)
        {
            $('.package_type').prop('required',true);
            $('.package_name').prop('required',true);
            $('.description').prop('required',true);
            $(".hide_show_div").show();
        }
    });

    $("#edit_customize_packages").click(function(){
        var edit_customize_packages = $("#edit_customize_packages").is(":checked");

        if(edit_customize_packages == true)
        {
            $('.package_type').prop('required',false);
            $('.package_name').prop('required',false);
            $('.description').prop('required',false);
            
            $('.package_type').val("");
            $('.package_name').val("");
            $('.description').val("");
            $('.hide_show_div').hide();
        }
        if(edit_customize_packages == false)
        {
            $('.package_type').prop('required',true);
            $('.package_name').prop('required',true);
            $('.description').prop('required',true);
            $(".hide_show_div").show();
        }
    });

    $(document).on("click", "#submit", function()
    {
        var customize_packages = $("#customize_packages").is(":checked");
        
        if(customize_packages == true)
        {
            var service_id = $('.service_id').val();
            var package_list = tinymce.get('package_list').getContent();

            if(package_list == "")
            {
                $(".package_list-error").text("package list is required!");
            }
            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('customField', "customField");
            formData.append('service_id', service_id);
            formData.append('package_list', package_list);

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
                
            $.ajax({
                url: "{{ url('create_package') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result)
                {
                    if(result == "Package Created successfully")
                    {
                        toastr.success(result);
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
                    else
                    {
                        toastr.error(result);
                    }
                }
            });
        }
        else
        {
            var service_id = $('.service_id').val();
            var package_type = $('.package_type').val();
            var package_name = $('.package_name').val();
            var description = $('.description').val();
            var package_list = tinymce.get('package_list').getContent();

            if(package_type == null)
            {
                $(".package_type-error").text("package type is required!");
            }
            if(package_name == "")
            {
                $(".name-error").text("package name is required!");
            }
            if(description == "")
            {
                $(".description-error").text("package description is required!");
            }
            if(package_list == "")
            {
                $(".package_list-error").text("package list is required!");
            }
            if(package_type != null && package_name != "" && description != "" && package_list != "")
            {
                let formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('service_id', service_id);
                formData.append('package_type', package_type);
                formData.append('package_name', package_name);
                formData.append('description', description);
                formData.append('package_list', package_list);

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                    
                $.ajax({
                    url: "{{ url('create_package') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result)
                    {
                        if(result == "Package Created successfully")
                        {
                            toastr.success(result);
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                        else
                        {
                            toastr.error(result);
                        }
                    }
                });
            }
        }
    })

    $(document).on("click", ".editPackages", function()
    {
        var package_id = $(this).data('id');
        var package_type = $(this).data('package_type');
        var package_name = $(this).data('package_name');
        var description = $(this).data('description');
        var package_list = $(this).data('package_list');

        $('.package_id').val(package_id);
        $('.edit_package_type').val(package_type);
        $('.edit_package_name').val(package_name);
        $('.edit_description').val(description);
        tinymce.get('edit_package_list').setContent(package_list);
    })

    $(document).on("click", "#update", function()
    {
        var customize_packages = $("#edit_customize_packages").is(":checked");
        
        if(customize_packages == true)
        {
            var service_id = $('.service_id').val();
            var package_id = $('.package_id').val();
            var edit_package_list = tinymce.get('edit_package_list').getContent();

            if(edit_package_list == "")
            {
                $(".edit_package_list-error").text("package list is required!");
            }

            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('customField', "customField");
            formData.append('service_id', service_id);
            formData.append('package_id', package_id);
            formData.append('package_list', edit_package_list);

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('update_package') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result)
                {
                    if(result == "Package Updated successfully")
                    {
                        toastr.success(result);
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
                    else
                    {
                        toastr.error(result);
                    }
                }
            });
        }
        else
        {
            var service_id = $('.service_id').val();
            var package_id = $('.package_id').val();
            var package_type = $('.edit_package_type').val();
            var package_name = $('.edit_package_name').val();
            var description = $('.edit_description').val();
            var edit_package_list = tinymce.get('edit_package_list').getContent();

            if(package_type == null)
            {
                $(".edit_package_type-error").text("package type is required!");
            }
            if(package_name == "")
            {
                $(".edit_name-error").text("package name is required!");
            }
            if(description == "")
            {
                $(".edit_description-error").text("package description is required!");
            }
            if(edit_package_list == "")
            {
                $(".edit_package_list-error").text("package list is required!");
            }
            if(package_type != null && package_name != "" && description != "" && edit_package_list != "")
            {
                let formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('service_id', service_id);
                formData.append('package_id', package_id);
                formData.append('package_type', package_type);
                formData.append('package_name', package_name);
                formData.append('description', description);
                formData.append('package_list', edit_package_list);

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                    
                $.ajax({
                    url: "{{ url('update_package') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result)
                    {
                        if(result == "Package Updated successfully")
                        {
                            toastr.success(result);
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                        else
                        {
                            toastr.error(result);
                        }
                    }
                });
            }
        }
    })

    $('#datatable').dataTable();

</script>

@endpush
@endsection