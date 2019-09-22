document.addEventListener('DOMContentLoaded', function() {

	
	var h = $(window).height();
    var w = $(window).width();
    var coeff = 1483/969;
    
    var coeff2 = w/h;
    
    if (coeff2>coeff)
    {
        console.log("не помещается");
		
		var newWidth = parseInt(w*0.8);
		var sliderH = $(".center_slick_slider").css("max-width",newWidth+"px");
		
		
    }
    else 
    {
        //console.log("помещается!");
    }

    
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
    
    
    $(".center_slick_slider").magnificPopup({
        delegate: ".slider__link",
        type: "image", 
        tLoading: "Загрузка изображения #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: !0,
            navigateByImgClick: !0,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">Изображение #%curr%</a> не может быть загружено.'
        }
    });
    
   
	
});