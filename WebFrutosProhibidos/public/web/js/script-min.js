/**/
/*global NaN */

$(document).ready(function(){
    $('.ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('.ir-arriba').slideDown(500);
        } else {
            $('.ir-arriba').slideUp(500);
        }
    });
});

    
//MENU FLOAT
jQuery(document).ready(function() {
    // define variables
    var navOffset, scrollPos = 0;
    // function to run on page load and window resize
    function stickyUtility() {
        // only update navOffset if it is not currently using fixed position
        if (!jQuery(".navigation-allgs").hasClass("head-navfixed")) {
            navOffset = jQuery(".navbar_main").offset().top;
        }
        // apply matching height to nav wrapper div to avoid awkward content jumps
        jQuery(".navbar_main").height(jQuery(".navbar_main").outerHeight());

    } // end stickyUtility function
    // run on page load
    stickyUtility();
    // run on window resize
    jQuery(window).resize(function() {
        stickyUtility();
    });

    // run on scroll event
    jQuery(window).scroll(function() {
        scrollPos = jQuery(window).scrollTop();

        if (scrollPos > navOffset) {
            jQuery(".navbar_main").addClass("head-navfixed");
        } else {
            jQuery(".navbar_main").removeClass("head-navfixed");
        }
    });
});
    

/*--------------IR ARRIBA----------------*/
$(document).ready(function(){
    $('.ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });
    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('.ir-arriba').slideDown(300);
        } else {
            $('.ir-arriba').slideUp(300);
        }
    });
});

/*------------END IR ARRIBA-------------*/
$('.mobile-btn').click(function(){
    $(this).toggleClass('active')
    $('.menu-mobile').toggleClass('active')
});
$('.mobile-btn').click(function(){
    $('#aside_mobile').toggleClass('active')
});


/*ACCORDION PARA LA BARRA DE MENU*/
$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
            $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
    }   
    var accordion = new Accordion($('#accordion'), false);
});

/*LIGHT GALLERY

$(document).ready(function() {
    $("#lightgallery").lightGallery({
        selector: 'div a '
    }); 

    $ ('#aniimated-thumbnials'). lightGallery ({
        selector: 'div a ',
        youtubePlayerParams: {
            modestbranding: 1,
            showinfo: 0,
            rel: 0,
            controls: 0
        },
        vimeoPlayerParams: {
            byline : 0,
            portrait : 0,
            color : 'A90707'     
        }
    }); 
});*/
/*
$(document).ready(function()
{

    $(window).resize(function()
    {
        if($(window).width() <=991)
        {
            console.log("aaa");

            $('.logo_main').insertBefore($('.navbar-toggler'));
        }
        else
        {
            $('.logo_main').insertBefore($('.navbar-nav'));
        }
    });
    
});*/

$(document).ready(function()
{
    $(window).resize(function()
    {
        if($(window).width() <= 991)
        {
            $('.icon-img').insertBefore($('.menu-active a'));
        }
        else
        {
            $('.icon-img').insertAfter($('.menu-active a'));
        }
    });
});

$(document).ready(function(){
    var cambio = false;
    $('.navbar-nav li a').each(function(index) {
        if(this.href.trim() == window.location){
            $(this).parent().addClass("menu-active");
            $('.menu-active').append('<div class="icon-img"></div>');
            cambio = true;
        }
    });
    if(!cambio){
        $('.nav li:first').addClass("menu-active");
    }
});
