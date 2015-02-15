$(document).ready(function() {
	$('.people > a').click(function(event) {
		$('#profname').attr('value',$(this).text());
		$('#title-blurb').text('Tell us what you think about ' + $(this).text());
	});
});