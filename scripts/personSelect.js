$(document).ready(function() {
	$('.people').click(function(event) {
		var $person = $(this).text();
	}
	$('#title-blurb').text('Tell us what you think about ' + $person.text());