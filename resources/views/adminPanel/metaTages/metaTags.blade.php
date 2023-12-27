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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Meta Tags</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Meta Tags</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">All Meta Tags For Difference Pages</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a Meta Tags">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            New Meta Tags</a>
                        </div>
                    </div>
                    <div class="card-px py-10 my-10">
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 15%"><b>Pages</b></th>
                                        <th class="text-dark" style="width: 15%"><b>Meta Title</b></th>
                                        <th class="text-dark" style="width: 25%"><b>Meta Keyword</b></th>
                                        <th class="text-dark" style="width: 25%"><b>Meta Description</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $item)
                                    <tr>
                                        <td>{{ $item->page }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->keyword }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <a href="{{ url('edit_meta_tags/'. $item->id ) }}" class="btn btn-sm btn-info btn-active-primary editPortfolio" id="editPortfolio">Edit</a>
                                            <a href="{{ url('delete_meta_tags/'. $item->id ) }}" class="btn btn-sm btn-danger btn-active-primary deletePortfolio">Delete</a>
                                        </td>
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
                        <h1 class="mb-3">Add Pages</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Category</span>
                        </label>
                        <select class="form-select form-select-solid category" aria-label="Select example" name="category" id="category">
                            <option selected disabled>Open this select Category</option>
                            <option value="Home">Home</option>
                            <option value="About us">About us</option>
                            <option value="Blog">Blog</option>
                            <option value="Careers">Careers</option>
                            <option value="Contact Us">Contact Us</option>
                            <option value="Privacy Policy">Privacy Policy</option>
                            <option value="Terms and Conditions">Terms and Conditions</option>
                        </select>
                        <span class="error-message-category">
                            <small class="text-danger error-message category-error" id="category-error"></small>
                        </span>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Meta Title</span>
                        </label>
                        <input type="text" class="form-control form-control-solid title" name="title" id="title" placeholder="Enter Title"/>
                        <span class="error-message-title">
                            <small class="text-danger error-message title-error" id="title-error"></small>
                        </span>
                    </div>
                    
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Meta Keyword</span>
                        </label>
                        <input class="form-control form-control-solid keywordVal" value="" name="keyword[]" id="kt_tagify_1" multiple="multiple"/>
                        </select>
                        <span class="error-message-keyword">
                            <small class="text-danger error-message keyword-error" id="keyword-error"></small>
                        </span>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Description</span>
                        </label>
                        <textarea class="form-control form-control-solid description" name="description" id="description" cols="30" rows="4"></textarea>
                        <span class="error-message-decsription">
                            <small class="text-danger error-message decsription-error" id="decsription-error"></small>
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

    var input1 = document.querySelector("#kt_tagify_1");

    new Tagify(input1);


    $(document).ready(function ()
    {
        $(document).on('click', '#submit', function()
        {
            var category = $(".category").val();

            var title = $(".title").val();

            var description = $(".description").val();

            var keyword = $("#kt_tagify_1").val();

            console.log(keyword.length === 0);

            if (category === null) 
            {
                $(".category-error").text("Please Select Category here...");
            }
            if (title === "") 
            {
                $(".title-error").text("Please enter title here...");
            }
            if (keyword.length === 0) 
            {
                $(".keyword-error").text("Please enter keyword here...");
            }
            if (description === "") 
            {
                $(".decsription-error").text("Please enter description here...");
            }

            if(category !== null && title !== "" && keyword.length !== 0 && description !== "")  
            {
                let formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('category', category);
                formData.append('title', title);
                formData.append('keyword', keyword);
                formData.append('description', description);

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                    
                $.ajax({
                    url: "{{ url('create_meta_tags') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result)
                    {
                        if(result.success == "your meta tags created successfully")
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
    })
</script>
@endpush
@endsection
