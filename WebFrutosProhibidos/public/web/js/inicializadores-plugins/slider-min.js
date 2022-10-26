$('.carousel').carousel({
  	interval: 10000,
});


$(document).ready(function(){
    /*$(".carousel-control-prev").hover(function(){
        $(".carousel-inner .carousel-item.active").each(function(index, element){
            var index = $(this).index();
            var imgprev = $(".carousel-inner .carousel-item").eq(index-1).attr("data-img");
            var imgnext = $(".carousel-inner .carousel-item").eq(index+1).attr("data-img");


            $(".carousel-control-prev img").attr("src", imgprev);
            $(".carousel-control-next img").attr("src", imgnext);
        });
    });*/


    $("#demo").on("slid.bs.carousel", function() {
      function next_prev(){
        var imgprev = $("#demo").find("div.carousel-item.active").data("next");
        var imgnext = $("#demo").find("div.carousel-item.active").data("prev");

        console.log(imgprev);
        console.log(imgnext);
        $(".carousel-control-prev img").attr("src", imgnext);
        $(".carousel-control-next img").attr("src", imgprev);
      }
      setTimeout(next_prev, 300);
    });



    /*ERROR AL LLEGAR AL ULTIMO SLIDER, AL PASAR AL PRIMERO OTRA VEZ, DETECTA COMO INDEFINIDO AL 1ER SLIDER
    $("#demo").on("slid.bs.carousel", function() {
        var select = $(this)
            .find("div.carousel-item.active")
            .data("img");


        $(".carousel-inner .carousel-item.active").each(function(index, element){

            var index = $(this).index();

            var imgprev = $(".carousel-inner .carousel-item").eq(index-1).attr("data-img");
            var imgnext = $(".carousel-inner .carousel-item").eq(index+1).attr("data-img");
            
            console.log(imgprev);
            console.log(imgnext);
            $(".carousel-control-prev img").attr("src", imgprev);
            $(".carousel-control-next img").attr("src", imgnext);
        });
        
    });*/


    
    /*$(".carousel-control-prev").click(function(){
        $(".carousel-inner .carousel-item.active").each(function(index, element){
            var index = $(this).index();
            var imgprev = $(".carousel-inner .carousel-item").eq(index-1).attr("data-img");
            var imgnext = $(".carousel-inner .carousel-item").eq(index+1).attr("data-img");

            console.log(imgprev);
            console.log(imgnext);
            $(".carousel-control-prev img").attr("src", imgprev);
            $(".carousel-control-next img").attr("src", imgnext);
        });
    });*/

});


/* Demo Scripts for Bootstrap Carousel and Animate.css article
* on SitePoint by Maria Antonietta Perna
*/
(function($) {
  //Function to animate slider captions
  function doAnimations(elems) {
    //Cache the animationend event in a variable
    var animEndEv = "webkitAnimationEnd animationend";

    elems.each(function() {
      var $this = $(this),
        $animationType = $this.data("animation");
      $this.addClass($animationType).one(animEndEv, function() {
        $this.removeClass($animationType);
      });
    });
  }

  //Variables on page load
  var $myCarousel = $("#demo"),
    $firstAnimatingElems = $myCarousel
      .find(".carousel-item:first")
      .find("[data-animation ^= 'animated']");

  //Initialize carousel
  $myCarousel.carousel();

  //Animate captions in first slide on page load
  doAnimations($firstAnimatingElems);

  //Other slides to be animated on carousel slide event
  $myCarousel.on("slide.bs.carousel", function(e) {
    var $animatingElems = $(e.relatedTarget).find(
      "[data-animation ^= 'animated']"
    );
    doAnimations($animatingElems);
  });
})(jQuery);
