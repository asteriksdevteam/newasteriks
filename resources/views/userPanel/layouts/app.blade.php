<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@900,700,500,300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/userAssets/css/owl.carousel.min.css') }}">
    <link href="https://github.hubspot.com/odometer/themes/odometer-theme-default.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('public/userAssets/css/style.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('userAssets/images/Icon.svg') }}">
    
    <?php
        $currentPath = request()->path(); 
        $pathParts = explode('/', $currentPath);
    ?>
    
    @if($_SERVER['REQUEST_URI'] === '/')
        @if($MetaTags != null)
            <title>{{ $MetaTags->title }}</title>
            <meta name="description" content="{{ $MetaTags->description }}">
            <meta name="keywords" content="{{ $MetaTags->keyword }}">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @else
            <title></title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @endif

    @elseif($_SERVER['REQUEST_URI'] === '/about-us')

        @if($MetaTags != null)
            <title>{{ $MetaTags->title }}</title>
            <meta name="description" content="{{ $MetaTags->description }}">
            <meta name="keywords" content="{{ $MetaTags->keyword }}">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @else
            <title></title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @endif

    @elseif($_SERVER['REQUEST_URI'] === '/contact-us')

        @if($MetaTags != null)
            <title>{{ $MetaTags->title }}</title>
            <meta name="description" content="{{ $MetaTags->description }}">
            <meta name="keywords" content="{{ $MetaTags->keyword }}">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @else
            <title></title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @endif

    @elseif($_SERVER['REQUEST_URI'] === '/blog')
        @if($MetaTags != null)
            <title>{{ $MetaTags->title }}</title>
            <meta name="description" content="{{ $MetaTags->description }}">
            <meta name="keywords" content="{{ $MetaTags->keyword }}">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @else
            <title></title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @endif

    @elseif($_SERVER['REQUEST_URI'] === '/careers')
        @if($MetaTags != null)
            <title>{{ $MetaTags->title }}</title>
            <meta name="description" content="{{ $MetaTags->description }}">
            <meta name="keywords" content="{{ $MetaTags->keyword }}">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @else
            <title></title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @endif
        
    @elseif($pathParts[0] === 'careers-detail')
            <title>Asteriks Digital | Build Your Career With Us </title>
            <meta name="description" content="Join Asteriks Digital: Where Connection and Excellence Converge. Experience the Power of a Top Digital Marketing & IT Firm Committed to Your Success.">
            <meta name="keywords" content="Asteriks Digital, Career Opportunities, Join Us, Top Digital Marketing, IT Firm, Join Asteriks Digital Team,">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />

    @elseif($_SERVER['REQUEST_URI'] === '/terms_and_conditions')
        @if($MetaTags != null)
            <title>{{ $MetaTags->title }}</title>
            <meta name="description" content="{{ $MetaTags->description }}">
            <meta name="keywords" content="{{ $MetaTags->keyword }}">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @else
            <title></title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @endif

    @elseif($_SERVER['REQUEST_URI'] === '/privacy_policy')
        @if($MetaTags != null)
            <title>{{ $MetaTags->title }}</title>
            <meta name="description" content="{{ $MetaTags->description }}">
            <meta name="keywords" content="{{ $MetaTags->keyword }}">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @else
            <title></title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
        @endif

    @elseif($pathParts[0] === "service")
        @if($_SERVER['REQUEST_URI'] === '/service/'.$Services->slug)

            @if($Services != null)
                <title>{{ $Services->meta_title }}</title>
                <meta name="description" content="{{ $Services->meta_description }}">
                <meta name="keywords" content="{{ $Services->meta_keyword }}">
                <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
            @else
                <title></title>
                <meta name="description" content="">
                <meta name="keywords" content="">
                <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />
            @endif
        @endif

    @elseif($pathParts[0] === "blog-detail")
        @if($_SERVER['REQUEST_URI'] === '/blog-detail/'.$Blogs->slug)

            @if($Blogs != null)
                <title>{{ $Blogs->meta_title }}</title>
                <meta name="description" content="{{ $Blogs->meta_description }}">
                <meta name="keywords" content="{{ $Blogs->meta_keyword }}">
                <link rel="canonical" href="https://www.asteriksdigital.com{{ $_SERVER['REQUEST_URI'] }}" />

                <meta property="og:title" content="{{ $OG_Title }}">
                <meta property="og:image" content="https://www.asteriksdigital.com/{{ $OG_Image }}">
                <meta property="og:url" content="{{ $OG_URL }}">
                <meta property="og:site_name" content="{{ $OG_Site_Name }}">
                
                <meta name="twitter:card" content="summary">
                <meta name="twitter:domain" content="{{ $OG_Site_Name }}"/>
                <meta name="twitter:title" property="og:title" itemprop="title name" content="{{ $OG_Title }}" />
                <meta name="twitter:description" property="og:description" itemprop="description" content="{{ $OG_Description }}" />
            @else
                <title></title>
                <meta name="description" content="">
                <meta name="keywords" content="">
            @endif
        @endif
    @else
        <title></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
    @endif

