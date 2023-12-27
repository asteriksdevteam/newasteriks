<section class="footer">
    <div class="footer-inner">
        <div class="upper-footer">
            <div class="container">
                <div class="row justify-content-between"> 
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="footer-div">
                            <div class="footer-logo mb-3">
                                <img src="{{ asset('userAssets/images/logo.png') }}" class="img-fluid footer-logo" alt="Asteriks Images">
                            </div>
                            <div class="footer-content mb-3 pb-2">
                                <p>We are a full-service digital marketing firm focused on custom content marketing, website design, and branding, all tailored for your business effectively.</p>
                            </div>
                            <div class="social-icons float-lg-start">
                                <ul>
                                    <li><a href="https://www.facebook.com/asteriksdigital" target="blank"><img src="{{ asset('userAssets/images/social5.png') }}" class="img-fluid" alt="Asteriks Images"></a></li>
                                    <li><a href="https://www.instagram.com/asteriksdigital/"  target="blank"><img src="{{ asset('userAssets/images/social4.png') }}" class="img-fluid" alt="Asteriks Images"></a></li>
                                    <li><a href="https://www.linkedin.com/company/asteriksdigital/mycompany/" target="blank"><img src="{{ asset('userAssets/images/social3.png') }}" class="img-fluid" alt="Asteriks Images"></a></li>
                                    <li><a href="https://twitter.com/AsteriksDigital" target="blank"><img src="{{ asset('userAssets/images/social6.png') }}" class="img-fluid" alt="Asteriks Images"></a></li>
                                    <li><a href="https://www.youtube.com/@AsteriksDigital" target="blank"><img src="{{ asset('userAssets/images/social1.png') }}" class="img-fluid" alt="Asteriks Images"></a></li>
                                    <!--<li><img src="{{ asset('userAssets/images/social12.png') }}" class="img-fluid" alt="Asteriks Images"></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget">
                                    <h5>What we do</h5>
                                </div>
                                <div class="footer-list">
                                    <ul>
                                        <li><a href="https://www.asteriksdigital.com/service/social-media-marketing">Social Media Marketing</a></li>
                                        <li><a href="https://www.asteriksdigital.com/service/website-development">Website Development</a></li>
                                        <li><a href="https://www.asteriksdigital.com/service/branding">Ultimate Design</a></li> 
                                        <li><a href="https://www.asteriksdigital.com/service/digital-marketing-packages">Digital Marketing</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget">
                                    <h5>Company</h5>
                                </div>
                                <div class="footer-list">
                                    <ul>
                                        <li><a href="{{ url('about-us') }}">About us</a></li>
                                        <li><a href="{{ url('careers') }}">Career</a></li>
                                        <!--<li><a href="#">Become Investor</a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-12">
                                <div class ="footer-widget"> 
                                    <h5>Support</h5>
                                </div>
                                <div class="footer-list">
                                    <ul>
                                        <!--<li><a href="{{ url('about-us') }}">FAQ</a></li>-->
                                        <li><a href="{{ url('privacy_policy') }}">Policy</a></li>
                                        <li><a href="#">Business</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-12">
                                <div class="footer-widget">
                                    <h5>Contact</h5>
                                </div>
                                <div class="footer-list">
                                    <ul>
                                        <li><a href="https://wa.me/923200950682" target="blank">WhatsApp</a></li>
                                        <li><a href="javascript:void(Tawk_API.toggle())">Support 24</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <p>Copyright © 2023 Asteriks Digital</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <p class="float-end"><a href="{{ url('privacy_policy') }}">Privacy Policy</a> | <a href="{{ url('terms_and_conditions') }}">Terms & Condition</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('userAssets/images/footer-bg.svg') }}" class="img-fluid footer-biglogo" alt="Asteriks Images">
</section>