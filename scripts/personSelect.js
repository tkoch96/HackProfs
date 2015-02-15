$(document).ready(function() {
	console.log("Hello world");
	$('.people a').click(function(event) {
		var $name = $(this).text();
		$('#profname').attr('value',$name);
		$('#title-blurb').text('Tell us what you think about ' + $name);
	});
});	
