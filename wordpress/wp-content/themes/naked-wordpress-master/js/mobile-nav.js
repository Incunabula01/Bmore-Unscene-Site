
	var w = $(window).width();
	if(w >= 700 && w <= 900) {
    $('body').removeClass('.main-navigation').addClass('#mobile-navigation')
	} else {
		$('body').addClass('.main-navigation');
	}
