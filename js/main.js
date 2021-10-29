(function ($) {
    $('#give-gateway-option-paystack').html('Donate With Card');
    $('#give-gateway-option-gourl').html('Donate With Bitcoin');

    $('.navbar-toggler').click(()=> {
        $('.navbar-collapse').toggleClass('show');
    });

    $(window).scroll(function (e) {
        const $el1 = $('.get-involved-row');
        const $el2 = $('.footer-form');
        if ($(this).scrollTop() > 690) {
            $el1.addClass('show-involved-tab');
        } else {
            $el1.removeClass('show-involved-tab');
        }

        if ($(this).scrollTop() > 2400) {
            $el2.addClass('show-footer-form ');
        } else {
            $el2.removeClass('show-footer-form ');
        }

    })
})(jQuery);