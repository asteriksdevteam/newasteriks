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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Job Sub Categories</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Job Sub Categories</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">All Job Sub Categories</span>
                        </h3>
                    </div>
                    <div class="card-px  my-10">
                        <form action="{{ url('create_job_sub_category') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Job Sub Category</span>
                                        </label>
                                        <input type="hidden" class="subCategoryId" name="subCategoryId" id="subCategoryId">
                                        <input type="text" class="form-control form-control-solid jobSubCatgory @error('jobSubCatgory') is-invalid @enderror" placeholder="Enter Sub Catgory Here..." name="jobSubCatgory" id="jobSubCatgory" />
                                        <span class="error-message-jobSubCatgory">
                                            <small class="text-danger error-message jobSubCatgory-error" id="jobSubCatgory-error"></small>
                                        </span>
                                        @error('jobSubCatgory')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column mb-8 fv-row pt-9">
                                        <input type="submit" id="submit" class="btn btn-success btn-sm" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 40%"><b>Sub Categories</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $item)
                                    <tr>
                                        <td>{{ $item->job_categories }}</td>
                                        <td>
                                            <a href="javascript:void()" data-id="{{ $item->id }}" data-job_categories="{{ $item->job_categories }}" class="btn btn-sm btn-info btn-active-primary editSubCategory">Edit</a>
                                            <a href="{{ url('delete_subCategory_of_job/'.$item->id) }}" class="btn btn-sm btn-danger btn-active-primary deleteSubCategory">Delete</a>
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

@push('scripts')

@if(session('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endif

<script>

$('#datatable').dataTable();

    $(document).ready(function (){

        $(document).on('click', '.editSubCategory', function()
        {
            var id = $(this).data("id");
            var job_categories = $(this).data("job_categories");
            $('.subCategoryId').val(id);
            $('.jobSubCatgory').val(job_categories);
        })
    })
</script>

@endpush
@endsection