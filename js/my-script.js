
jQuery(document).ready(function($){

	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    }
	});	

	/******************
	Slick Slider
	*******************/
	
	$('.gallery-responsive').slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
  		autoplaySpeed: 3000,  		
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: false
		      }
		    },
		    {
		      breakpoint: 668,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});


	/******************
	Magnific Popup 
	*******************/

	// Initialize popup as usual
	$('.image-link').magnificPopup({
	type: 'image',

	gallery: {
	// options for gallery
	enabled: true
	},

	mainClass: 'mfp-with-zoom', // this class is for CSS animation below

	zoom: {
	  enabled: true, // By default it's false, so don't forget to enable it

	  duration: 300, // duration of the effect, in milliseconds
	  easing: 'ease-in-out', // CSS transition easing function

	  // The "opener" function should return the element from which popup will be zoomed in
	  // and to which popup will be scaled down
	  // By defailt it looks for an image tag:
	  opener: function(openerElement) {
	    // openerElement is the element on which popup was initialized, in this case its <a> tag
	    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
	    return openerElement.is('img') ? openerElement : openerElement.find('img');
	  }
	}

	});

	/******************
	Flex Slider
	*******************/

	/*$('.flexslider').flexslider();*/	
});


    