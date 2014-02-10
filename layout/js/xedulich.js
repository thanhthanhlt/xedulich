
$("ul").find("li:first-child").addClass("first");
$("ul").find("li:last-child").addClass("last");

$(document).ready(function(e) {
    $( '.tt-banner-slideshow' ).cycle({
		speed: 600,
    	manualSpeed: 100,
		slides:'.banner-slideshow-in',
		pager:'.banner-slideshow-pager'
	});
	 $( '.tt-news-slide' ).cycle({
		speed: 600,
    	manualSpeed: 100,
		slides:'.news-slide-con'
		//pager:'.banner-slideshow-pager'
	});
	
});