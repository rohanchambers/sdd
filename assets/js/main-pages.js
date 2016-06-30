// Document ready
$(function(){    

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

    // Fit text plugin
    $('#intro-content h1').fitText(1, { minFontSize: '22px'});

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

function hideNav() {
    $('body').toggleClass('show-nav');
    $('#nav-icon, .overlay').toggleClass('open');
    $('.overlay ul li').removeClass('active');
    $(this).parent().addClass('active');    
}

// Initialisation
var canvasDiv = document.getElementById('particle-canvas');

var options = {
    particleColor: '#FFF',    
    interactive: true,
    speed: 'high',
    density: 'high'
};

var particleCanvas = new ParticleNetwork(canvasDiv, options);




