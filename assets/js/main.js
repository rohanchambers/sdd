// Animate speed scroll
var speed = 1000;

// Defining a function to set height size for #home slide to take up the whole screen (Home page)
function fullscreen(){
    $('#home, .overlay').css({
        height: jQuery(window).height()
    });
}

// Scroll to sections
function scrollToSections() {
    // Scroll by end of section arrows and main nav
    $('.overlay ul li, .scroll-down').find('a').click(function(e) {

        var section = $(this).attr('href').split('#')[1];

        $('html, body').animate({
            scrollTop: $('.' + section).offset().top + 1 + 'px'
        }, speed);
    });

    // Back to the top button
    $('#back-to-top').click( function(){
        $('html, body').animate({ scrollTop: $('#home').offset().top}, speed);
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

// Initialisation of particles
var canvasDiv = document.getElementById('particle-canvas');
var options = {
    particleColor: '#FFF',
    interactive: false,
    speed: 'high',
    density: 'high'
};
var particleCanvas = new ParticleNetwork(canvasDiv, options);

function isMobile() {
    return /Android|webOS|iPad|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

// Document ready
$(function(){
    // Add parallax to intro copy only for desktop otherwise
    // mobile vertical center alignment is off
    var windowHeight = jQuery(window).height()

    if ( windowHeight > 375 ) {
        $('#intro-parallax').addClass('active');
        // Create cross browser requestAnimationFrame method:
        window.requestAnimationFrame = window.requestAnimationFrame
         || window.mozRequestAnimationFrame
         || window.webkitRequestAnimationFrame
         || window.msRequestAnimationFrame
         || function(f){setTimeout(f, 1000/60)}

        var slogan = document.getElementById('intro-parallax')

        function parallax(){
            var scrolltop = window.pageYOffset // get number of pixels document has scrolled vertically
            // 145 is the same in the css and the the position the element starts before parallax starts
            slogan.style.top = -scrolltop * .4 - 145 + 'px' // move bubble1 at 20% of scroll rate
        }

        window.addEventListener('scroll', function(){ // on page scroll
            requestAnimationFrame(parallax) // call parallaxbubbles() on next available screen paint
        }, false)
    }

    // What we do, show hide content. Click or hover depending on devcie state
    if (isMobile()) {
        $('.show-hide').click( function(e){
            e.preventDefault();
            $('#what-we-do').toggleClass('switch-text');
        });
    } else {
        $('.show-hide').hover( function(){
            $('#what-we-do').toggleClass('switch-text');
        });
    }

    // Remove from DOM mobile BG video on main navigation
    if (isMobile()) {
        $('#space-video').remove();
    }

    // Fit text js plugin
    $('#slogan p, .view .mask h2, .view .mask p').fitText(1, {maxFontSize: '80px' });

    // Mini Nav bullets section scroll
    $('#nav-mini').eavesdrop();

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
        $('html, body').animate({scrollTop : goToNextSlide}, speed);
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

    // Prevent default links
    $('#follow-us a').click( function(e){
        e.preventDefault();
    });

    // Validate form
    $("#contact-form").validate();

    $('#btn-submit').click( function(){
        $('#contact-form').submit();
    });

    // FUNCTION CALLS

    // Home page to be full Height at all resolutionss
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

    // Back to top show hide after home page
    var homeSectionHeight = $('#home').height();

    if( $(document).scrollTop() > homeSectionHeight) {
            $('#back-to-top').fadeIn().addClass('buttonTopPulse');
        } else {
            $('#back-to-top').fadeOut().removeClass('buttonTopPulse');
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
        scrollwheel: false,
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
          '<p>Slam Dunk Digital is a creative and digital collective that specialises in user friendly web design and development...  ' +
          '<p>CTB Studios,<br> Angel High Street<br> London,<br> N1 0YL, UK</p>'+
          '<p>Website: <a href="http://slamDunkDigital.com/" target="_blank">'+
          'http://www.slamDunkDigital.com</a> <br>'+
          'Email: <a href="mailto:info@slamDunkDigital.com">'+
          'info@slamDunkDigital.com</a><br>'+
          'Phone: <a href="tel:+447917044052">+44 (0)79 170 44 052</a>'+
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