jQuery(document).ready(function ($) {
    
    const owl = $('.owl-carousel');

    owl.owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
        autoplayTimeout: 5000,
        navText: ['<span class="slick-prev"></span>', '<span class="slick-next"></span>'],
        responsive:{
            0:{
                items:1
            }
        },
        onInitialize: function(){
          setAnimation ($('.testimonial-auto'), 'start');
        }
    });

    function setAnimation ( _elem, _InOut ) {
        $('.testimonial-auto').removeClass('animated');
        $('.testimonial-auto').removeClass('fadeInRight');
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    
        _elem.each ( function () {
          var $elem = $(this);
          var $animationType = 'animated ' + $elem.data( 'animate-' + _InOut );
    
          $elem.addClass($animationType).one(animationEndEvent, function () {
            //$elem.removeClass($animationType); // remove animate.css Class at the end of the animations
          });
        });
      }
    
    
    // Fired after current slide has been changed
    owl.on('changed.owl.carousel', function(event) {
        var $currentItem = $('.item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animate-start]");
        setAnimation ($elemsToanim, 'start');
    });


});

