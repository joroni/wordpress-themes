
$(document).ready(function() {
	var $list			= $('.part2 .list')
	
	$list.$ticks		= $list.find('i')
	$list.$ticks.$last	= $list.$ticks.last()

	var $footerButton	= $('.part4 .button')
	,	$form			= $('.contactForm')

	$form.$form			= $form.find('form')
	$form.$lis			= $form.find('.formList li')
	$form.$inputs		= $form.find('.formList li > input')
	$form.$name			= $form.find('input[name=name]')
	$form.$email		= $form.find('input[name=email]')
	$form.$phone		= $form.find('input[name=phone]')
	$form.$postCode		= $form.find('input[name=postCode]')
	$form.$googleEvent	= $form.find('input[name=googleEvent]')

	var $typewriter			= $('.typewriter')
	$typewriter.$content	= $typewriter.find('.content')
	$typewriter.$author		= $('.typewriterAuthor')

	$form.$countrySelectize = $form.find('.selectize')


	$('.selectize').selectize()

	$form.$inputs.on('focusin focusout', function() {
		var $input	= $(this)
		,	$li		= $input.closest('li')

		$li.toggleClass('active')
	})

	$form.$inputs.on('focusin', function() {
		var $input	= $(this)
		,	$li		= $input.closest('li')

		$li.removeClass('error')
	})

	//$form.$lis.on('click', function(event) {
	//	if ( event.target)
	//	$(this).find('input').focus()
	//})

	$(document).on('click', '.contact-button', function (event) {
		var $button = $(this)
		var failure = false

		if ( ! $form.$name.val() ) {
			$form.$name.parent().addClass('error')
			failure = true;
		}

		if ( ! $form.$email.val() || ! $form.$email.val().match(/\S+@\S+\.\S+/i) ) {
			$form.$email.parent().addClass('error')
			failure = true;
		}

		var phoneNumber = $form.$phone.val().replace(/\s/g, '')

		if ( ! phoneNumber || ! phoneNumber.match(/^(\+\d{1,2})?((07|04)\d{8,10}|5\d{7,})$/i) ) {
			$form.$phone.parent().addClass('error')
			failure = true;
		}

		if ( ! $form.$postCode.val() || ! $form.$postCode.val().match(/\d+/) ) {
			$form.$postCode.parent().addClass('error')
			failure = true;
		}

		var $countryInput = $form.$countrySelectize.find('.selectize-input .item')

		if ( ! $countryInput.data('value') ) {
			$form.$countrySelectize.parent().addClass('error')
			failure = true;
		}

		if ( failure ) {
			return false;
		}
		
		var googleEvent = $form.$googleEvent.val()

		if ( googleEvent ) {
			ga('send', 'event', googleEvent, 'submit')
			console.log('Google event:', googleEvent)
		}

		//return false;
	})

	//
	// Typewriter!
	//
	
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

	$typewriter.$author.css({ opacity: 0 })
	$typewriter.css({ opacity: 0 })

	$(window).on('scroll.typewriterFooter', function() {
		if ( $typewriter.$author.is(':in-viewport') ) {
			$(window).unbind('.typewriterFooter')
			text = $typewriter.$content.html()

			$typewriter.$content.html('')

			$typewriter.css({ opacity: 1 })

			typewriter($typewriter.$content, { speed: 45, text: text }, function() {
				$typewriter.$author.animate({ opacity: 1 }, 1000)
			})
		}
	})

	//
	// Buttons
	// 
	
	$footerButton.on('click', function() {
		var $button = $(this)

		setTimeout(function(){
			$form.$name.focus()
		}, 800)
	})

	$(document).on('click', '.scrollMe', function(event) {
		event.preventDefault()

		var $button = $(this)
		
		var href	= $button.attr('href')
		,	$target	= $(href)

		$(window).scrollTo($target.offset().top - 50, 800)
	})


	//
	// Tick animations
	//
	var tickAnimation = function() {
		if ( $list.$ticks.$last.is(':in-viewport') ) {
			$(window).unbind('.tickAnimation')

			var delay			= 150
			,	accumulated		= delay

			$list.$ticks.each(function() {
				var $tick = $(this)

				setTimeout(function() {
					$tick.animate({
						opacity: 1,
						//left: -6
					}, 200).animate({
						//left: 0
					}, 250)
				}, accumulated = accumulated + delay )
			})
		}
	}

	$(window).on('scroll.tickAnimation', tickAnimation)
	tickAnimation()

});
