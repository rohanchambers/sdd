$(college_map);

function college_map() {
    
	// Hide the addresses
	$('#colleges-map-list address').hide();

	// Default map location
	var marker_img = 'img/global/map-icon.png';
	
	// setup map
	var mapOptions = {
		zoom: 9,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
	
	// Set the geocoder
	var geocoder = new google.maps.Geocoder();
	
	// Get the postcodes from the address tags
	$('#dealers-map-list li').each(function(i) {
		var college = $(this);
		var postcode = college.find('.postcode').text();
		
		geocoder.geocode({address: postcode}, function(results, status) { placeMarker(results, status, i); });
	});
	
	// set marker function
	function placeMarker(results, status, i) {
		if (status == google.maps.GeocoderStatus.OK) {
			var newlatlng = results[0].geometry.location;
			var collegeMarker = new google.maps.Marker({
				position: newlatlng,
				map: map,
				icon: marker_img
			});
			if (i == 0) {
				map.setCenter(newlatlng);
			}
		}
	}
	setTimeout(function() {
		document.getElementById('map').style.display = 'none';
	}, 1000);
}

/*
* Callback functions called asyncronously
* .each in jQuery
*/