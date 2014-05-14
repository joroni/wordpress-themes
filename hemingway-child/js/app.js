var DEBUG = true

window.popups = function($findIn) {
	var itemCount, self, startTime, time;
	if ($findIn == null) {
		$findIn = $('body');
	}
	self = popups;
	itemCount = 0;
	if (DEBUG) {
		startTime = new Date();
	}
	$('[data-popup]', $findIn).each(function() {
		var $buttonSet, $buttons, $inner1, $popup, isActive, name, popup;
		$popup = $(this);
		name = $popup.data('popup');
		if (!name) {
			return null;
		}
		$buttons = $("[data-popup-button=" + name + "]");
		isActive = !($popup.data('active') == null);
		if (!$popup.length) {
			return null;
		}
		popup = self.popups[name] = {
			name: name,
			active: false,
			$buttons: $buttons,
			$popup: $popup,
			active: isActive
		};
		popup.$head = $popup.find('.popupHead');
		popup.$body = $popup.find('.popupBody');
		popup.toggle = function() {
			self.toggle(name);
			return this;
		};
		popup.show = function() {
			self.show(name);
			return this;
		};
		popup.hide = function() {
			self.hide(name);
			return this;
		};
		popup.populate = function(head, body, options) {
			self.populate(name, head, body, options);
			return this;
		};
		popup.timer = function($counter, ms, interval) {
			self.timer(name, $counter, ms, interval);
			return this;
		};
		$buttons.popup = $popup.popup = popup;
		$buttonSet = $buttons.add($('.popupClose', $popup));
		$buttonSet.unbind('click.popups');
		$buttonSet.on('click.popups', function(event) {
			var $button;
			popup.toggle();
			$button = $(this);
			console.log($button, 'clicked')
			if ( ($button.data('passLink') == null)) {
				return event.preventDefault();
			}
		});
		$inner1 = $popup.find('> .popupInner1');
		$inner1.unbind('click.popups');
		$inner1.on('click.popups', function(event) {
			if ($inner1.is(event.target) && $inner1.has(event.target).length === 0) {
				return popup.hide();
			}
		});
		return ++itemCount;
	});
	if (DEBUG) {
		time = new Date().getTime() - startTime.getTime();
		console.log('[', time, 'ms ]', 'popups() mapped', itemCount, 'items');
	}
	popups.isSetup = true
	return popups;
};

popups.popups = {};

popups.toggle = function(name, args) {
	var popup;
	if (args == null) {
		args = null;
	}
	if (!name || !(name in this.popups) || !this.isSetup) {
		return this;
	}
	popup = this.popups[name];
	console.log(popup)
	if (popup.active) {
		return this.hide(name);
	} else {
		return this.show(name)
	}
	return this;
};

popups.show = function(name) {
	var popup;
	if (name && (popup = this.popups[name])) {
		popup.$popup.attr('data-active', '');
		popup.active = true;
	}
	return this;
};

popups.hide = function(name) {
	var popup;
	if (name && (popup = this.popups[name])) {
		popup.$popup.removeAttr('data-active');
		popup.active = false;
	}
	return this;
};

popups.hideAll = function() {
	var popupName;
	for (popupName in this.popups) {
		this.hide(popupName);
	}
	return this;
};

popups.populate = function(name, head, body, options) {
	var popup, _ref, _ref1;
	if (options == null) {
		options = {};
	}
	if (!name) {
		return this;
	}
	if (!(popup = popups.popups[name])) {
		return this;
	}
	if (head != null) {
		if ((_ref = popup.$head) != null) {
			_ref.html(head);
		}
	}
	if (body != null) {
		if ((_ref1 = popup.$body) != null) {
			_ref1.html(body);
		}
	}
	return this;
};

popups.timer = function(name, $counter, fullTime, intervalTime) {
	var counter, interval, maxCounter;
	if (fullTime == null) {
		fullTime = 0;
	}
	if (intervalTime == null) {
		intervalTime = 1000;
	}
	if (!name || !$counter) {
		return this;
	}
	counter = 0;
	maxCounter = Math.round(fullTime / intervalTime);
	$counter.html(maxCounter);
	interval = setInterval((function() {
		$counter.html(maxCounter - (++counter));
		if (counter >= maxCounter) {
			clearInterval(interval);
			return popups.hide(name);
		}
	}), intervalTime);
	return this;
};

popups.get = function(name) {
	if (name === null) {
		return popups.popups;
	} else {
		return popups.popups[name];
	}
};

