@extends('userPanel.layouts.app')
@section('content')

<section class="career-inner-banner">
    <div class="container center-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <h1 class="text-white"></h1>
                <p class="text-white">You’ll be part of an inclusive and diverse team, and you’ll receive the training you need to help keep you and us greater.</p>
            </div>
        </div>
    </div>
</section>

<section class="whowe-our-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 ipad-order2">
                <div class="whowe-content mb-3">
                    {!! $PrivacyPolicy->privacy_policy !!}
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')

@if(session('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endif

@endpush
@endsection