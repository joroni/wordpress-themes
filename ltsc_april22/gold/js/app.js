
(function () {
	$(document).ready(function() {


		//
		// Header form input focus classes
		//

		var $contactForm		= $('.contactForm')
		var $contactFormForm	= $('.contactForm form')
		var $contactFormInputs	= $contactForm.find('.formList input')
		var $contactFormBlurb	= $contactForm.find('.blurb')
		//var $formRedirect		= $contactFormForm.find('[name=redirect]')
		//var formRedirect		= $formRedirect.val()
		//$formRedirect.remove()

		$contactFormInputs.on('focusin focusout', function() {
			$input = $(this)
			$li = $input.closest('li')

			$li.toggleClass('active')
		})


		// Header slidy stuff
		var $headerText			= $('.headerTextItems')
		var $headerTextItems	= $headerText.children()

		var textInterval = 4000
		setInterval(
			function() {
				var $currentItem = $headerText.find('.active')
				$currentItem.animate({
					position: 'relative',
					opacity: 0,
				}, 250, function() {
					$currentItem.removeClass('active')

					var $nextItem = $currentItem.next()

					if ( ! $nextItem.length ) {
						$nextItem = $headerText.children().first()
					}

					$nextItem.css({
						opacity: 0,
					}).addClass('active')


					$nextItem.animate({
						opacity: 1,
					}, 250)
				}
			)

		
			}, textInterval
		)

		var $formPhoneInput	= $contactForm.find('[name=phone]')
		var $formPhoneLi	= $formPhoneInput.closest('li')
		var $formEmailInput	= $contactForm.find('[name=email]')
		var $formEmailLi	= $formEmailInput.closest('li')

		$(document).on('click', '.contact-button', function (event) {
			var $button = $(this)

			$contactFormBlurb.html('').animate({opacity: 1}, 500)

			if ( ! $formEmailInput.val() || ! $formEmailInput.val().match(/\S+@\S+\.\S+/i) ) {
				$formEmailLi.addClass('error')
				var $emailError = $('.error-email')

				if ( ! $emailError.length ) {
					$contactFormBlurb.append("<div class='error-msg error-email'>Please enter an email.</div>")
					$contactFormBlurb.show()
					$emailError = $('.error-email')
				}

				$formEmailInput.one('focus', function(){
					$formEmailLi.removeClass('error')
					$emailError.fadeOut().remove()
				})

				event.preventDefault()
			}

			if ( ! parseInt( $formPhoneInput.val() ) ) {
				$formPhoneLi.addClass('error')
				var $phoneError = $('.error-phone')

				if ( ! $phoneError.length ) {
					$contactFormBlurb.append("<div class='error-msg error-phone'>Please enter a phone number.</div>")
					$contactFormBlurb.show()
					$phoneError = $('.error-phone')
				}

				$formPhoneInput.one('focus', function(){
					$formPhoneLi.removeClass('error')
					$phoneError.fadeOut().remove()
				})
				event.preventDefault()
			}

			/*if ( ! btn.attr('disabled') ) {
				btn.html("Sending...").attr('disabled', 'disabled');
				$.ajax({
					url			: $contactFormForm.attr('action'),
					type		: $contactFormForm.attr('method'),
					dataType	: 'html',
					data		: $contactFormForm.serialize(),
					success		: function (response) {
						data = JSON.parse(response)

						console.log(response)

						if ( data.success ) {
							window.location.href = $contactFormForm.find('[name=thankYouUrl]').value
						} else {
							btn.attr('disabled', false).html('FIND OUT HOW');
						}
					}
				});
			}
			*/
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

		var sliderSlide = function() {
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
		$(window).on('scroll.slider', function() {
			if ( $lastListItem.is(':in-viewport') ) {
				$(window).unbind('.slider')
				sliderSlide()
			}
		})

		if ( $lastListItem.is(':in-viewport') ) {
			$(window).unbind('.slider')
			sliderSlide()
		}

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
		var $contactFormName	= $contactForm.find('input[name=name]')
		var $footerGuideButton	= $('.footerGuide-button')

		var $buttons = $seperatorButton
		var scroller = function(event) {
			event.preventDefault()
			console.log($(this))
			$(window).scrollTo( $contactForm.offset().top, 800, {
				onAfter: function() {
					console.log('onafter')
					$contactFormBlurb.animate({ opacity: 1 }, 1000)
					$contactFormName.focus()
					$contactFormForm.append('<input type="hidden" name="webinar_button_clicked" value="1" />')
				}
			})
		}
		$buttons.on('click', scroller)
		$footerGuideButton.on('click', scroller)

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