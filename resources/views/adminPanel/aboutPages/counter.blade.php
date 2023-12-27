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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Counter</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Counter</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <form class="form" action="{{ url('updateCounter') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="py-5 px-lg-17">
                                <div class="me-n7 pe-7">
                                    <h2 class="fw-bolder pb-10">Update Counter</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <input type="hidden" value="{{ $alldata->id }}" name="id">
                                                <label class="required fs-6 fw-bold mb-2">First Counter</label>
                                                <input type="text" value="{{ $alldata->first_counter }}" class="form-control form-control-solid first_counter @error('first_counter') is-invalid @enderror" id="first_counter" name="first_counter" placeholder="First Counter"/>
                                                @error('first_counter')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">First Counter Name</label>
                                                <input type="text" value="{{ $alldata->first_counter_name }}" class="form-control form-control-solid first_counter_name @error('first_counter_name') is-invalid @enderror" id="first_counter_name" name="first_counter_name" placeholder="First Counter Name"/>
                                                @error('first_counter_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Second Counter</label>
                                                <input type="text" value="{{ $alldata->Second_counter }}" class="form-control form-control-solid Second_counter @error('Second_counter') is-invalid @enderror" id="Second_counter" name="Second_counter" placeholder="Second Counter"/>
                                                @error('Second_counter')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Second Counter Name</label>
                                                <input type="text" value="{{ $alldata->Second_counter_name }}" class="form-control form-control-solid Second_counter_name @error('Second_counter_name') is-invalid @enderror" id="Second_counter_name" name="Second_counter_name" placeholder="Second Counter Name"/>
                                                @error('Second_counter_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Third Counter</label>
                                                <input type="text" value="{{ $alldata->Third_counter }}" class="form-control form-control-solid Third_counter @error('Third_counter') is-invalid @enderror" id="Third_counter" name="Third_counter" placeholder="Third Counter"/>
                                                @error('Third_counter')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Third Counter Name</label>
                                                <input type="text" value="{{ $alldata->Third_counter_name }}" class="form-control form-control-solid Third_counter_name @error('Third_counter_name') is-invalid @enderror" id="Third_counter_name" name="Third_counter_name" placeholder="Third Counter Name"/>
                                                @error('Third_counter_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Fourth Counter</label>
                                                <input type="text" value="{{ $alldata->Fourth_counter }}" class="form-control form-control-solid Fourth_counter @error('Fourth_counter') is-invalid @enderror" id="Fourth_counter" name="Fourth_counter" placeholder="Fourth Counter"/>
                                                @error('Fourth_counter')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Fourth Counter Name</label>
                                                <input type="text" value="{{ $alldata->Fourth_counter_name }}" class="form-control form-control-solid Fourth_counter_name @error('Fourth_counter_name') is-invalid @enderror" id="Fourth_counter_name" name="Fourth_counter_name" placeholder="Fourth Counter Name"/>
                                                @error('Fourth_counter_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
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