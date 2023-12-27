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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Applicants</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Applicants</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">All Applicants</span>
                        </h3>
                    </div>
                    <div class="card-px  my-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column mb-8 fv-row pt-9 flex-row-reverse">
                                    <a href="{{ url("jobs") }}" class="btn btn-success btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 10%"><b>Name</b></th>
                                        <th class="text-dark" style="width: 10%"><b>Email</b></th>
                                        <th class="text-dark" style="width: 10%"><b>Phone Number</b></th>
                                        <th class="text-dark" style="width: 20%"><b>Portfolio Link</b></th>
                                        <th class="text-dark" style="width: 25%"><b>CV</b></th>
                                        <th class="text-dark" style="width: 25%"><b>Cover Letter</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            <a href="{{ asset($item->portfolio) }}" class="text-danger" target="blank">Click to View Portfolio Link</a>
                                        </td>
                                        <td>
                                            <a href="{{ asset($item->cv) }}" class="text-danger" target="blank">Click to View  CV / Resume</a>
                                        </td>
                                        <td>
                                            <a href="{{ asset($item->cover_letter) }}" class="text-danger" target="blank">Click to View Cover Letter</a>
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

@endpush
@endsection