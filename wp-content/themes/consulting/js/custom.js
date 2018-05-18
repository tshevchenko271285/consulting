/*
 **  Header Menu Opened
 */
$(function(){
    if( !$('.header_boorger').length ) return ;
    $('.header_boorger').on('click', function(){
        $('.header_menu').toggleClass('header_menu__open');
        $('.header_menu-outer').toggleClass('header_menu-outer__open');
    });
    $('.header_menu-outer').on('click', function(){
        $('.header_menu').toggleClass('header_menu__open');
        $('.header_menu-outer').toggleClass('header_menu-outer__open');
    });
});

/*
 **  Certificates Slider Init
 */
$(function(){
    $('#sertificatesSlider').owlCarousel({
        items: 1,
        margin: 30,
        loop: true,
        nav: true,
        dots: false,
        navText: [
            '<i class="fal fa-chevron-left"></i>',
            '<i class="fal fa-chevron-right"></i>'
        ],
        responsive: {
            992: {
                items: 5,
            },
            768: {
                items: 3,
            }
        }
    });
});

/*
 **  PopUp Certificates Slider Init
 */
$(function(){
    // $('#sertificatesPopupSlider').owlCarousel({
    //     items: 1,
    //     margin: 10,
    //     loop: true,
    //     nav: true,
    //     dots: false,
    //     navText: [
    //         '<i class="fal fa-chevron-left"></i>',
    //         '<i class="fal fa-chevron-right"></i>'
    //     ]
    // });
});

/*
 **  PopUp Certificates Slider Open / Close
 */
var sertifSlider;
$(function(){
    $('.sertificates-slider_item').on('click', function(){
        // Destroy Slider
        if( sertifSlider )
            sertifSlider.trigger('destroy.owl.carousel');
        // Select Key Item For Init Slider
        var item = $(this).attr('data-item');
        sertifSlider = $('#sertificatesPopupSlider').owlCarousel({
            items: 1,
            startPosition: item,
            margin: 10,
            loop: true,
            nav: true,
            dots: false,
            navText: [
                '<i class="fal fa-chevron-left"></i>',
                '<i class="fal fa-chevron-right"></i>'
            ]
        });
        $('.sertificates-popup').fadeIn();
    });
    $('.sertificates-popup_close, .sertificates-popup_outer').on('click', function(){
        $('.sertificates-popup').fadeOut();
    });

});

/*
 **  Added Star In Required Inputs
 */
$(function(){
    var field = $('input.wpcf7-validates-as-required');
    field.each( function(i){
        field[i].placeholder += '*';
    } )
});