$(document).ready(function() {
	popups()

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
	var $messageBox	= $('.messageBox')
	
	var validations = {
		number: {
			regex		: /^(\+\d{1,2})?((07|04)\d{8}|5\d{7,})$/i,
			$input		: $form.find('[name="clientNumber"]'),
			$message	: $messageBox.find('.message-number')
		},
		email: {
			regex		: /\S+@\S+\.\S+/,
			$input		: $form.find('[name="clientEmail"]'),
			$message	: $messageBox.find('.message-email')
		},
		name: {
			$input		: $form.find('[name="clientName"]'),
			$message	: $messageBox.find('.message-name')
		},
		success: {
			$message	: $messageBox.find('.message-success')
		},
		failure: {
			$message	: $messageBox.find('.message-failure')
		}
	}


	// We dont need to redirect if JS is working
	$form.find('input[name=redirect]').remove()

	// Perform an ajax request instead of following the default form behaviour
	$formButton.on('click', function(event) {
		event.preventDefault()

		if ( $formButton.attr('disabled') == 'disabled' ) return null

		var url		= $form.attr('action')
		var method	= $form.attr('method')
		var data	= $form.serializeArray()
		
		// Validations
		var v		= validations
		var isError	= false

		number = v.number.$input.val().replace(/[^\+\d]/g, '') // strip non-numbers

		if ( ! number.match(v.number.regex) ) {
			v.number.$input.parent().addClass('invalid')
			v.number.$message.fadeIn()
			isError = true
		}

		if ( ! v.email.$input.val().match(v.email.regex) ) {
			v.email.$input.parent().addClass('invalid')
			v.email.$message.fadeIn()
			isError = true
		}

		if ( ! v.name.$input.val() ) {
			v.name.$input.parent().addClass('invalid')
			v.name.$message.fadeIn()
			isError = true
		}

		for ( var key in validations ) {
			(function(key) {
				var opt = validations[key]

				if ( ! opt.$input ) return null

				opt.$input.one('focusin', function() {
					opt.$input.parent().removeClass('invalid')
					opt.$message.fadeOut()
				})
			})(key)
		}

		if ( isError ) return false

		$formButton.attr('disabled', 'disabled')

		$.ajax({
			method	: method
		,	url		: url
		,	data	: data
		,	dataType: 'json'
		,	error	: console.error
		,	success	: function(json) {
				if ( json && json.success ) {
					v.success.$message.fadeIn()
				} else {
					v.failure.$message.fadeIn()

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

		/*if ( colorViewFadeItems.length )
			colorViewFadeItems.forEach(function(item) {
				checkImageColour( item, scrollPos )
			})
		*/
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

	/*
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
	*/
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


// Map!
$(document).ready(function(){
	var $map = $('.dynamicMap')

	$map.$mapItems	= $map.find('.mapPart')
	$map.$navItems	= $map.find('.navItem')

	$map.$navItems.$buttons = $map.$navItems.find('.navCircle')

	$map.$tables = $map.find('.mapTable')

	$map.$tables.$usableCells = $map.find('.mapTable td.usable')

	var activeMapSelection = { lot: null, cell: null }

	$map.$navItems.$buttons.on('click', function(event) {
		var $button		= $(this)
		,	$navItem	= $button.parent()
		,	buttonId	= $navItem.data('item')

		$map.$mapItems.removeClass('active hover')
		$map.$mapItems.each(function() {
			var $item	= $(this)
			,	mapId	= $item.data('item')

			if ( mapId == buttonId ) $item.addClass('active')
		})

		$map.$navItems.each(function() {
			var $item	= $(this)
			,	navId	= $item.data('item')

			$item.removeClass('active')

			if ( navId == buttonId ) $item.addClass('active')
		})
	})
	$map.$navItems.$buttons.on('mouseover mouseleave', function(event) {
		var $button		= $(this)
		,	$navItem	= $button.parent()
		,	buttonId	= $navItem.data('item')

		$map.$mapItems.removeClass('hover')

		if ( event.type == 'mouseover' ) {
			$map.$mapItems.each(function() {
				var $item	= $(this)
				,	mapId	= $item.data('item')

				if ( mapId == buttonId ) $item.addClass('hover')
			})
		}
	})

	$map.$tables.$usableCells.on('click', function() {
		var $cell			= $(this)
		,	$parentTable	= $cell.closest('.mapTable')

		$parentTable.$usableTds = $parentTable.find('td.usable')

		$parentTable.$usableTds.removeClass('active')

		// add to object to store selection coords

		$cell.addClass('active')
	})
})