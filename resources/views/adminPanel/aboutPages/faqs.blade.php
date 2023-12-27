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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">FAQs</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('home') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">FAQs</li>
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
                            <span class="card-label fw-bolder fs-3 mb-1">All FAQs</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a FAQs">
                            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            New FAQs</a>
                        </div>
                    </div>
                    <div class="card-px py-10 my-10">
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded table-striped border gy-7 gs-7" id="datatable">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="text-dark" style="width: 30%"><b>Question</b></th>
                                        <th class="text-dark" style="width: 40%"><b>Answer</b></th>
                                        <th class="text-dark" style="width: 30%"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $item)
                                    <tr>
                                        <td>{{ $item->question }}</td>
                                        <td>{{ $item->answer }}</td>
                                        <td>
                                            <a href="javascript:void()" data-id="{{ $item->id }}" data-question="{{ $item->question }}" data-answer="{{ $item->answer }}"  class="btn btn-sm btn-info btn-active-primary editfaqs" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target_edit" id="editPortfolio">Edit</a>
                                            <a href="javascript:void()" data-id="{{ $item->id }}" class="btn btn-sm btn-danger btn-active-primary delete_faqs">Delete</a>
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
                        <h1 class="mb-3">Add FAQs</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Question</span>
                        </label>
                        <input type="text" class="form-control form-control-solid question" placeholder="Enter Question Here..." name="question" id="question" />
                        <span class="error-message-question">
                            <small class="text-danger error-message question-error" id="question-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Answer</span>
                        </label>
                        <textarea class="form-control form-control-solid answer" placeholder="Enter Answer Here..." name="answer" rows="4" id="answer"></textarea>
                        <span class="error-message-answer">
                            <small class="text-danger error-message answer-error" id="answer-error"></small>
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

<div class="modal fade" id="kt_modal_new_target_edit" tabindex="-1" aria-hidden="true">
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
                        <h1 class="mb-3">Add FAQs</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Question</span>
                        </label>
                        <input type="hidden" name="id" id="id" class="editid">
                        <input type="text" class="form-control form-control-solid edit-question" placeholder="Enter Question Here..." name="question" id="question" />
                        <span class="error-message-question">
                            <small class="text-danger error-message question-error" id="question-error"></small>
                        </span>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Answer</span>
                        </label>
                        <textarea class="form-control form-control-solid edit-answer" placeholder="Enter Answer Here..." name="answer" rows="4" id="answer"></textarea>
                        <span class="error-message-answer">
                            <small class="text-danger error-message answer-error" id="answer-error"></small>
                        </span>
                    </div>
                    <div class="text-center">
                        <button type="button" id="Updatefaqs" class="btn btn-primary">
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
    $('#datatable').dataTable();

    $(document).ready(function ()
    {
        $(document).on('click', '#submit', function()
        {
            var question = $(".question").val();

            var answer = $(".answer").val();

            console.log(question, answer);

            if (question === "") 
            {
                $(".question-error").text("Please enter question here...");
            }

            if (answer === "") 
            {
                $(".answer-error").text("Please enter answer here...");
            }

            if(question !== "" && answer !== "")  
            {

                let formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('question', question);
                formData.append('answer', answer);

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                    
                $.ajax({
                    url: "{{ url('create_faqs') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result)
                    {
                        if(result.success == "Faqs created Successfully")
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

        $(document).on('click', '.editfaqs', function()
        {
            var id = $(this).data("id");
            var question = $(this).data("question");
            var answer = $(this).data("answer");

            $(".editid").val(id);
            $(".edit-question").val(question);
            $(".edit-answer").val(answer);
        })

        $(document).on('click', '#Updatefaqs', function()
        {
            var id = $(".editid").val();

            var question = $(".edit-question").val();

            var answer = $(".edit-answer").val();

            console.log(question, answer, id);

            if (question === "") 
            {
                $(".question-error").text("Please enter question here...");
            }

            if (answer === "") 
            {
                $(".answer-error").text("Please enter answer here...");
            }

            if(question !== "" && answer !== "")  
            {
                let formData = new FormData();
                formData.append('_token', "{{ csrf_token() }}");
                formData.append('id', id);
                formData.append('question', question);
                formData.append('answer', answer);

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                    
                $.ajax({
                    url: "{{ url('update_faqs') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(result)
                    {
                        if(result.success == "Faqs Updated Successfully")
                        {
                            toastr.success(result.success);
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    }
                });
            }
        })
        
        $(document).on('click','.delete_faqs', function()
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
                url: "{{ url('delete_faqs') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(result)
                {
                    if(result.success == "Faqs Deleted Successfully")
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