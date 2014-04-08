
$(document).ready(function() {

	// anything with the scrollMe class will scroll to its [href] attribute smoothly when clicked
	$(document).on('click', '.scrollMe', function(event) {
		event.preventDefault()

		$button = $(this)
		
		href	= $button.attr('href')
		$target	= $(href)

		$(window).scrollTo($target.offset().top - 50, 800)
	})

	$('.ltscDownloadButton').on('click', function(){
		$("form .clientName").focus()
		$("[name=clientRequestLtsc]").val("yes")
		$(".downloadlink").show()
	})

	var $formButton	= $('.emailSubmitButton')
	var $form		= $formButton.closest('form')
	
	// We dont need to redirect if JS is working
	$form.find('input[name=redirect]').remove()

	// Perform an ajax request instead of following the default form behaviour
	$formButton.on('click', function(event) {
		event.preventDefault()

		if ( $formButton.attr('disabled') == 'disabled' ) return null;

		var url		= $form.attr('action')
		var method	= $form.attr('method')
		var data	= $form.serializeArray()
		
		$formButton.attr('disabled', 'disabled')

		$.ajax({
			method	: method
		,	url		: url
		,	data	: data
		,	dataType: 'json'
		,	error	: console.error
		,	success	: function(json) {
				console.log(json)

				if ( json && json.success ) {
					$('#contactform_errorloc')
						.hide()
						.html('Success!<br/>You will recieve an email shortly.')
						.fadeIn()


				} else {
					$('#contactform_errorloc')
						.hide()
						.html('It didnt work.<br/>Please, try again soon.')
						.fadeIn()

					$formButton.attr('disabled', false)
				}
			}
		})
	})
	
	var $backTop		= $('#back-top')

	// ColorViewFade, fades between the grayscale and color img's
	var $colorViewFades	= $('.colorViewFade')
	var colorViewFadeItems = []

	$colorViewFades.each(function() {
		var $item = $(this)
		colorViewFadeItems.push(prepareImageData($item))
	})
	
	$(window).scroll(function () {
		var scrollPos = $(this).scrollTop()

		if ( scrollPos > 100 )
			$backTop.fadeIn()
		else 
			$backTop.fadeOut()

		if ( colorViewFadeItems.length )
			colorViewFadeItems.forEach(function(item) {
				checkImageColour( item, scrollPos )
			})
	})

	// FadeInOnView, does what it says it does. 1000ms fadetime
	var $fadeInOnView = $('.fadeInOnView')

	if ( $fadeInOnView.length ) {		
		$fadeInOnView.each(function() {
			$(this).css({opacity: 0})
		})

		$(window).scroll(function() {
			var $inView = $fadeInOnView.filter(':in-viewport')

			if ( $inView.length ) {
				$inView.each(function() {
					var $item = $(this)
					$item.delay(500).animate({opacity: 1}, 1500)
					$item.removeClass('fadeInOnView')

					// Remove item from set when it has been faded in
					$fadeInOnView = $fadeInOnView.not($item)
				})

			}
		})
	}


	//
	// LTSC page
	// 
	var $faqAnswers		= $(".faq-answer-text");
	var $faqQuestions	= $(".faq-question-text");

	$(document).on('click', '.faq-question-text', function () {
		$faqAnswers.slideUp('fast')

		if( !$(this).hasClass("active") ) {
			$faqQuestions.removeClass('active')
			$(this).addClass('active').next().slideDown('fast')
		} else {
			$faqQuestions.removeClass('active')
		}

	})

	//
	// Legacy code
	//
	
	// Legacy function, mostly untouched
	function prepareImageData( img ) {
		if ( ! img ) { return null }
		var
			offset = img.offset().top - ( $(window).height() / 2 ) + (img.height() / 2),
			upperLimit = offset - 250,
			lowerLimit = offset + 250,
			comparativeValue = offset - upperLimit
		;

		return {
			'offset': function () {
				return img.offset().top - ( $(window).height() / 2 ) + (img.height() / 2);
			},
			'upperLimit': function () {
				return this.offset() - 250;
			},
			'lowerLimit': function () {
				return this.offset() + 250;
			},
			'comparativeValue': function () {
				return this.offset() - this.upperLimit();
			},
			'reference': img.find('.colour')
		};
	}

	// Legacy function, mostly untouched
	function checkImageColour( imageObj, scrollPos ) {
		if ( ! imageObj ) return null

		if( scrollPos > imageObj.upperLimit() && scrollPos < imageObj.lowerLimit() ) {
			var opacity = ((scrollPos - imageObj.upperLimit() ) / imageObj.comparativeValue() ) + 0.2;
			if( scrollPos > imageObj.offset() ) {
				opacity = (opacity - 1.5) * -1 + 0.5;
			}
			imageObj.reference.css({ 'opacity': opacity });
		} else {
			imageObj.reference.css({'opacity': '0'});
		}
	}

	// Validator stuff
	var frmvalidator = new Validator("contactform");
	frmvalidator.EnableOnPageErrorDisplaySingleBox();
	//frmvalidator.EnableMsgsTogether();

	frmvalidator.addValidation("clientName","req","Please enter your Full Name");
	frmvalidator.addValidation("clientName","maxlen=50","Max length for Name is 50");
	frmvalidator.addValidation("clientName","alpha_s","Name can contain alphabetic chars only");
	frmvalidator.addValidation("clientEmail","maxlen=180");
	frmvalidator.addValidation("clientEmail","req","Please enter valid Email Address");
	frmvalidator.addValidation("clientEmail","email","Please enter valid Email Address");;

	frmvalidator.addValidation("clientNumber","maxlen=50");
	frmvalidator.addValidation("clientNumber","req","Please enter valid Contact Number");
	frmvalidator.addValidation("clientNumber","numeric");

	window.clientsetFocus = function() {
		$("form .clientName").focus()
		$(".clientRequestLtsc").val("yes")
		$(".downloadlink").css({display: 'block'})
		//postContactToGoogle();
	}

	// Legacy animate functions based on markup, data attributes
	$(document).ready(function () {
		window.animatedList = [];
		setupAnimationObjects();

		$(window).scroll(function () {
			checkAnimations();
		});
	});

	function checkAnimations() {
		var screenPos = $(window).scrollTop();

		$.each( window.animatedList, function (i, obj) {
			if( screenPos >= obj.animationTrigger() && !obj.animationComplete ) {
				animateObj( obj.reference );
				obj.animationComplete = true;
			}
		});
	}

	function animateObj( htmlObj ) {
		htmlObj.animate( htmlObj.data('animation'), parseInt( htmlObj.data('anim-duration'), 10) , function () {
			if( htmlObj.data('next-animation') ) {
				animateObj( $(htmlObj.data('next-animation')) );
			}
		});
	}

	function setupAnimationObjects() {
		var list = $(".animated");

		$.each(list, function (i, obj) {
			animatedList.push( generateAnimObj( obj ) );
		});
	}

	function generateAnimObj( obj ) {
		return {
			'animationTrigger': function () {
				if( $(obj).data('anim-trigger') === 'center' ) {
					return $(obj).offset().top - ($(window).height() / 2);
				}
				if( $(obj).data('anim-trigger') === 'bottom' ) {
					return $(obj).offset().top - $(window).height() + 50;
				}
				if( $(obj).data('anim-trigger') === 'top' ) {
					return $(obj).offset().top - 50;
				}
			},
			'reference': $(obj)
		};
	}

});