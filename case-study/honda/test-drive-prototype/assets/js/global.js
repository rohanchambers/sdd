	var refine_search = 1; // 0 none, 1 hidden, 2 open
	if (window.location.hash && window.location.hash.match('#route-')) {
		refine_search = parseInt(window.location.hash.replace('#route-', ''));
	}
		
	$(function() {
		// setup page
		var current_car;
		var steps = $('#steps');
		var car_summary = $('#car-summary');
		var chosen_car = $('#chosen-car');
		var chosen_car_img = $('#chosen-car img');
		var map = $('#map');
		var dealers = $('#dealers');
		var car_items = $('#cars');
		car_summary.hide();
		car_summary.children().hide();
		
		dealers.hide();
		
		function activateCar(car) { // if car is null, it will just shut it
			// car.siblings('.refine-search').hide().slideDown();
			var list_item = car.parents('li');
			var list_items = list_item.siblings();
			car_items.children().removeClass('active');
			
			list_items.addClass('inactive');
			list_item.addClass('active');
			
			if (refine_search == 1) {
				$('.car-options').hide();
			}
		}
		
		function deactivateCars() {
			car_items.children().removeClass('active').removeClass('inactive');
			$('.car-options input').attr('checked', '');
			if (refine_search == 1) {
				$('.car-options').hide();
			}
			$('#nav div').removeClass('active');
		}
		
		// nav rollovers
		$('#cars a img')
			.bind('mouseover', function() { this.src = 'img/cars/hovers/' + this.alt + '-hover.png'; })
			.bind('mouseout', function() { this.src = 'img/cars/' + this.alt + '.png'; });
		
		// setup the nav to be clickable
		$('#nav div').bind('click', function() {
			var step = $(this);
			var callback = null;
			if (step.hasClass('active') && !$('#nav').hasClass(this.id)) {
				if (this.id == 'step1') {
					car_summary.hide();	
				}
				if (this.id == 'step2') {
					callback = function() {
						car_summary.show();
					}
				}				
				changeStep(this.id.replace('step', ''), callback);
			}
		});
		
		// choose a car
		if (refine_search == 1 || refine_search == 2) {
			if (refine_search == 1) {
				$('.car-options').hide();
				$('.refine').bind('click', function() {
					$('.preferences').hide();
					$('.refine').slideToggle();
					$(this).siblings('.car-options').slideToggle();
				});
			}
			if (refine_search == 2) {
				$('.refine').hide();
				$('.preferences').hide();
			}
			
			
			$('#cars a').bind('click', function() {
				$('#car-props span').empty();
				$('#nav div').removeClass('active');
				var car = $(this);
				current_car_img = $(this).children('img').clone();
				var car = $(this);
				current_car = $(this).attr('id');
				activateCar(car);
				
				chosen_car.children('img').remove();
				chosen_car.prepend(current_car_img).fadeIn();
				return false;
			});
			$('#cars .close').bind('click', deactivateCars);
			$('.choose-car').bind('click', function() {
				changeStep(2, function() {
					document.getElementById('postcode').focus();
					car_summary.show();
				});
			});
			$('.car-options input').bind('change', function() {
				var prop_id = '';
				if (this.name.match('transmission')) { prop_id = 'transmission'; }
				else if (this.name.match('fuel')) { prop_id = 'fuel'; }
				else if (this.name.match('litre')) { prop_id = 'litre'; }
				
				var prop_value = $(this).parent().text();
				var target = $('#car-'+ prop_id);
				target.text(prop_value);
			}).mousedown(function() { console.log(this.checked); });
		} else {
			var cars = $('#cars a');
			cars.bind('click', function() {
				var car = $(this);
				current_car = $(this).attr('id');
				var current_car_img = $(this).children('img').clone();
				
				// hide before changing to step 2
				map.hide();
				dealers.hide();
				
				changeStep(2, function() {
					car_summary.show();
					chosen_car.children('img').remove();
					chosen_car.prepend(current_car_img).fadeIn();
					document.getElementById('postcode').focus();
				});
				return false;
			});
		}
			
		$('a.btn-change-car').bind('click', function() {
			car_summary.hide();
			dealers.hide();
			map.hide();				
			changeStep(1);
			return false;
		});
		
		// Enter postcode Search
		function postcodeChosen() {
			var postcodefield = document.getElementById('postcode');
			if (postcodefield.value == '') {
				postcodefield.className = 'error';
				document.getElementById('postcode-error').className = 'error';
			} else {
				postcodefield.className = '';
				document.getElementById('postcode-error').className = 'error hidden';
				// Call dealer-map js function to load google map functionality
				dealers.fadeIn();
				map.fadeIn();	
			}
			return false;
		}
		$('#postcodeform').bind('submit', postcodeChosen);
		
		// select your dealer
		var chosen_dealer = $('#chosen-dealer');
		var book_time = $('#btn-book-time');
		$('#select-dealers a').bind('click', function() {
			var current_dealer = $(this).attr('id');
			chosen_dealer.addClass(current_dealer);
			chosen_dealer.fadeIn();
			changeStep(3);
			book_time.hide();
			$('.chosen-title').hide();
			
			// Dealer img clicked for confirmation page 
			var dealer_confirmed_img = $(this).children(':eq(0)');				
			var dealer_confirmed = $('#dealer-confirmed');
			dealer_confirmed.append(dealer_confirmed_img.clone());				
			return false;
		});
		
		// Select your time		
		var chosen_time = $('#chosen-time');
		$('a.btn-change-dealer').bind('click', function() {
			$(chosen_dealer).removeClass();
			$('#dealer-confirmed').empty();
			changeStep(2);
			chosen_dealer.hide();
			chosen_time.fadeOut();
			$('#btn-book-time').fadeIn();
			return false;
		});	
				
		// Book your time	
		$('#btn-book-time').bind('click', function() {
			changeStep(4);
			chosen_time.fadeIn();
			$('a.btn-change-time').bind('click', function() {
				changeStep(3);
				chosen_time.fadeOut();
				return false;
			});
			return false;				
		});	
		
		// Confirmation
		$('#form #form1').bind('submit', function(e) {
			e.preventDefault();
			var details_form = $(this);
			var email_id = $('#email').val();
			$('#users-email').append('<a href="mailto:' + email_id + '">' + email_id + '</a>');
			

			// Check if form is valid to go to next step
			if (details_form.valid()) {
				car_summary.hide();
				$('.display-selected-time').css('float: left');	
				changeStep(5);
			}
			return false;
		});
		$('.btn-view-map').bind('click', function() {
			changeStep(2);
			car_summary.show();
			$('#users-email').empty();
			$('#dealer-confirmed').empty();
		});
	});

	function changeStep(step, oncomplete) {
		// make previous steps active
		$('#nav div:lt(' + (step) + ')').addClass('active');
		if (step == 5) { $('#nav div').removeClass('active');}
		var left = (step - 1) * 960;
		var steps = $('#steps');
		$('#nav').attr('class', 'step' + step);
		
		var anim_properties = { left: -left + 'px' }
		var anim_options = {}
		if (oncomplete) {
			anim_options.complete = oncomplete;
		}
		steps.animate(anim_properties, anim_options);
		$( 'html, body' ).animate( { scrollTop: 0 }, '400' );
	}