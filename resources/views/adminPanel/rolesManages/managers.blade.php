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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Asteriks Website Managers</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Asteriks Website Managers</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">Asteriks Website Managers</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a manager">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            New Manager</a>
                        </div>
                    </div>
                    <div class="card-px py-10 my-10">
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 20%"><b>Name</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Email</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Roles</b></th>
                                        <th class="text-dark" style="width: 30%"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($User as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->roles->first()->name }}</td>
                                        <td>
                                            <a href="javascript:void();" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-email="{{ $item->email }}" data-roles="{{ $item->roles->first()->id }}" data-bs-toggle="modal" data-bs-target="#edit_kt_modal_new_target" class="btn btn-sm btn-info btn-active-primary editManagers" id="editPortfolio">Edit</a>
                                            <a href="{{ url("delete_managers/".$item->id) }}" class="btn btn-sm btn-danger btn-active-primary deleteManagers">Delete</a>
                                            <a href="javascript:void();" data-id="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#edit_password_kt_modal_new_target" class="text-dark btn btn-sm btn-warning btn-active-warning updatePasswordManagers">Update Password</a>
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
                        <h1 class="mb-3">Add Managers</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Roles</span>
                        </label>
                        <select class="form-select form-select-solid roles" aria-label="Select example" name="roles" id="roles">
                            <option selected disabled>Open this select roles</option>
                            @foreach($Role as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <span class="error-message-roles">
                            <small class="text-danger error-message roles-error" id="roles-error"></small>
                        </span>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Name</span>
                        </label>
                        <input type="text" class="form-control form-control-solid name" name="name" id="name" placeholder="Enter Name Here..."/>
                        <span class="error-message-name">
                            <small class="text-danger error-message name-error" id="name-error"></small>
                        </span>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Email</span>
                        </label>
                        <input type="email" class="form-control form-control-solid email" name="email" id="email" placeholder="Enter Email Here..."/>
                        <span class="error-message-email">
                            <small class="text-danger error-message email-error" id="email-error"></small>
                        </span>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Password</span>
                        </label>
                        <input type="password" class="form-control form-control-solid password" name="password" id="password" placeholder="Enter Password Here..."/>
                        <span class="error-message-password">
                            <small class="text-danger error-message password-error" id="password-error"></small>
                        </span>
                        <br>
                        <div class="input-group-text">
                            <input type="checkbox" id="togglePassword">&nbsp;&nbsp; Show Password
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Confirm Password</span>
                        </label>
                        <input type="password" class="form-control form-control-solid confirm_password" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password Here..."/>
                        <span class="error-message-confirm_password">
                            <small class="text-danger error-message confirm_password-error" id="confirm_password-error"></small>
                        </span>
                        <br>
                        <div class="input-group-text">
                            <input type="checkbox" id="toggleConfirmPassword">&nbsp;&nbsp; Show Confirm Password
                        </div>
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

<div class="modal fade" id="edit_kt_modal_new_target" tabindex="-1" aria-hidden="true">
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
                        <h1 class="mb-3">Update Managers Details</h1>
                    </div>
                    <input type="hidden" name="id" id="id" class="id">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Roles</span>
                        </label>
                        <select class="form-select form-select-solid edit_roles" aria-label="Select example" name="edit_roles" id="edit_roles">
                            <option selected disabled>Open this select roles</option>
                            @foreach($Role as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <span class="error-message-roles">
                            <small class="text-danger error-message edit-roles-error" id="edit-roles-error"></small>
                        </span>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Name</span>
                        </label>
                        <input type="text" class="form-control form-control-solid edit_name" name="edit_name" id="edit_name" placeholder="Enter Name Here..."/>
                        <span class="error-message-name">
                            <small class="text-danger error-message edit-name-error" id="edit-name-error"></small>
                        </span>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Email</span>
                        </label>
                        <input type="email" disabled class="form-control form-control-solid edit_email" name="edit_email" id="edit_email" placeholder="Enter Email Here..."/>
                        <span class="error-message-email">
                            <small class="text-danger error-message edit-email-error" id="edit-email-error"></small>
                        </span>
                    </div>
                    
                    <div class="text-center">
                        <button type="button" id="edit" class="btn btn-primary">
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

<div class="modal fade" id="edit_password_kt_modal_new_target" tabindex="-1" aria-hidden="true">
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
                        <h1 class="mb-3">Update Manager Password</h1>
                    </div>
                    <input type="hidden" name="updatePasswordId" id="id" class="id">

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Password</span>
                        </label>
                        <input type="password" class="form-control form-control-solid password" name="UpdatePassword" id="edit_password" placeholder="Enter Password Here..."/>
                        <span class="error-message-password">
                            <small class="text-danger error-message update-password-error" id="password-error"></small>
                        </span>
                        <br>
                        <div class="input-group-text">
                            <input type="checkbox" id="toggleUpdatePassword">&nbsp;&nbsp; Show Password
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Confirm Password</span>
                        </label>
                        <input type="password" class="form-control form-control-solid confirm_password" name="UpdateConfirmPassword" id="edit_confirm_password" placeholder="Enter Confirm Password Here..."/>
                        <span class="error-message-confirm_password">
                            <small class="text-danger error-message update-confirm-password-error" id="update-confirm-password-error"></small>
                        </span>
                        <br>
                        <div class="input-group-text">
                            <input type="checkbox" id="toggleUpdateConfirmPassword">&nbsp;&nbsp; Show Confirm Password
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button type="button" id="editPassword" class="btn btn-primary">
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
$(document).ready(function(){

    $('#togglePassword').change(function(){
        var passwordField = $('#password');
        var passwordFieldType = passwordField.attr('type');
        passwordField.attr('type', passwordFieldType === 'password' ? 'text' : 'password');
    });

    $('#toggleConfirmPassword').change(function(){
        var passwordField = $('#confirm_password');
        var passwordFieldType = passwordField.attr('type');
        passwordField.attr('type', passwordFieldType === 'password' ? 'text' : 'password');
    });

    $('#toggleUpdatePassword').change(function(){
        var passwordField = $('#edit_password');
        var passwordFieldType = passwordField.attr('type');
        passwordField.attr('type', passwordFieldType === 'password' ? 'text' : 'password');
    });

    $('#toggleUpdateConfirmPassword').change(function(){
        var passwordField = $('#edit_confirm_password');
        var passwordFieldType = passwordField.attr('type');
        passwordField.attr('type', passwordFieldType === 'password' ? 'text' : 'password');
    });

    $(document).on("click", "#submit", function(){

        var roles = $(".roles").val(); 
        var name = $("[name='name']").val(); 
        var email = $("[name='email']").val(); 
        var password = $("[name='password']").val(); 
        var confirm_password = $("[name='confirm_password']").val(); 

        if (roles === null) 
        {
            $(".roles-error").text("Please select role for this user here...");
        }
        if (name === "") 
        {
            $(".name-error").text("Please enter name here...");
        }
        if (email === "") 
        {
            $(".email-error").text("Please enter email here...");
        }
        if (password === "") 
        {
            $(".password-error").text("Please enter password here...");
        }
        if (confirm_password === "") 
        {
            $(".confirm_password-error").text("Please enter confirm password here...");
        }
        if(password !== confirm_password)
        {
            $(".confirm_password-error").text("Your confirmed password does not match; please enter the same password in both fields");
        }

        if(roles !== null && name !== "" && email !== "" && password !== "" && confirm_password !== "" && password === confirm_password)
        {
            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('roles', roles);
            formData.append('name', name);
            formData.append('email', email);
            formData.append('password', password);
            formData.append('confirm_password', confirm_password);

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
                
            $.ajax({
                url: "{{ url('create_manager') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result)
                {
                    if(result.alldata.message === "The email has already been taken")
                    {
                        $(".email-error").text(result.alldata.message);
                    }
                    else if(result.alldata.message === "User created successfully")
                    {
                        toastr.success(result.alldata.message);
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        }
    })

    $(document).on("click", ".editManagers", function(){
        var id = $(this).data('id'); 
        var name = $(this).data('name'); 
        var email = $(this).data('email'); 
        var roles = $(this).data('roles'); 

        var roles = $(".edit_roles").val(roles); 
        var id = $("[name='id']").val(id);
        var name = $("[name='edit_name']").val(name); 
        var email = $("[name='edit_email']").val(email); 
    })

    $(document).on("click", "#edit", function(){
        var id = $("[name='id']").val();
        var roles = $(".edit_roles").val(); 
        var name = $("[name='edit_name']").val(); 
        var email = $("[name='edit_email']").val(); 

        if (roles === null) 
        {
            $(".edit-roles-error").text("Please select role for this user here...");
        }
        if (name === "") 
        {
            $(".edit-name-error").text("Please enter name here...");
        }
        if (email === "") 
        {
            $(".edit-email-error").text("Please enter email here...");
        }
        if (password === "") 
        {
            $(".edit-password-error").text("Please enter password here...");
        }

        if(roles !== "" && name !== "" && email !== "")
        {
            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('id', id);
            formData.append('roles', roles);
            formData.append('name', name);
            formData.append('email', email);

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
                
            $.ajax({
                url: "{{ url('update_manager') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result)
                {
                    console.log(result);
                    if(result.alldata.message === "User Updated successfully")
                    {
                        toastr.success(result.alldata.message);
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        }
    })

    $(document).on("click", ".updatePasswordManagers", function(){
        var id = $(this).data('id'); 

        var id = $("[name='updatePasswordId']").val(id);
    })

    $(document).on("click", "#editPassword", function(){

        var id = $("[name='updatePasswordId']").val();
        var password = $("[name='UpdatePassword']").val(); 
        var confirm_password = $("[name='UpdateConfirmPassword']").val(); 

        console.log(id, password, confirm_password);

        if (password === "") 
        {
            $(".update-password-error").text("Please enter password here...");
        }
        if (confirm_password === "") 
        {
            $(".update-confirm-password-error").text("Please enter confirm password here...");
        }
        if(password !== confirm_password)
        {
            $(".update-confirm-password-error").text("Your confirmed password does not match; please enter the same password in both fields");
        }

        if(password !== "" && confirm_password !== "" && password === confirm_password)
        {
            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('id', id);
            formData.append('password', password);
            formData.append('confirm_password', confirm_password);

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('update_password') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result)
                {
                    if(result.alldata.message === "User Password Updated Successfully")
                    {
                        toastr.success(result.alldata.message);
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        }
    })
});
</script>

@endpush
@endsection
