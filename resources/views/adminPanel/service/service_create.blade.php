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
    .hr{
        border: 2px solid #000;
      margin: 20px 0; 
    }
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Create Services</h1>
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
                    <li class="breadcrumb-item text-dark">Create Services</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column fv-row  flex-row-reverse">
                                    <a href="{{ url("services") }}" class="btn btn-success btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="py-5 px-lg-17">
                            <div class="me-n7 pe-7">
                                <h2 class="fw-bolder pb-10">Create Services Page Here</h2>
                                <form class="form" action="{{ url('store_service') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>Sub Category</h3></label>
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Select Sub Category</label>
                                                <select class="form-control form-control-solid subcategory @error('subcategory') is-invalid @enderror" name="subcategory" id="subcategory">
                                                    <option selected disabled>Select</option>
                                                    @foreach($SubCategory as $item)
                                                    <option value="{{ $item->id }}">{{ $item->sub_category }}</option>
                                                    @endforeach
                                                </select>
                                                @error('subcategory')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="required fs-6 fw-bold mb-2 d-flex justify-content-center p-5"><h3>Meta Section</h3></label>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Meta Title</label>
                                                <input type="text" value="" class="form-control form-control-solid meta_title @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" placeholder="Meta Title"/>
                                                @error('meta_title')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Meta keywords</label>
                                                <input type="text" value="" class="form-control form-control-solid @error('meta_keyword') is-invalid @enderror" id="kt_tagify_1" multiple="multiple" name="meta_keyword" placeholder="Meta Title"/>
                                                @error('meta_keyword')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Meta Description</label>
                                                <textarea class="form-control form-control-solid meta_description @error('meta_description') is-invalid @enderror" name="meta_description" id="meta_description" cols="30" rows="4"></textarea>
                                                @error('meta_description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="modal-footer flex-center">
                                                <button type="submit" id="UpdateBanner" class="btn btn-primary d-flex justify-content-end">
                                                    <span class="indicator-label">Create</span>
                                                    <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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

var input1 = document.querySelector("#kt_tagify_1");

new Tagify(input1);

$('#sevice_second_Image').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_image').html('<img src="' + e.target.result + '" width="80%">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_image').empty();
    }
});

$('#sevice_second_Image_first').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#first_show_image').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#first_show_image').empty();
    }
});

$('#sevice_second_Image_second').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#second_show_image').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#second_show_image').empty();
    }
});

$('#sevice_second_Image_third').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#second_show_image_third').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#second_show_image_third').empty();
    }
});

$('#first_work_icon').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_first_work_icon').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_first_work_icon').empty();
    }
});

$('#first_work_image').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_first_work_image').html('<img src="' + e.target.result + '" width="50px">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_first_work_image').empty();
    }
});

$('#second_work_icon').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_second_work_icon').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_second_work_icon').empty();
    }
});

$('#second_work_image').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_second_work_image').html('<img src="' + e.target.result + '" width="50px">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_second_work_image').empty();
    }
});

$('#third_work_icon').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_third_work_icon').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_third_work_icon').empty();
    }
});

$('#third_work_image').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_third_work_image').html('<img src="' + e.target.result + '" width="50px">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_third_work_image').empty();
    }
});

$('#last_icon_first').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_last_section_image_one').html('<img src="' + e.target.result + '">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_last_section_image_one').empty();
    }
});

$('#last_icon_second').on('change', function(event) {
    var selectedImage = event.target.files[0];

    if (selectedImage) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#show_last_section_image_two').html('<img src="' + e.target.result + '" width="50px">');
    };

    reader.readAsDataURL(selectedImage);
    } else {
    $('#show_last_section_image_two').empty();
    }
});

$('#datatable').dataTable();

</script>

@endpush
@endsection