
$(document).ready(function() {


	$(document).on('click', '.scrollMe', function(event) {
		event.preventDefault()
		console.log('damn it all')

		$button = $(this)
		
		href	= $button.attr('href')
		$target	= $(href)
		console.log($target)

		$(window).scrollTo($target.offset().top - 50, 800)
	})

});