</head>
<body>
    @include('userPanel.layouts.header')
    @yield('content')
    @include('userPanel.layouts.footer')

    <script src="{{ url('public/userAssets/js/jquery.min.js') }}"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"></script>-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ url('public/userAssets/js/owl.carousel.min.js') }}"></script>
    <script src="https://github.hubspot.com/odometer/odometer.js"></script>
    <script src="{{ url('public/userAssets/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>



    <!--<script src="{{ url('userAssets/js/jquery.min.js') }}"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->
    <!--<script src="{{ url('userAssets/js/owl.carousel.min.js') }}"></script>-->
    <!--<script src="https://github.hubspot.com/odometer/odometer.js"></script>-->
    <!--<script src="{{ url('userAssets/js/custom.js') }}"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>-->

    
    @stack('scripts')
    <script>
        $(document).ready(function() 
        {
            $('.toggle-bar').click(function() 
            {
                $('.sidebar-menu').addClass('menuopen');
            });

            $('.close-bar').click(function() 
            {
                $('.sidebar-menu').removeClass('menuopen');
            });

            $('.sidebar-menu .dropdown').click(function()
            {
                $('.mega-menu').addClass('menuopen');
            });

            $('.sidebar-menu .dropdown .mega-menu .widget1').click(function()
            {
                $('.megamenu-list1').toggleClass('listopen');
            });

            $('.sidebar-menu .dropdown .mega-menu .widget2').click(function()
            {
                $('.megamenu-list2').toggleClass('listopen');
            });

            $('.sidebar-menu .dropdown .mega-menu .widget3').click(function()
            {
                $('.megamenu-list3').toggleClass('listopen');
            });

            $('.sidebar-menu .dropdown .mega-menu .widget4').click(function()
            {
                $('.megamenu-list4').toggleClass('listopen');
            });
        });

        $(document).ready(function (){
            $.ajax({
                url: "{{ url('get-marketing-li-for-headers') }}",
                type: 'get',
                success: function(result){
                    $("#marketing").html(result.html);
                    $("#mobile-marketing").html(result.html);
                }
            });

            $.ajax({
                url: "{{ url('content-service') }}",
                type: 'get',
                success: function(result){
                    $("#content-service").html(result.html);
                    $("#mobile-content-service").html(result.html);
                }
            });

            $.ajax({
                url: "{{ url('designing-development') }}",
                type: 'get',
                success: function(result){
                    $("#designing-development").html(result.html);
                    $("#mobile-designing-development").html(result.html);
                }
            });

            $.ajax({
                url: "{{ url('It-service') }}",
                type: 'get',
                success: function(result){
                    $("#It-service").html(result.html);
                    $("#mobile-It-service").html(result.html);
                }
            });


            $(document).on("click", ".modalSubmit", function(){
                var name = $(".modalName").val();
                var email = $(".modalEmail").val();
                var phone = $(".modalPhone").val();
                var category = $(".modalCategory").val();
                var summary = $(".modalSummary").val();

                if (name === "") 
                {
                    $(".name-error").text("please enter name here...");
                    $('.modalName').addClass('is-invalid');
                }

                if (email === "") 
                {
                    $(".email-error").text("please enter email here...");
                    $('.modalEmail').addClass('is-invalid');
                }

                if (phone === "") 
                {
                    $(".phone-error").text("please enter phone number here...");
                    $('.modalPhone').addClass('is-invalid');
                }

                if (category === null) 
                {
                    $(".category-error").text("Please Select any category Image here...");
                    $('.modalCategory').addClass('is-invalid');
                }

                if (summary === "") 
                {
                    $(".summary-error").text("please enter summary here...");
                    $('.modalSummary').addClass('is-invalid');
                }
                if(name !== "" && email !== "" && phone !== "" && category !== null && summary !== "")
                {
                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                        
                    let formData = new FormData();
                    formData.append('_token', "{{ csrf_token() }}");
                    formData.append('name', name);
                    formData.append('email', email);
                    formData.append('phone', phone);
                    formData.append('category', category);
                    formData.append('summary', summary);

                    $.ajax({
                        url: "{{ url('contactForm') }}",
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(result)
                        {
                            toastr.success("your form submitted successfully");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    });
                }
            })

            <!--Start of Tawk.to Script-->
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/64c3b16794cf5d49dc66fbc7/1h6e6pvkp';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            <!--End of Tawk.to Script-->
            
        })
    </script>
</body>
</html>