(function ($) {
    "use strict"; // Start of use strict
    $(window).on('load', function () {
        /*--/ Star Typed /--*/
        if ($('.bb-text-slider').length == 1) {
            var typed_strings = $('.bb-text-slider-items').text();
            var typed = new Typed('.bb-text-slider', {
                strings: typed_strings.split(','),
                typeSpeed: 80,
                loop: true,
                backDelay: 1100,
                backSpeed: 30
            });
        }
    });
  })(jQuery); // End of use strict