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
			$('#field1').attr('value','');
			$('#field2').attr('value','');
			$('#field3').attr('value','');
			$('#field4').attr('value','');
			$('#field5').attr('value','');
			$('#field6').attr('value','');
		});
		$('#formsubmit').submit(function(event) {
			location.hash = "#submittab";
		});
});

$(window).on("hashchange", function(e) {
	// Display proper content
	$(".tab-content").not(location.hash).css("display", "none");
	$(location.hash).fadeIn();
	$('#field1').attr('value','');
			$('#field2').attr('value','');
			$('#field3').attr('value','');
			$('#field4').attr('value','');
			$('#field5').attr('value','');
			$('#field6').attr('value','');
	$(".menu-item").each(function() {
		if ($(this).find('a').attr("href") == location.hash) {
			$(this).addClass("current");
		} else {
			$(this).removeClass("current");
		}
	});
	
	window.scrollTo(0,0);
	
});