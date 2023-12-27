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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Core Values</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Core Values</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <form class="form" action="{{ url('updateCoreValuesFirst') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="py-5 px-lg-17">
                                <div class="me-n7 pe-7">
                                    <h2 class="fw-bolder pb-10">Update Core Values</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <input type="hidden" value="{{ $alldata->id }}" name="id">
                                                <label class="required fs-6 fw-bold mb-2">First Heading</label>
                                                <input type="text" value="{{ $alldata->heading_1 }}" class="form-control form-control-solid first_heading @error('first_heading') is-invalid @enderror" id="first_heading" name="first_heading" placeholder="First Heading"/>
                                                @error('first_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">First Content</label>
                                                <textarea rows="5" class="form-control form-control-solid first_content @error('first_content') is-invalid @enderror" id="first_content" name="first_content">{{ $alldata->content_1 }}</textarea>
                                                @error('first_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Second Heading</label>
                                                <input type="text" value="{{ $alldata->heading_2 }}" class="form-control form-control-solid second_heading @error('second_heading') is-invalid @enderror" id="second_heading" name="second_heading" placeholder="Second Heading"/>
                                                @error('second_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Second Content</label>
                                                <textarea  rows="5" class="form-control form-control-solid second_content @error('second_content') is-invalid @enderror" id="second_content" name="second_content">{{ $alldata->content_2 }}</textarea>
                                                @error('second_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Third Heading</label>
                                                <input type="text" value="{{ $alldata->heading_3 }}" class="form-control form-control-solid third_heading @error('third_heading') is-invalid @enderror" id="third_heading" name="third_heading" placeholder="Third Heading"/>
                                                @error('third_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Third Content</label>
                                                <textarea  rows="5" class="form-control form-control-solid third_content @error('third_content') is-invalid @enderror" id="third_content" name="third_content">{{ $alldata->content_3 }}</textarea>
                                                @error('third_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Fourth Heading</label>
                                                <input type="text" value="{{ $alldata->heading_4 }}" class="form-control form-control-solid fourth_heading @error('fourth_heading') is-invalid @enderror" id="fourth_heading" name="fourth_heading" placeholder="Fourth Heading"/>
                                                @error('fourth_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Fourth Content</label>
                                                <textarea  rows="5" class="form-control form-control-solid fourth_content @error('fourth_content') is-invalid @enderror" id="fourth_content" name="fourth_content">{{ $alldata->content_4 }}</textarea>
                                                @error('fourth_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Fifth Heading</label>
                                                <input type="text" value="{{ $alldata->heading_5 }}" class="form-control form-control-solid fifth_heading @error('fifth_heading') is-invalid @enderror" id="fifth_heading" name="fifth_heading" placeholder="Fifth Heading"/>
                                                @error('fifth_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Fifth Content</label>
                                                <textarea  rows="5" class="form-control form-control-solid fifth_content @error('fifth_content') is-invalid @enderror" id="fifth_content" name="fifth_content">{{ $alldata->content_5 }}</textarea>
                                                @error('fifth_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Sixth Heading</label>
                                                <input type="text" value="{{ $alldata->heading_6 }}" class="form-control form-control-solid sixth_heading @error('sixth_heading') is-invalid @enderror" id="sixth_heading" name="sixth_heading" placeholder="Sixth Heading"/>
                                                @error('sixth_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Sixth Content</label>
                                                <textarea class="form-control form-control-solid sixth_content @error('sixth_content') is-invalid @enderror" id="sixth_content" name="sixth_content" rows="5">{{ $alldata->content_6 }}</textarea>
                                                @error('sixth_content')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
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