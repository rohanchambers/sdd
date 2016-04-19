$(document).ready(function(){
	// Defining a function to set size for #hero 
	function fullscreen(){
	    $('#home').css({
	        width: jQuery(window).width(),
	        height: jQuery(window).height()
	    });
	}

	fullscreen();

	// Run the function in case of window resize
	$(window).resize(function() {
	   fullscreen();         
	});

    // Bind a click event to anything with the class 'toggle-nav'
    $('.hamburger').click(function() {  
          // Toggle the Body Class 'show-nav'
          $('body').toggleClass('show-nav');
          $('#nav-icon').toggleClass('open');
          // Deactivate the default behavior of going to the next page on click 
          return false;
    });   

    $('.pe-thumbs li').click( function(e){    	
    	e.preventDefault();
    });
    // Proximity
                // var Photo   = (function() {
                        
                //         // list of thumbs
                //     var $list       = $('#pe-thumbs'),
                //         // the images
                //         $elems      = $list.find('img'),
                //         // maxScale : maximum scale value the image will have
                //         // minOpacity / maxOpacity : minimum (set in the CSS) and maximum values for the image's opacity
                //         settings    = {
                //             maxScale    : 1.4,
                //             maxOpacity  : 0.9,
                //             minOpacity  : Number( $elems.css('opacity') )
                //         },
                //         init        = function() {
                            
                //             // minScale will be set in the CSS
                //             settings.minScale = _getScaleVal() || 1;
                //             _initEvents();
                        
                //         },
                //         // Get Value of CSS Scale through JavaScript:
                //         // http://css-tricks.com/get-value-of-css-rotation-through-javascript/
                //         _getScaleVal= function() {
                        
                //             var st = window.getComputedStyle($elems.get(0), null),
                //                 tr = st.getPropertyValue('-webkit-transform') ||
                //                      st.getPropertyValue('-moz-transform') ||
                //                      st.getPropertyValue('-ms-transform') ||
                //                      st.getPropertyValue('-o-transform') ||
                //                      st.getPropertyValue('transform') ||
                //                      'fail...';

                //             if( tr !== 'none' ) {    

                //                 var values = tr.split('(')[1].split(')')[0].split(','),
                //                     a = values[0],
                //                     b = values[1],
                //                     c = values[2],
                //                     d = values[3];

                //                 return Math.sqrt( a * a + b * b );
                            
                //             }
                            
                //         },
                //         _initEvents = function() {
                            
                //             // the proximity event
                //             $elems.on('proximity.Photo', { max: 80, throttle: 10, fireOutOfBounds : true }, function( event, proximity, distance ) {
                                
                //                 var $el         = $(this),
                //                     $li         = $el.closest('li'),
                //                     scaleVal    = proximity * ( settings.maxScale - settings.minScale ) + settings.minScale,
                //                     scaleExp    = 'scale(' + scaleVal + ')';
                                
                //                 // change the z-index of the element once it reaches the maximum scale value
                //                 ( scaleVal === settings.maxScale ) ? $li.css('z-index', 1000 ) : $li.css( 'z-index', 1 );
                                
                //                 $el.css({
                //                     '-webkit-transform' : scaleExp,
                //                     '-moz-transform'    : scaleExp,
                //                     '-o-transform'      : scaleExp,
                //                     '-ms-transform'     : scaleExp,
                //                     'transform'         : scaleExp,
                //                     'opacity'           : ( proximity * ( settings.maxOpacity - settings.minOpacity ) + settings.minOpacity )
                //                 });

                //             });
                        
                //         };
                    
                //     return {
                //         init    : init
                //     };
                
                // })();
                
                // Photo.init();


});

// Toggle with hitting of ESC
$(document).keyup(function(e) {
    if (e.keyCode === 27) {
        $('body').toggleClass('show-nav');
        $('#nav-icon').toggleClass('open');
    }
});