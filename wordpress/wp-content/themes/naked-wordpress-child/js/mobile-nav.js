$(document).ready(function(){
	var x = $('.main-navigation'); // this is your element
	var w = $(window).width();
	if(w >= 700 && w <= 900) {
    $('body').removeClass(x).addClass('#mobile-navigation');
	} else {
		$('body').addClass(x);
	}
});