jQuery(document).ready(function ($) {
    
    const owl = $('.owl-carousel');

    owl.owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            }
        }
    });

    function setAnimation ( _elem, _InOut ) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    
        _elem.each ( function () {
          var $elem = $(this);
          var $animationType = 'animated ' + $elem.data( 'animate-' + _InOut );
    
          $elem.addClass($animationType).one(animationEndEvent, function () {
            $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
          });
        });
      }
    
    // Fired before current slide change
      owl.on('change.owl.carousel', function(event) {
          var $currentItem = $('.item', owl).eq(event.item.index);
          var $elemsToanim = $currentItem.find("[data-animate-end]");
          setAnimation ($elemsToanim, 'end');
      });
    
    // Fired after current slide has been changed
      owl.on('changed.owl.carousel', function(event) {
    
          var $currentItem = $('.item', owl).eq(event.item.index);
          var $elemsToanim = $currentItem.find("[data-animate-start]");
          setAnimation ($elemsToanim, 'start');
      });


});

