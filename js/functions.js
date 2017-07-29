/**
 * Created by Dananjaya on 7/12/2016.
 */


jQuery(document).ready(function(){
    jQuery("#hide").click(function(){
        jQuery("#show-text").addClass("hide");
        jQuery("#show").removeClass("hide");
        jQuery("#show-text").hide();
    });
    jQuery("#show").click(function(){
        jQuery("#show-text").removeClass("hide");
        jQuery("#show").addClass("hide");
        jQuery("#show-text").show();
    });
});

/* ****************** Read More ****************** */
/*
jQuery(document).ready(function() {
    jQuery(function () {
        jQuery('.content').hide();
        jQuery('a.read').click(function () {
            jQuery(this).parent('.excerpt').hide();
            jQuery(this).closest('.content-read-more').find('.content').slideDown('fast');
            return false;
        });
        jQuery('a.read-less').click(function () {
            jQuery(this).parent('.content').slideUp('fast');
            jQuery(this).closest('.content-read-more').find('.excerpt').show();
            return false;
        });
    });
});
*/

/* ******** header Banner element height ************** */

/* Header Banner Height */
/*
var windowHeight=jQuery(window).height()/1.5;

jQuery('#main-banner').css({

    height:windowHeight+'px'

});



jQuery(window).resize(function(){

    var windowHeight=jQuery(window).height();

    jQuery('#main-banner').css({

        height:windowHeight+'px'

    });



});
*/

/*
 * @param  ***************
 * Home Page slider over video
 */

jQuery(document).ready( function() {
    jQuery('#myCarousel').carousel({
        interval:   4000
    });

    var clickEvent = false;
    jQuery('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        jQuery('#myCarousel .nav li').removeClass('active');
        jQuery(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = jQuery('#myCarousel .nav').children().length -1;
            var current = jQuery('#myCarousel .nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                jQuery('#myCarousel .nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});



// matchHeight
jQuery(function($) {
    $('.why-us-height').matchHeight();
});

jQuery(function($) {
    $('.how-they-main').matchHeight();
});

jQuery(function($) {
    $('.how-they-list').matchHeight();
});

jQuery(function($) {
    $('.accreditations').matchHeight();
});

jQuery(function($) {
    $('.promoimageheight').matchHeight();
});

jQuery(function($) {
    $('.promo-content-height').matchHeight();
});


/*
jQuery(function($) {
    $('.how-they-content').matchHeight();
});
*/

/* ***************** inner page sliders ***************** */

jQuery( document ).ready(function( $ ) {
	$( '#inner-page-top-slider' ).sliderPro({    
		width: 1324,     
		height: 600,   
		orientation: 'vertical',
		loop: false,     
		arrows: true,   
		buttons: false,     
		thumbnailsPosition: 'left',    
		thumbnailPointer: true,
		thumbnailWidth: 190,    
		thumbnailHeight: 111,    
		breakpoints: {		
		1400: {           
		thumbnailsPosition: 'left',
		thumbnailPointer: true,          
		thumbnailWidth: 190,           
		thumbnailHeight: 111      
		},		
		1024: { 
		thumbnailsPosition: 'left',		
		thumbnailPointer: true,          
		thumbnailWidth: 190,          
		thumbnailHeight: 111    
		},      
		800: {          
		thumbnailsPosition: 'bottom',     
		thumbnailWidth: 190,           
		thumbnailHeight: 111    
		},     
		500: {         
		thumbnailsPosition: 'bottom',     
		thumbnailWidth: 120,             
		thumbnailHeight: 50      
		}    
		
		}   
	});
	
	var windowHeight=jQuery(window).height()/1.5;
	
	$( '#inner-page-bottom-slider' ).sliderPro({
        /*width: 960,
        height: 500,*/
        width: window.innerWidth,
        height: 600,
        arrows: true,
        buttons: false,
        waitForLayers: false,
        thumbnailWidth: 0,
        thumbnailHeight: 0,
        thumbnailPointer: false,
        autoplay: true,
        autoScaleLayers: false,
        breakpoints: {
            1400: {
                width: window.innerWidth,
				height: windowHeight,
            }
        }
    });
	
	});
	
	
	
	
/* *********** search ************ */
	
jQuery(function($){
	$("#search-btn").click(function(){
		$("#search-form").removeClass('hide');
	});
	$(".search-close-btn").click(function(){
		$("#search-form").addClass('hide');
	});
});




//pre load animation
//paste this code under the head tag or in a separate js file.
// Wait for window load
/*
jQuery(window).load(function() {
	// Animate loader off screen
	jQuery(".se-pre-con").fadeOut("slow");;
});
*/


/* ****************** detect IE 8 or less and alert ******************** */

var ie = (function(){

    var undef,
        v = 3,
        div = document.createElement('div'),
        all = div.getElementsByTagName('i');

    while (
        div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
        all[0]
    );

    return v > 4 ? v : undef;

}());

jQuery(document).ready(function(){
	if(ie < 9){
		
		var para = document.createElement("P");                       // Create a <p> node
		var t = document.createTextNode("You are currently on an outdated version of Internet Explorer. Please Update your browser in order to view this website");      // Create a text node
		para.appendChild(t);                                          // Append the text to <p>
		document.getElementById("preLoaderWrapper").appendChild(para);           // Append <p> to <div> with id="myDIV"
		
	}else{
		//pre load animation
		//paste this code under the head tag or in a separate js file.
		// Wait for window load		
		jQuery(window).load(function() {
			// Animate loader off screen
			jQuery(".se-pre-con").fadeOut("slow");
		});
	}
});


