jQuery(document).ready(function ($) {
	var documentObj = $(document);

	var frames = $(".frame");
	var firstPanel = $( ".panel.frame-0, .panel.story-item.first" );
	var firstFrame = $(".frame-0");
	var animating = false,
	secondsPassed = 0;

	setInterval(function () {
		var newFrame, newActive;

		if(secondsPassed >= 3) {
			if( $(".frame.active").hasClass('frame-5') ) {
				newFrame = firstFrame;
				newActive = firstPanel;
			} else {
				newFrame = $( $(".frame.active").next() );
				newActive = $( $(".panel.active").next() );
			}

			iterateFrame( newFrame, newActive );
		} else {
			secondsPassed++;
		}
	}, 1000);

	documentObj.on('mouseover', ".story-item", function (e) {
		var newFrame = $('.' + $(this).attr('data-target'));

		$(".story-item.active").removeClass('active');
		$(this).addClass('active');

		iterateFrame( newFrame );

		e.preventDefault();
		return false;
	});

	function iterateFrame( newFrame, newActive ) {
		if(animating) {
			frames.stop(true, true);
		}

		if(!newFrame.hasClass('active')) {
			newFrame.css({'display': 'block'});
			animating = true;
			secondsPassed = 0;
			$(".frame.active").fadeOut( 400, function () {

				if(!newActive) {
					$(".frame.active").removeClass('active');
					newFrame.addClass('active');
				} else {
					$(".panel.active").removeClass('active');
					newActive.addClass('active');
				}

				animating = false;
			});
		}
	}

});