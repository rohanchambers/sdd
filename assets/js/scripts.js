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

    $('.pe-thumbs li').hover( function(){    	
    	$(this).css({position : 'relative'});
    }, function(){
    	$(this).css({position : 'initial'});
    });
});

// Toggle with hitting of ESC
$(document).keyup(function(e) {
    if (e.keyCode === 27) {
        $('body').toggleClass('show-nav');
        $('#nav-icon').toggleClass('open');
    }
});