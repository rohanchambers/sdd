$(document).ready(function(){

    // For texting only: On load scroll to position | fixme
    //$('html, body').animate({ scrollTop: $('#contact').offset().top + 800 }, 1000);

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

    // What we do proximity effect add relative to li's
    $('.pe-thumbs li').hover( function(){
    	$(this).css({position : 'relative'});
    }, function(){
    	$(this).css({position : 'initial'});
    });

    // Icon mouse show hide intro text only if it hasn't scrolled down
    $('.icon-animate').click( function(){
        var goToNextSlide = jQuery(window).height();
        $('html, body').animate({scrollTop : goToNextSlide}, 800);
    });

    $('.overlay ul li a').click( function(){
          $('body').toggleClass('show-nav');
          $('#nav-icon, .overlay').toggleClass('open');
    });

    // Scroll to sections
    $('.overlay ul li a').find('a').click(function(e) {
        e.preventDefault();
        
        var section = $(this).attr('href');
        
        $('html, body').animate({
            scrollTop: $(section).offset().top
        });
    });


    // Proximity effect
    var Photo   = (function() {
        
            // list of thumbs
            var $list   = $('#pe-thumbs'),
            // list's width and offset left.
            // this will be used to know the position of the description container
            listW       = $list.width(),
            listL       = $list.offset().left,
            // the images
            $elems      = $list.find('img'),
            // the description containers
            $descrp     = $list.find('div.pe-description'),
            // maxScale : maximum scale value the image will have
            // minOpacity / maxOpacity : minimum (set in the CSS) and maximum values for the image's opacity
            settings    = {
                maxScale    : 1.3,
                maxOpacity  : 0.9,
                minOpacity  : Number( $elems.css('opacity') )
            },
            init        = function() {
                
                // minScale will be set in the CSS
                settings.minScale = _getScaleVal() || 1;
                // preload the images (thumbs)
                _loadImages( function() {
                    
                    _calcDescrp();
                    _initEvents();
                
                });
            
            },
            // Get Value of CSS Scale through JavaScript:
            // http://css-tricks.com/get-value-of-css-rotation-through-javascript/
            _getScaleVal= function() {
            
                var st = window.getComputedStyle($elems.get(0), null),
                    tr = st.getPropertyValue("-webkit-transform") ||
                         st.getPropertyValue("-moz-transform") ||
                         st.getPropertyValue("-ms-transform") ||
                         st.getPropertyValue("-o-transform") ||
                         st.getPropertyValue("transform") ||
                         "fail...";

                if( tr !== 'none' ) {    

                    var values = tr.split('(')[1].split(')')[0].split(','),
                        a = values[0],
                        b = values[1],
                        c = values[2],
                        d = values[3];

                    return Math.sqrt( a * a + b * b );
                
                }
                
            },
            // calculates the style values for the description containers,
            // based on the settings variable
            _calcDescrp = function() {
                
                $descrp.each( function(i) {
                
                    var $el     = $(this),
                        $img    = $el.prev(),
                        img_w   = $img.width(),
                        img_h   = $img.height(),
                        img_n_w = settings.maxScale * img_w,
                        img_n_h = settings.maxScale * img_h,
                        space_t = ( img_n_h - img_h ) / 2,
                        space_l = ( img_n_w - img_w ) / 2;
                    
                    $el.data( 'space_l', space_l ).css({
                        height  : settings.maxScale * $el.height(),
                        top     : -space_t,
                        left    : img_n_w - space_l
                    });
                
                });
            
            },
            _initEvents = function() {
            
                $elems.on('proximity.Photo', { max: 80, throttle: 10, fireOutOfBounds : true }, function(event, proximity, distance) {
                    
                    var $el         = $(this),
                        $li         = $el.closest('li'),
                        $desc       = $el.next(),
                        scaleVal    = proximity * ( settings.maxScale - settings.minScale ) + settings.minScale,
                        scaleExp    = 'scale(' + scaleVal + ')';
                    
                    // change the z-index of the element once it reaches the maximum scale value
                    // also, show the description container
                    if( scaleVal === settings.maxScale ) {
                        
                        $li.css( 'z-index', 1000 );
                        
                        if( $desc.offset().left + $desc.width() > listL + listW ) {
                            
                            $desc.css( 'left', -$desc.width() - $desc.data( 'space_l' ) );
                        
                        }
                        
                        $desc.fadeIn( 800 );
                        
                    }   
                    else {
                        
                        $li.css( 'z-index', 1 );
                    
                        $desc.stop(true,true).hide();
                    
                    }   
                    
                    $el.css({
                        '-webkit-transform' : scaleExp,
                        '-moz-transform'    : scaleExp,
                        '-o-transform'      : scaleExp,
                        '-ms-transform'     : scaleExp,
                        'transform'         : scaleExp,
                        'opacity'           : ( proximity * ( settings.maxOpacity - settings.minOpacity ) + settings.minOpacity )
                    });

                });
            
            },
            _loadImages = function( callback ) {
                
                var loaded  = 0,
                    total   = $elems.length;
                
                $elems.each( function(i) {
                    
                    var $el = $(this);
                    
                    $('<img/>').load( function() {
                        
                        ++loaded;
                        if( loaded === total )
                            callback.call();
                        
                    }).attr( 'src', $el.attr('src') );
                
                });
            
            };
        
        return {
            init:init
        };
    
    })();
    
    Photo.init();

});

// Toggle with hitting of ESC
$(document).keyup(function(e) {
    if (e.keyCode === 27) {
        $('body').toggleClass('show-nav');
        $('#nav-icon, .overlay').toggleClass('open');
    } 
});

// Load Google maps
function initMap() {
  var myLatLng = {lat: -25.363, lng: 131.044};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}

