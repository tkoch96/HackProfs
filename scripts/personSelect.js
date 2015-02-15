$(document).ready(function() {
	
	$('.people').addClass('ui basic blue button');
	$('.people a').click(function(event) {
		var $name = $(this).text();
		$('#profname').attr('value',$name);
		$('#title-blurb').text('Tell us what you think about ' + $name);
	});
	$('#formsubmit').submit(function(event) {
		event.preventDefault();
		location.hash = '#formsubmit';
		$('#formsubmit').fadeIn();
	});
});	
