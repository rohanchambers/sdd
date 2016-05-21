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
        }, 750);
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

// $(document).alton({
//     firstClass : 'hero', // Set the first container class
//     bodyContainer: 'what-we-do', // Set the body container
//     scrollMode: 'headerScroll', // Set the scroll mode
// });

// Document ready
$(function(){

    $('.coming-soon p, #slogan p').fitText();

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
        //$('.overlay ul li.overlay-share').toggleClass('show-hide');
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
    //$("#contact-form").validate();

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


}); // End of Document ready


// Document on scroll change nav state
$(document).on('scroll',function(){
    // If scroll top is 400 hide share me from top right of screen
    if($(document).scrollTop() > 400) {
        // Hide social sharing on nav open 
        $('#share-me').removeClass('go');
        $('#share-me').addClass('goAway');
    }

    // Change nav to dark version when sections have white BG
    if( $(document).scrollTop() > 1350){
        $('.page-home .hamburger, #nav-mini, #nav-mini a').addClass('darkNav');

    } else {
        $('.page-home .hamburger, #nav-mini, #nav-mini a').removeClass('darkNav');
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
        title: 'Slam Dunk Digital'   
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
