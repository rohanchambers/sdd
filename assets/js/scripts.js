// Defining a function to set size for #home (Home page) 
function fullscreen(){
    $('#home').css({
        //width: jQuery(window).width(),
        height: jQuery(window).height()
    });
}

// Scroll to sections 
function scrollToSections() {
    // Scroll to sections
    $('.overlay ul li').find('a').click(function(e) {
        e.preventDefault();
        
        var section = $(this).attr('href');
        
        $('html, body').animate({
            scrollTop: $(section).offset().top
        });
    });

    // Add class of active on items for main and mini nav.
    // Hide sharing functionality as zindex would be too higher. Fixme
    $('.overlay ul li a, #nav-mini a').click( function(){
        $('.overlay ul li.overlay-share').toggleClass('show-hide');
        $('.overlay ul li a').removeClass('active');
        $(this).addClass('active');
    });
}

function hideNav() {
    $('body').toggleClass('show-nav');
    $('#nav-icon, .overlay').toggleClass('open');
    $('.overlay ul li').removeClass('active');
    $(this).parent().addClass('active');    
}

$(document).alton({
    firstClass : 'hero', // Set the first container class
    bodyContainer: 'what-we-do', // Set the body container
    scrollMode: 'headerScroll', // Set the scroll mode
});

// Document ready
$(function(){

    // Mini Nav bullets section scroll
    $('#nav-mini ul').eavesdrop({
        watchClass: 'eavesdrop',
        activeClass: 'active',
        trackUrl: true        
    });

    // For testing only: On load scroll to section position | fixme
    //$('html, body').animate({ scrollTop: $('#clients').offset().top + 800 }, 1000);

    // Hide fullscreen nav and hover active states
    $('.overlay ul li a').click( function(){
        hideNav();
    });

    // Bind a click event to anything with the class 'toggle-nav'
    $('.hamburger').click(function() {  
        // Toggle the Body Class 'show-nav'
        $('body').toggleClass('show-nav');
        $('#nav-icon').toggleClass('open');
        // Hide social sharing on nav open 
        $('#share-me').removeClass('go');
        $('#share-me').addClass('goAway');
        $('.overlay ul li.overlay-share').toggleClass('show-hide');
        // Deactivate the default behavior of going to the next page on click
        return false;
    });

    // Disable clicks of thumbs on the  'what-we-do' section
    $('.pe-thumbs li').click( function(e){      
        e.preventDefault();
    });

    // Small hack | What we do proximity effect add relative to li's
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

    // Show hide value of form inputs and textarea
    $('#contact-form input, #contact-form textarea').each(function(){
        var txtval = $(this).val();
        $(this).focus(function(){
            if($(this).val() == txtval){
                $(this).val('');
                $(this).siblings('span').css({width: '100%'});
            }
        });
        $(this).blur(function(){
            if($(this).val() == ""){
                $(this).val(txtval);
                $(this).siblings('span').css({width: '0%'});
            }
        });
    });

    // Validate form
    $("#contact-form").validate();

    $('#btn-submit').click( function(){
        $('#contact-form').submit();
    });
    
    // FUNCTION CALLS

    // Home page to be fulld Height at all resolutionss
    fullscreen();

    // Run the function in case of window resize
    $(window).resize(function() {
        fullscreen();
    });

    // On click of Main Nav and Mini items 
    scrollToSections();

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

}); // End of Document ready


// Document on scroll change nav state
$(document).on('scroll',function(){
    // If scroll top is 400 + show hide intro paragraph
    if($(document).scrollTop() > 400) {
        // Hide social sharing on nav open 
        $('#share-me').removeClass('go');
        $('#share-me').addClass('goAway');
    }

    // Change nav to dark version when sections have white BG
    if( $(document).scrollTop() > 2050){
        $('.hamburger, #nav-mini, #nav-mini a').addClass('darkNav');

    } else {
        $('.hamburger, #nav-mini, #nav-mini a').removeClass('darkNav');
    }
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
     
    var slamDunkDigital = {lat: 51.534377, lng: -0.105573};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: slamDunkDigital
    });

    var image = '../assets/img/global/map_icon.png';

    var slamDunkDigitalMarker = new google.maps.Marker({
        position: slamDunkDigital,
        map: map,
        icon: image,
        title: 'Slamu Dunk Digital'   
    });

    var contentString = '<div id="map-info">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">Welcome to Slam Dunk Digital</h1>'+
          '<div id="bodyContent">'+
          '<p>We repair and improve all of your handheld devices and home computers. ' +
          '<p>CTB Studios,<br> Angel High Street<br> London,<br> N1 0YL, UK</p>'+
          '<p>Website: <a href="http://slamDunkDigital.co.uk/" target="_blank">'+
          'http://slamDunkDigital.co.uk/</a> <br>'+
          'Email: <a href="@mailto:info@slamDunkDigital.co.uk/">'+
          'info@slamDunkDigital.co.uk</a><br>'+
          'Phone: <a href="tel:+447917044058">+44 (0)79 170 44 058</a>'+   
          '</div>'+
      '</div>';

    var infowindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 450
    });

    slamDunkDigitalMarker.addListener('click', function() {
        infowindow.open(map, slamDunkDigitalMarker);
    });
}
