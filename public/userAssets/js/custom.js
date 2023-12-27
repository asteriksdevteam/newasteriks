   // toggle menu

   $('.toggle-bar').click(function() 
   {
        $('.collapse-menu').toggleClass('show');
   });

    $('.toggle-bar').click(function() 
    {
        $('.black-menu-bg ').addClass('visible');
    });
    $('.close-bar').click(function() 
    {
        $('.black-menu-bg ').removeClass('visible');
    });

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $(".desktop-menu").addClass("stickymenu");
        }
        else{
            $(".desktop-menu").removeClass("stickymenu");
        }
    });

    // mobile service page accordion

    const customDropdowns = document.querySelectorAll('.custom-dropdown');

    customDropdowns.forEach((customDropdown) => {

    const megamenu = customDropdown.querySelector('.megamenu');

    customDropdown.addEventListener('click', () => 
    {
            megamenu.classList.toggle('active');
        });
    });

// homebanner-carousel

$('.homebanner-carousel').owlCarousel({
    loop:true,
    margin:10,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    mouseDrag: false,
    touchDrag: false,
    autoplay:true,
    autoplayTimeout:3000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
        }
    }
})

// client-carousel

$('.client-carousel').owlCarousel({
    loop: true,
    margin: 20,
    dots: true,
    center: true,
    nav: true,
    autoplay:true,
    autoplayTimeout:2000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            nav: true
        },
        600: {
            items: 3,
            nav: true
        },
        1000: {
            items: 4,
            nav: true,
            loop: true
        }
    }
});

// award-carousel

$('.award-carousel').owlCarousel({
    loop: true,
    margin: 20,
    dots: true,
    center: true,
    nav: true,
    autoplay:true,
    autoplayTimeout:2000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 2,
            nav: true
        },
        1024:
        {
            items: 2,
            nav: true,
            loop: true
        },
        1366:
        {
            items: 2,
            nav: true,
            loop: true
        },
        1900:
        {
            items: 3,
            nav: true,
            loop: true
        }
    }
});

// testimonial

$('.testimonial-carousel').owlCarousel({
    loop: true,
    margin: 20,
    dots: true,
    nav: true,
    autoplay:true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 2,
            nav: true
        },
        1000: {
            items: 3,
            nav: true,
            loop: true
        }
    }
});


// affilation carousel

$('.affilation-carousel').owlCarousel({
    loop: true,
    dots: false,
    nav: false,
    autoplay:true,
    autoplayTimeout:1000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            nav: false
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 5,
            nav: false,
            loop: true
        }
    }
});

// company carousel

$('.company-carousel').owlCarousel({
    loop: true,
    dots: false,
    nav: false,
    autoplay:true,
    autoplayTimeout:1000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: false,
            loop: true
        }
    }
});

// mobile-company-carousel

$('.mobile-company-carousel').owlCarousel({
    loop: true,
    dots: true,
    nav: true,
    autoplay:true,
    margin:40,
    autoplayTimeout:1000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 1,
            nav: false,
            loop: true
        }
    }
});

// contact-company-carousel

$('.contact-company-carousel').owlCarousel({
    loop: true,
    dots: true,
    nav: true,
    center: true,
    autoplay:false,
    margin:0,
    // autoplayTimeout:3000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: false,
            loop: true
        }
    }
});


// count js

    var counters = $(".count");
    var countersQuantity = counters.length;
    var counter = [];
  
    for (i = 0; i < countersQuantity; i++) {
      counter[i] = parseInt(counters[i].innerHTML);
    }
  
    var count = function(start, value, id) {
      var localStart = start;
      setInterval(function() {
        if (localStart < value) {
          localStart++;
          counters[id].innerHTML = localStart;
        }
      }, 40);
    }
  
    for (j = 0; j < countersQuantity; j++) {
      count(0, counter[j], j);
    }

// scroll down menu




