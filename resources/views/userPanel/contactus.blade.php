@extends('userPanel.layouts.app')
@section('content')

<section class="contact-banner">
    <div class="container center-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <h1 class="text-white title">Let’s get in touch</h1>
                <p class="text-white">Great! We're excited to hear from you and let's start something special together. call us for any inquiry.</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="title mb-5">Let's start <br/> a project together</h2>
                <div class="custom-form">
                    <form action="{{ url('contactForm') }}" method="post">
                        @csrf
                        <div class="row gx-3">
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <input type="text" placeholder="name*" class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <input type="text" placeholder="email*" class="form-control @error('email') is-invalid @enderror" name="email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" placeholder="phone*" class="form-control mbphone @error('phone') is-invalid @enderror" id="phone" name="phone"  oninput="$(this).val($(this).val().replace(/\D/g, '').substring(0, 11));">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-3">
                                <select class="form-select @error('category') is-invalid @enderror" name="category">
                                    <option selected disabled>Select</option>
                                    @foreach($ServiceCategory as $value)
                                        <option value="{{ $value->id }}">{{ $value->category }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-12 mb-3">
                                <textarea tye="text" id="" cols="30" rows="6" placeholder="Summary*" class="form-control @error('summary') is-invalid @enderror" name="summary"></textarea>
                                @error('summary')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <button type="submit" class="submit">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-auto">
                <img src="{{ asset('userAssets/images/contact01.png') }}" class="img-fluid contactimg" alt="Asteriks Images">
            </div>
        </div>
    </div>
</section>

<section class="contact-map">
    <div class="container">
        <div class='owl-carousel contact-company-carousel'>
            <div class='item'>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="contactmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14488.306650409591!2d67.0661269!3d24.7928283!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33d730694a36f%3A0x5f5916bf16dd90d7!2sAsteriks%20Digital!5e0!3m2!1sen!2s!4v1702886601538!5m2!1sen!2s" width="100%" height="485px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="map-contact">
                            <h2 class="title">Pakistan</h2>
                            <p>Feel free to contact us using the form below for any inquiries or collaboration opportunities. Stay Connected with Asteriks Digital, a Premier Digital Firm in Pakistan</p>
                        </div>
                        <div class="maplist">
                            <ul>
                                <li><img src="{{ asset('userAssets/images/cicon1.png') }}" class="img-fluid mp1" alt="Asteriks Images"> <a href="tel:{{ $Contactus->phone }}">{{ $Contactus->phone }}</a></li>
                                <li><img src="{{ asset('userAssets/images/cicon2.png') }}" class="img-fluid mp1" alt="Asteriks Images"> <a href="mailto: {{ $Contactus->email }}">{{ $Contactus->email }}</a></li>
                                <li><img src="{{ asset('userAssets/images/pkicon.png') }}" class="img-fluid mp1" alt="Asteriks Images"> <a href="javascript:void();">{{ $Contactus->address1 }}</a></li>
                            </ul>
                        </div>
        
                    </div>
                </div>
            </div>
             <div class='item'>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="contactmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.330227978879!2d-97.75752952344044!3d30.341563504430432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cae2f96fffff%3A0xeb7209fa2a453ee9!2s5900%20Balcones%20Dr%20Suite%20100%2C%20Austin%2C%20TX%2078731%2C%20USA!5e0!3m2!1sen!2s!4v1702886706310!5m2!1sen!2s" width="100%" height="485px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="map-contact">
                            <h2 class="title">USA</h2>
                            <p>Feel free to reach out to us using the form below for inquiries or collaboration opportunities. Stay connected with Asteriks Digital, a top-rated IT digital firm based in the USA.</p>
                        </div>
                        <div class="maplist">
                            <ul>
                                <li><img src="{{ asset('userAssets/images/cicon1.png') }}" class="img-fluid mp1" alt="Asteriks Images"> <a href="tel:+17372557407">+17372557407</a></li>
                                <li><img src="{{ asset('userAssets/images/cicon2.png') }}" class="img-fluid mp1" alt="Asteriks Images"> <a href="mailto: {{ $Contactus->email }}">{{ $Contactus->email }}</a></li>
                                <li><img src="{{ asset('userAssets/images/usaicon.png') }}" class="img-fluid mp1" alt="Asteriks Images"> <a href="javascript:void();">{{ $Contactus->address2 }}</a></li>
                            </ul>
                        </div>
        
                    </div>
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