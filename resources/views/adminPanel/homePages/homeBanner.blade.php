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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Home Page Banner</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Home Page Banner</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <form class="form" action="{{ url('updateHomeBanner') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="py-5 px-lg-17">
                                <div class="me-n7 pe-7">
                                    <h2 class="fw-bolder pb-10">Update Home Page Banner</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <input type="hidden" value="{{ $HomeBanner == null ? "" : $HomeBanner->id }}" name="banner_id">
                                                <label class="required fs-6 fw-bold mb-2">Banner Heading</label>
                                                <input type="text" value="{{ $HomeBanner == null ? "" : $HomeBanner->banner_heading }}" class="form-control form-control-solid banner_heading @error('banner_heading') is-invalid @enderror" id="banner_heading" name="banner_heading" placeholder="Banner Heading"/>
                                                @error('banner_heading')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Banner Trusted By Images</label>
                                                <input type="file" class="form-control form-control-solid trusted_by_image" id="trusted_by_image" name="trusted_by_image[]" placeholder="Banner Heading" multiple/>
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Banner Images</label>
                                                <input type="file" class="form-control form-control-solid banner_images" id="banner_images" name="banner_images[]" placeholder="Banner Heading" multiple accept=".jpg, .jpeg, .png"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row mb-7">
                                                <label class="required fs-6 fw-bold mb-2">Banner Content</label>
                                                <textarea name="banner_content" id="banner_content" class="form-control form-control-solid banner_content @error('banner_content') is-invalid @enderror" cols="30" rows="10">{{ $HomeBanner == null ? "" : $HomeBanner->banner_content }}</textarea>
                                                @error('banner_content')
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

    <br>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <div class="py-5 px-lg-17">
                            <div class="me-n7 pe-7">
                                <h2 class="fw-bolder pb-10">Trusted By Images</h2>
                            </div>
                            <section>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        @foreach($HomeBannerTrustedByImage as $item)
                                            <div class="col-lg-3 col-md-6 col-xs-12">
                                                <div class="card mcard bg-dark p-5 ">
                                                    <img src="{{ asset($item->trusted_by_image) }}" alt="dce-image">
                                                    <a href="javascript:void(0);" class="button_trusted_by_image">
                                                        <input type="hidden" value="{{ $item->id }}" name="trusted_by_image" id="trusted_by_image" class="trusted_by_image">
                                                        <div class="garbage1">
                                                            <i class="fonticon-trash-bin text-secondary"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-px py-10 my-10">
                        <div class="py-5 px-lg-17">
                            <div class="me-n7 pe-7">
                                <h2 class="fw-bolder pb-10">Banner Images</h2>
                            </div>
                            <section>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        @foreach($HomeBannerImages as $item)
                                            <div class="col-lg-3 col-md-6 col-xs-12">
                                                <div class="card mcard bg-secondary p-5 ">
                                                    <img src="{{ asset($item->image) }}" alt="dce-image">
                                                    <a href="javascript:void(0);" class="button_home_banner_images">
                                                        <input type="hidden" value="{{ $item->id }}" name="home_banner_images" id="home_banner_images" class="home_banner_images">
                                                        <div class="garbage1">
                                                            <i class="fonticon-trash-bin text-danger"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
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
    $(document).ready(function ()
    {
        $(document).on("click", ".button_home_banner_images", function()
        {
            var home_banner_images_id = $(this).find('.home_banner_images').val();

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
                
            $.ajax({
                url: "{{ url('deleteHomeBannerImages') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: home_banner_images_id,
                },
                success: function(result){
                    toastr.success(result.success);
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                }
            });

        })

        $(document).on("click", ".button_trusted_by_image", function()
        {
            var trusted_by_image_id = $(this).find('.trusted_by_image').val();
            
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
                
            $.ajax({
                url: "{{ url('deleteTrustedByImageId') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: trusted_by_image_id,
                },
                success: function(result){
                    toastr.success(result.success);
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                }
            });

        })
    })
</script>

@endpush
@endsection