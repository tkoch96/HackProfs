$(document).ready(function() {
	location.hash='#home';
	$('#home').fadeIn();
    $(".menu-item").click(function(event) {
        event.preventDefault();
        $(this).addClass("current");
        $(this).siblings().removeClass("current");
        var tab = $(this).find('a').attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
		location.hash = $(this).find('a').attr('href');
		
		window.scrollTo(0,0);
	});
		
		$('.people').addClass('ui basic blue button');
		$('.people').click(function(event) {
			event.preventDefault();
			location.hash = 'form';
			
			var $name = $(this).text();
			$('#profname').attr('value',$name);
			$('#title-blurb').text('Tell us what you think about ' + $name);
			window.scroll(0,0);
			$('form > textarea').val('');
		});
		$('#formsubmit').submit(function(event) {
			location.hash = "#submittab";
		});
});

$(window).on("hashchange", function(e) {
	// Display proper content
	$(".tab-content").not(location.hash).css("display", "none");
	$(location.hash).fadeIn();
	
	$(".menu-item").each(function() {
		if ($(this).find('a').attr("href") == location.hash) {
			$(this).addClass("current");
		} else {
			$(this).removeClass("current");
		}
	});
	
	window.scrollTo(0,0);
	
});