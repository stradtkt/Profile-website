$(document).ready(function() {
	$('.header').delay(500).slideDown(1000);
  $('.fa-fa-fa').delay(1600).fadeIn(500);
});//End ready



  $('.form-group input').focus(function() {
    $(this).css('box-shadow', '1.8px 1.8px 10px #222, 2.5px 3px 4px dodgerblue');
    $(this).css('-webkit-box-shadow', '1.8px 1.8px 10px #222, 2.5px 3px 4px dodgerblue');
    $(this).css('-moz-box-shadow', '1.8px 1.8px 10px #222, 2.5px 3px 4px dodgerblue');
  });
  $('.form-group textarea').focus(function() {
    $(this).css('box-shadow', '1.8px 1.8px 10px #222, 2.5px 3px 4px dodgerblue');
    $(this).css('-webkit-box-shadow', '1.8px 1.8px 10px #222, 2.5px 3px 4px dodgerblue');
    $(this).css('-moz-box-shadow', '1.8px 1.8px 10px #222, 2.5px 3px 4px dodgerblue');
  });




	//Form validation
	//fields listed below are the fields being validated
		$(document).ready(function() {
	jQuery.validator.setDefaults({
  success: "valid"
});//End setDefaults
$( "#myForm" ).validate({
  rules: {
    email: {
      required: true,
      email: true
    },
    name: {
    	required: true,
    	minlength: 2
    },
    message: {
    	required: true,
    	minlength: 5
    }
  },
  messages: {
  	name: {
  		required: "You need to fill out your name",
  		minlength: "You need to have minimum of 2 letters"
  	},
  	email: {
  		required: "You need to fill out your email",
  		email: "That was not a valid email"
  	},
  	message: {
  		required: "You need to fill out the message",
  		minlength: "You need to have at least 5 characters"
  	}
  },
  errorElement: "em",
  errorPlacement: function(error, element) {
  	error.addClass('error-message');
  	if(element.prop('name') === 'name') {
  		error.insertAfter(element.parent('label'));
  	} else {
  		error.insertAfter(element);
  	}
  	if(element.prop('name') === 'email') {
  		error.insertAfter(element.parent('label'));
  	} else {
  		error.insertAfter(element);
  	}
  	if(element.prop('name') === 'message') {
  		error.insertAfter(element.parent('textarea'));
  	} else {
  		error.insertAfter(element);
  	}
  },
success: function ( label, element ) {
		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !$( element ).next( "span" )[ 0 ] ) {
			$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
		}
},
highlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-sm-8" ).addClass( "has-error" ).removeClass( "has-success" );
},
unhighlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-sm-8" ).addClass( "has-success" ).removeClass( "has-error" );
	}

	});
});


//end of the form validation

//treehouse function
$(document).ready(function() {
  $('.report-card.treehouse').reportCard({
      userName: 'kevinstradtman',
      site: 'treehouse',
      badgesAmount: 7,
      tooltips: true
  });
});

//udemy function
$(document).ready(function() {
  $('#udemy-tr').reportCard({
      userName: 'Kevin-T-Stradtman',
      site: 'udemy',
      courses: 20,
      tooltips: true
  });
});

        //Main header text function
$(function() {
  $('.first-h1').delay(1500).slideDown(1000);
  $('.first-h1').delay(1000).fadeOut(320);
  $('.second-h1').delay(4200).fadeIn(1200);
}());


// (function() {
// 	var googleURL = 'https://maps.googleapis.com/maps/api/geocode/json?address=1217%20Glen%20Haven%20Ln%20Batavia';
//
// 	var dataOptions = {
// 		dataType: 'json'
// 	};


// 	function getMap(data) {
// 		var items;
//
// 		$.each(data.results, function(i, address) {
// 			items = '<h1>'+ address.formatted_address +'</h1>';
// 			items += '<p class="lead">'+ address.geometry.bounds.northeast.lat +'</p>';
// 			items += '<p class="lead">'+ address.geometry.bounds.northeast.lng +'</p>';
//
// 			$('#udemy-tr').append(items);
// 		});
// 	}
//
// 	$.getJSON(googleURL, dataOptions, getMap);
//
//
//
// }());
