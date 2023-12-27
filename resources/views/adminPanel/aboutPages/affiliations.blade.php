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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Affiliations</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Affiliations</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">All Affiliations</span>
                        </h3>
                        {{-- <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a Affiliations">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary image-panel-btn">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            New Affiliations</a>
                        </div> --}}
                    </div>
                    <div class="card-px  my-10">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">Image</span>
                                    </label>
                                    <input type="hidden" name="id" id="id" class="image-id">
                                    <input type="file" class="form-control form-control-solid Image" placeholder="Enter Image Here..." name="image" id="image" />
                                    <span class="error-message-image">
                                        <small class="text-danger error-message image-error" id="image-error"></small>
                                    </span>
                                    <div class="col-md-4 p-5" id="show_image">
                                        <img src="" alt="" class="show_image "  srcset="" width="50%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex flex-column mb-8 fv-row pt-9">
                                    <input type="button" id="submit" class="btn btn-success btn-sm" value="Submit">
                                </div>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 50%"><b>Images</b></th>
                                        <th class="text-dark" style="width: 50%"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($item->image) }}" alt="" class="show_image "  srcset="" width="10%">
                                        </td>
                                        <td>
                                            <a href="javascript:void()" data-id="{{ $item->id }}" data-image="{{ $item->image }}" class="btn btn-sm btn-info btn-active-primary editAffiliations" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target_edit" id="editPortfolio">Edit</a>
                                            <a href="javascript:void()" data-id="{{ $item->id }}" class="btn btn-sm btn-danger btn-active-primary deleteAffiliations">Delete</a>
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

    $('#image').on('change', function(event) {
        var selectedImage = event.target.files[0];

        if (selectedImage) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#show_image').html('<img src="' + e.target.result + '">');
        };

        reader.readAsDataURL(selectedImage);
        } else {
        $('#show_image').empty();
        }
    });

    $(document).ready(function ()
    {
        $(document).on('click', '#submit', function()
        {
            var id = $(".image-id").val();

            var Image = $(".Image").val();

            console.log(id, Image);

            if (Image === "") 
            {
                $(".image-error").text("Please select image here...");
            }

            if(Image !== "")  
            {

                let formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('id', id);
                formData.append('Image', $('.Image')[0].files[0]);

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                    
                $.ajax({
                    url: "{{ url('create_or_update_affiliations') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result)
                    {
                        if(result.success == "Affiliations created Successfully")
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

        $(document).on('click', '.editAffiliations', function()
        {
            var id = $(this).data("id");
            var image = $(this).data("image");

            $(".image-id").val(id);
            $('#show_image').html('<img src="' + image + '">');
        })
        
        $(document).on('click','.deleteAffiliations', function()
        {
            var id = $(this).data("id");

            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('id', id);
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
                
            $.ajax({
                url: "{{ url('delete_Affiliations') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result)
                {
                    if(result.success == "Affiliations Deleted Successfully")
                    {
                        toastr.success(result.success);
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        })
    })
</script>

@endpush
@endsection