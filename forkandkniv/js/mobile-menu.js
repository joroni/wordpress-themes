jQuery(document).ready(function ($) {
	var bodyObj = $("body>#wrap, #header>.wrap");
	var fixedNav = $(".fixed-mobile-nav");
	var navbarInner = $(".navbar-inner");
	var documentObj = $(document);

	documentObj.on('click', ".mobile-menu-toggle", function (e) {
		if(!$(this).hasClass('active')) {
			bodyObj.transition({x: "200px"}, 450);
			$(this).addClass('active');
		} else {
			bodyObj.transition({x: "0px"}, 450);
			$(this).removeClass('active');
		}

		e.preventDefault();
		return false;
	});
});