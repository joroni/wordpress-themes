
$(document).ready(function() {

	var $footerButton	= $('.part4 .button')
	,	$headerButton	= $('.part1 .button')
	,	$form			= $('.contactForm')

	$form.$form			= $form.find('form')
	$form.$lis			= $form.find('.formList li')
	$form.$inputs		= $form.find('.formList li input, .formList li textarea')
	$form.$name			= $form.find('input[name=name]')
	$form.$email		= $form.find('input[name=email]')
	$form.$phone		= $form.find('input[name=phone]')
	$form.$postCode		= $form.find('input[name=postCode]')
	$form.$googleEvent	= $form.find('input[name=googleEvent]')

	$form.$birthDate		= $form.find('input[name=birthDate]')
	$form.$income			= $form.find('input[name=income]')
	$form.$ownPropertyLi	= $form.find('.ownProperty')
	$form.$text				= $form.find('textarea[name=text]')

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

	$form.$lis.on('click', function(event) {
		console.log($(this))
		var $target	= $(event.target)
		,	$li		= $(this)

		if ( $target.is(':not(input)') ) {
			$li.find('> input').focus()
		}
	})

	$(document).on('click', '.contact-button', function (event) {
		var $button = $(this)
		var failure = false

		console.log('submit clicked')

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

		/*if ( ! $form.$postCode.val() || ! $form.$postCode.val().match(/\d+/) ) {
			$form.$postCode.parent().addClass('error')
			failure = true;
		}

		if ( ! $form.$birthDate.val() ) {
			$form.$birthDate.parent().addClass('error')
			failure = true;
		}*/

		/*if ( ! $form.$income.val() ) {
			$form.$income.parent().addClass('error')
			failure = true
			console.log('income fail')
		}*/
		var text = $form.$text.val()
		,	words = text.split(' ')

		if ( ! text || words.length > 35 ) {
			$form.$text.parent().addClass('error')
			console.log('text fail')
			failure = true
		}

		var $selectedRadio = $form.$ownPropertyLi.find('input[type=radio]:checked')

		if ( ! $selectedRadio.val() ) {
			$form.$ownPropertyLi.addClass('error')
			failure = true
			console.log('radio fail')
		}
		/*var $countryInput = $form.$countrySelectize.find('.selectize-input .item')

		if ( ! $countryInput.data('value') ) {
			$form.$countrySelectize.parent().addClass('error')
			failure = true;
		}*/

		if ( failure ) {
			return false;
		}
		console.log('submit after failure')
		
		var googleEvent = $form.$googleEvent.val()

		if ( googleEvent ) {
			ga('send', 'event', googleEvent, 'submit')
			console.log('Google event:', googleEvent)
		}
		console.log('submit done')

		//return false;
	})


	$(document).on('click', '.scrollMe', function(event) {
		event.preventDefault()

		var $button = $(this)
		
		var href	= $button.attr('href')
		,	$target	= $(href)

		$(window).scrollTo($target.offset().top - 50, 800)
	})


});
