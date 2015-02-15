$(document).ready(function() {
	
	$('.people').addClass('ui basic blue button');
	$('.people').click(function(event) {
		event.preventDefault();
		location.hash ='#form';
		
		var $name = $(this).text();
		$('#profname').attr('value',$name);
		$('#title-blurb').text('Tell us what you think about ' + $name);
	});
	$('#formsubmit').submit(function(event) {
		$('#submitpage').addClass('current');
		$('.menu-item').not('submitpage').removeClass('current');
		$('tab-content').not('#formsubmit').css('display','none');
		$('#formsubmit').fadeIn();
		location.hash = '#formsubmit';
		window.scrollTo(0,0);
	});
});	
