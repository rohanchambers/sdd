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

    // Proximity effect
    var Photo   = (function() {
        
            // list of thumbs
        var $list       = $('#pe-thumbs'),
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
            init    : init
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
    var slamDunkDigital = {lat: 51.532659, lng: -0.105980};

    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: slamDunkDigital
    });

    // var image = 'https://phoneresq.com/wp-content/themes/phoneResq/assets/images/global/mapPin.png';
    // var slamDunkDigitalMarker = new google.maps.Marker({
    //     position: slamDunkDigital,
    //     map: map,
    //     icon: image,
    //     title: 'Phone ResQ'     
    // });

    // var contentString = '<div id="map-info">'+
    //       '<div id="siteNotice">'+
    //       '</div>'+
    //       '<h1 id="firstHeading" class="firstHeading">Welcome to Phone ResQ</h1>'+
    //       '<div id="bodyContent">'+
    //       '<p>We repair and improve all of your handheld devices and home computers. ' +
    //       '<p>1001 Atlantic Avenue,<br> Suite B,<br> Fernandina Beach,<br> Florida, 32034</p>'+
    //       '<p>Website: <a href="http://phoneResq.com/" target="_blank">'+
    //       'http://phoneresq.com/</a> <br>'+
    //       'Email: <a href="@mailto:phoneresq@gmail.com">'+
    //       'phoneresq@gmail.com</a><br>'+
    //       'Phone: <a href="tel:9043100059">(904) 310-0059</a>'+   
    //       '</div>'+
    //   '</div>';

    var infowindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 450
    });

    slamDunkDigitalMarker.addListener('click', function() {
        infowindow.open(map, slamDunkDigitalMarker);
    });
}