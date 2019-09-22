document.addEventListener('DOMContentLoaded', function() {

    
    $('.center_slick_slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
		pauseOnHover: false,
      });
    
    
    //start the animation
    //$('.center_slick_slider').slick('slickPlay');

    //on click event to stop the slider if the user clicks on one of the arrows
    $(".center_slick_slider > button").click(function () {      
        $('.center_slick_slider').slick('slickPause');
    });
    
   
	
});