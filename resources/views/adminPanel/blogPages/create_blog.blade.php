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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Create Blogs</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Create Blogs</li>
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
                                    <a href="{{ url("blogs") }}" class="btn btn-success btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="py-5 px-lg-17">
                            <div class="me-n7 pe-7">
                                <h2 class="fw-bolder pb-10">Create Blogs Page Here</h2>
                                <form class="form" action="{{ url('store_blog') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                     <div class="row">
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
                                                <label class="required fs-6 fw-bold mb-2">Author Name</label>
                                                <input type="text" class="form-control form-control-solid author_name @error('author_name') is-invalid @enderror" name="author_name" id="author_name" placeholder="Enter Author Name">
                                                @error('author_name')
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
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Meta keywords</label>
                                                <input type="text" value="" class="form-control form-control-solid meta_keyword @error('meta_keyword') is-invalid @enderror" id="kt_tagify_1" multiple="multiple" name="meta_keyword" placeholder="Meta Title"/>
                                                @error('meta_keyword')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Blog Title</label>
                                                <input type="text" value="" class="form-control form-control-solid blog_title @error('blog_title') is-invalid @enderror" id="blog_title" name="blog_title" placeholder="Enter Blog Title"/>
                                                @error('blog_title')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Blog Thumbnail Image</label>
                                                <input type="file" class="form-control form-control-solid blog_thumbnail_image" name="blog_thumbnail_image" id="blog_thumbnail_image" />
                                                @error('blog_thumbnail_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Category</label>
                                                <select name="category" id="category" class="form-control form-control-solid category @error('category') is-invalid @enderror">
                                                    <option selected disabled>Select</option>
                                                    @foreach($alldata as $item)
                                                    <option value="{{ $item->id }}">{{ $item->category }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Blog Short Description</label>
                                                <textarea id="blog_short_description" name="blog_short_description" class="tox-target @error('blog_short_description') is-invalid @enderror"></textarea>
                                                @error('blog_short_description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Blog Description</label>
                                                <textarea id="blog_description" name="blog_description" class="tox-target @error('blog_description') is-invalid @enderror"></textarea>
                                                @error('blog_description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Status</label>
                                                <select name="status" id="status" class="form-control form-control-solid status @error('status') is-invalid @enderror">
                                                    <option selected disabled>Select</option>
                                                    <option value="active">Active</option>
                                                    <option value="deactivate">Deactivate</option>
                                                </select>
                                                @error('status')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Blog Image</label>
                                                <input type="file" class="form-control form-control-solid blog_image" name="blog_image" id="blog_image" />
                                                @error('blog_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Date</label>
                                                <input type="datetime-local" value="" class="form-control form-control-solid date" name="date" id="date" />
                                                @error('date')
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

    tinymce.init({
        selector: "#blog_short_description",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });

    tinymce.init({
        selector: "#blog_description",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
    });

</script>

@endpush
@endsection