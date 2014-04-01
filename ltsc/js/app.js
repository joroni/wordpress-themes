
(function () {
	/*
	 var initAmChart1 = function() {
		AmCharts.makeChart("amchart1", {
			type: "serial",
			theme: "darkBlue",
			dataProvider: [
				{
					"month": 'Jan',
						"height": 0.8,
						"line": 0
				},
				{
					"month": 'Feb',
						"height": 1.08,
						"line": 0.5
				},
				{
					"month": 'Mar',
						"height": 2,
						"line": 1
				},
				{
					"month": 'Apr',
						"height": 1.85,
						"line": 1.4
				},
				{
					"month": 'May',
						"height": 2.2,
						"line": 1.8
				},
				{
					"month": 'Jun',
						"height": 2.8,
						"line": 2.3
				}
			],
			categoryField: "month",
			startDuration: 1,
			rotate: false,

			categoryAxis: {
				gridPosition: "start"
			},
			valueAxes: [{
				position: "left",
			}],
			graphs: [{
				type: "column",
				//title: "Height",
				valueField: "height",
				fillAlphas: 1,
				//balloonText: "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>"
			}, {
				type: "line",
				//title: "Line",
				valueField: "line",
				lineThickness: 2,
				bullet: "round",
				//balloonText: "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b></span>"
			}],
			legend: false

		});
	};
	*/

	$(document).ready(function() {

		//
		// Header form input focus classes
		//

		$headerFormInputs = $('.headerForm .formList input')

		$headerFormInputs.on('focusin focusout', function() {
			$input = $(this)
			$li = $input.closest('li')

			$li.toggleClass('active')
		})

		$(document).on('click', '.headerForm-button', function (e) {
			var btn = $(this);

			if( !btn.attr('disabled') ) {

				btn.html("Sending...").attr('disabled', 'disabled');

				$.ajax({
					url: "/wp-content/themes/ltsc/mail/email.php",
					type: 'GET',
					dataType: 'html',
					data: $(".headerForm form").serialize(),
					success: function (response) {
						if( JSON.parse(response).success ) {
							btn.html('Thank you!');
						} else {
							btn.attr('disabled', false).html('FIND OUT HOW');
						}
					}
				});
			}

			e.preventDefault();
			return false;
		})

		//
		// On scroll sliding text fade animation on body .showcase list
		//

		var $list			= $('.showcaseList')
		var $listItems		= $list.children()
		var $lastListItem	= $list.last()

		$listItems.each(function() {
			var $item = $(this)
			$item.css({ position: 'relative', left: '70px', opacity: '0' })
		})

		$(window).on('scroll.slider', function() {
			if ( $lastListItem.is(':in-viewport') ) {
				// Make sure it doesnt go off again by removing any .slider events
				$(window).unbind('.slider')

				// Maybe make this into its own function
				var baseTime	= 300
				var time		= 0
				$listItems.each(function () {
					var $item = $(this)
					setTimeout(
						function() {
							$item.animate(
								{
									left: 0,
									opacity: 1
								},
								500
							)
						},
						( time = time + baseTime )
					)
				})
			}
		})

		//
		// On scroll shaking button animation
		//

		/*
		var $seperatorButton	= $('.seperatorButton')
		var $webinarButtonEvent	= $('#webinarButtonEvent')

		$(window).on('scroll.buttonShakeWebinar', function() {
			if ( $webinarButtonEvent.is(':in-viewport') ) {
				$(window).unbind('.buttonShakeWebinar')

				setTimeout(
					function() {
						$seperatorButton.addClass('animated').addClass('shake')
					},
					500
				)
			}
		});

		*/
	
		var $seperatorButton	= $('.seperatorButton')
		var $body				= $('body')
		var $logo				= $('.logo')
		var $headerFormBlurb	= $('.headerForm-blurb')
		var $headerFormName		= $('.headerForm input[name=name]')
		var $headerFormForm		= $('.headerForm form')

		$seperatorButton.on('click', function() {
			$body.scrollTo( $logo.offset().top, 800, {
				onAfter: function() {
					$headerFormBlurb.animate({ opacity: 1 }, 1000)
					$headerFormName.focus()
					$headerFormForm.append('<input type="hidden" name="webinar_button_clicked" value="1" />')
				}
			})
		})


		var $footerGuideButton	= $('.footerGuide-button')
		var $subFooter			= $('.subFooter')

		$(window).on('scroll.buttonShakeFooter', function() {
			if ( $subFooter.is(':in-viewport') ) {
				$(window).unbind('.buttonShakeFooter')

				setTimeout(
					function() {
						$footerGuideButton.addClass('animated').addClass('shake')
					},
					500
				)
			}
		});

		var $chart		= $('.chartImage')
		var $seperator	= $('.seperator')

		$(window).on('scroll.chart', function() {
			if ( $seperator.is(':in-viewport') ) {
				$(window).unbind('.chart')
				$chart
					.css({
						opacity: 0,
						position: 'relative',
						top: '-25px'
					})
					.removeClass('.invisible')
					.animate({
						opacity: 1,
						top: '0',
					}, 600)
			}
		});

		typewriter = function($el, options, done) {
			if ( ! done ) { done = function() {} }
			if ( ! options ) { options = {} }

			var text			= options.text || '';
			var speed			= options.speed || 200;
			var currentSpeed	= 0;

			text = text.replace(/[ \t]{2,}/g, ' ')

			var characters	= text.split('')
			var length		= characters.length

			var newText = ''
			console.log([text])

			for ( var index in characters ) {
				(function(index) {
					setTimeout(
						function(){
							var character	= characters[index]

							if ( character === "\n" ) {
								character = '<br/>'
							}

							newText			+= character
							$el.html(newText)

							// when we are done...
							if ( parseInt(index) === (length - 1) ) {
								return done($el, options)
							}
						},
						( currentSpeed = speed + currentSpeed )
					)
				})(index)
			}
		}

		var $typewriter			= $('.footerTypewriter')
		var $typewriterText		= $('.typewriterText')
		var $typewriterAuthor	= $('.typewriterAuthor')

		$typewriterAuthor.css({ opacity: 0 })
		$typewriter.css({ opacity: 0 })

		$(window).on('scroll.typewriterFooter', function() {
			if ( $typewriterAuthor.is(':in-viewport') ) {
				$(window).unbind('.typewriterFooter')
				text = $typewriterText.html()

				$typewriterText.html('')

				$typewriter.css({ opacity: 1 })

				typewriter($typewriterText, { speed: 45, text: text }, function() {
					$typewriterAuthor.animate({ opacity: 1 }, 1000)
				})
			}
		})

	});
})();