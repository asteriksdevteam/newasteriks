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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Services</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Services</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">All Services</span>
                        </h3>
                    </div>
                    <div class="card-px  my-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column mb-8 fv-row pt-9 flex-row-reverse">
                                    <a href="{{ url("create_service") }}" class="btn btn-success btn-sm">Create Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 30%"><b>Service</b></th>
                                        <th class="text-dark" style="width: 30%"><b>Slug</b></th>
                                        <th class="text-dark" style="width: 40%"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $item)
                                    <tr>
                                        <td>{{ $item->ServiceSubCategory->sub_category }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>
                                            {{-- <a href="" class="btn btn-dark btn-sm">Complete Service Detail</a> --}}
                                            <a href="{{ url("edit_service/".$item->id) }}" class="btn btn-warning btn-sm">Edit Service</a>
                                            <a href="{{ url("delete_service/".$item->id) }}" class="btn btn-danger btn-sm">Delete Service</a>

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
        var category = $(this).data("category");
        var sub_category = $(this).data("sub_category");

        $('.id').val(id);
        $('.Catgory').val(category);
        $('.subCatgory').val(sub_category);
    })
})
</script>

@endpush
@endsection