$('.testimonios').owlCarousel({
    autoplay: true,
    autoplayTimeout: 4000,
    loop: true,
    items: 1,
    center: true,
    nav: false,
    dots: false,
    thumbs: true,
    thumbImage: false,
    thumbsPrerendered: true,
    thumbContainerClass: 'owl-thumbs',
    thumbItemClass: 'owl-thumb-item',
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
});

$('.caracteristi').owlCarousel({
    loop: true,
    margin:30,
    nav: false,
    dots: true,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    items: 1,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true
});

$('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 10,
    dotsData: true,
    autoplayTimeout: 4000,
    nav: false,
    thumbs: false,
    responsive:{
        0: {
            items: 1
        },

        600:{
            items: 1
        },
        1000:{
            items:1
        },
    }
});

$(document).ready(function ()
{
    $('owl-dots').insertAfter($('.owl-stage'));
});