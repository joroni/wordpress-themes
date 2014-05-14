

(function() {
	/*
		- finalFee is generated
	 */
	var dataSets = {
		// 5 & 7 year LTSC
		a: [
			{
				sqm		: 410
			,	cost	: 180000
			,	ltscFee	: 39990
			,	deferred: 12000
			,	minimum	: 15000
			}, {
				sqm		: 300
			,	cost	: 154000
			,	ltscFee	: 35990
			,	deferred: 8000
			,	minimum	: 10000
			}, {
				sqm		: 225
			,	cost	: 144000
			,	ltscFee	: 25990
			,	minimum	: 10000
			}, {
				sqm		: 150
			,	cost	: 130000
			,	ltscFee	: 19990
			,	minimum	: 5500
			}, {
				sqm		: 112
			,	cost	: 104000
			,	ltscFee	: 15990
			,	minimum	: 5500
			},
		],
		// 10 Year LTSC
		b: [
			{
				sqm		: 410
			,	cost	: 180000
			,	ltscFee	: 49990
			,	minimum	: 15000
			,	deferred: 12000
			}, {
				sqm		: 300
			,	cost	: 154000
			,	ltscFee	: 39990
			,	minimum	: 10000
			,	deferred: 8000
			}, {
				sqm		: 225
			,	cost	: 144000
			,	ltscFee	: 29990
			,	minimum	: 10000
			}
		]
	}

	/*
		Calculator

		* Note: Assume all examples below use regex-like pseudo-code, like ? for optional values, (1|2) etc.
		
		$source: a jQuery object that will contain:
			select.calc-term
				option[data-group][value][selected]?
			select.calc-lotSize
				option[data-group][value][selected]?

		To output use these classes:
			.calc-output-(
				cost | ltscFee | settlement | stampDuty |
				legalFee | final | forecast | profit
			)
		
		data: should be of this structure: {
			groupName: [ { sqm, cost, ltscFee, finalFee ...}, ... ]
		}

	*/
	var Calc = (function() { // The Calc class
		var self = Calc

		/*
			Constructor
		
			@param $source	(jQuery Object)
			@param data		(Object)
		 */
		function Calc($source, data) { // Constructor
			self = this
			this.$source	= $source
			this.data		= data

			this.$output_settlement			= $source.find('.calc-output-settlement')
			this.$output_ltscFee			= $source.find('.calc-output-ltscFee')
			this.$output_cost				= $source.find('.calc-output-cost')
			this.$output_stampDuty			= $source.find('.calc-output-stampDuty')
			this.$output_legalFee			= $source.find('.calc-output-legalFee')
			this.$output_final				= $source.find('.calc-output-final')
			this.$output_forecast			= $source.find('.calc-output-forecast')
			this.$output_term				= $source.find('.calc-output-term')
			this.$output_forecastInterest	= $source.find('.calc-output-forecastInterest')
			this.$output_profit				= $source.find('.calc-output-profit')

			this.$output_monthlyFee			= $source.find('.calc-output-monthlyFee')
			this.$output_weeklyFee			= $source.find('.calc-output-weeklyFee')
			this.$output_dailyFee			= $source.find('.calc-output-dailyFee')

			this.$output_deferred			= $source.find('.calc-output-deferred')

			this.$termSelect			= $source.find('.calc-termSelect')
			this.$lotSizeSelect			= $source.find('.calc-lotSizeSelect')
			this.$initialPayment		= $source.find('.calc-initialPayment')
			this.$initialPaymentSlider	= $source.find('.calc-initialPaymentSlider')

			this.$deferredPayment		= $source.find('.calc-deferredPayment')
			this.$deferredPaymentSlider	= $source.find('.calc-deferredPaymentSlider')

			this.$termSelect.on('change', this.calcTerm)
			this.$lotSizeSelect.on('change', this.calcTerm)
			this.$initialPayment.on('change', this.calcTerm)
			this.$deferredPayment.on('change', this.calcTerm)

			this.calcTerm.apply(this.$initialPayment)
			this.calcTerm.apply(this.$termSelect)
			this.calcTerm.apply(this.$lotSizeSelect)
		}

		Calc.prototype.calcTerm = function() {
			var $proccingEl			= $(this)
			var $selectedTerm		= self.$termSelect.find(':selected')
			var $selectedLotSize	= self.$lotSizeSelect.find(':selected')

			var term			= parseInt( $selectedTerm.attr('value') )
			var lotSize			= parseInt( $selectedLotSize.attr('value') )
			
			var termGroups		= ( $selectedTerm.data('group') || '').split(',') 
			var group			= termGroups[0]

			self.$lotSizeSelect.children().each(function() {
				var $option			= $(this)
				var optionGroups	= ( $option.data('group') || '').split(',')
				
				var validGroup = false
				for (var index in optionGroups) {
					if ( optionGroups[index] == group ) {
						validGroup = true
						break
					}
				}

				if ( validGroup ) {
					$option.removeAttr('disabled').show()
				} else {
					$option
						.attr('disabled', 'disabled')
						.removeAttr('selected')
						.hide()
				}
			})

			var lotSizeGroups = ( $selectedLotSize.data('group') || '').split(',')
			var validGroup = false
			for (var index in lotSizeGroups) {
				if ( lotSizeGroups[index] == group ) {
					validGroup = true
					break
				}
			}

			// If the lotSize is invalid for the group
			if ( ! validGroup ) {
				// Select the first non-disabled option and then recall this function
				self.$lotSizeSelect.find('option:not([disabled]):not([data-placeholder])').first().prop('selected', true)
				self.$lotSizeSelect.trigger('changeEffect')
				self.calcTerm.apply(self.$lotSizeSelect)
				return true
			}

			var dataSet = self.data[group] || null // set the current data array as the first group in the terms

			if (! term		|| ! group ||
				! lotSize	|| ! dataSet
			) {
				//console.error('calcTerm: term, lotSize or data invalid')
				return true
			}

			// Finds based on { key: value }
			var data = self.find({ sqm: lotSize }, dataSet)

			if ( ! data ) {
				//console.error('calcTerm: Couldnt find data item in dataSet')
				return true
			}

			var ltscFee = data.ltscFee

			var initialPayment = parseInt( self.$initialPayment.html() ) || 0
			,	finalLtscFee = ltscFee - initialPayment

			var deferredPayment = parseInt( self.$deferredPayment.html() ) || 0

			console.log('initialPayment', initialPayment)
			console.log('deferred', deferredPayment)

			if ( finalLtscFee <= 0 ) {
				self.$initialPayment.html(data.ltscFee)
				finalLtscFee = 0
			}

			var settlement = data.cost - data.ltscFee
			var stampDuty

			// 1.4% of data.cost
			if ( data.ltscFee <= 25000 ) {
				stampDuty = data.ltscFee * 0.014
			} else
			// 2.4% of data.cost + $350
			if ( data.ltscFee > 25000 ) {
				stampDuty = data.ltscFee * 0.024
			}

			var legalFee = 1500

			var final = settlement + stampDuty + legalFee

			var forecastInterest = 7.2

			var r = forecastInterest / 100
			,	p = data.cost
			,	t = term

			if ( ltscFee < 0 ) ltscFee = 0

			var maxDeferred	= data.deferred || 0
			,	deferredFee	= finalLtscFee - deferredPayment

			if ( deferredFee < 0 ) deferredFee = 0

			var monthlyFee	= ( deferredFee / 12 ) / term
			,	weeklyFee	= ( deferredFee / 52 ) / term
			,	dailyFee	= ( deferredFee / 365 ) / term

			if ( monthlyFee < 0 ) monthlyFee = 0
			if ( weeklyFee < 0 ) weeklyFee = 0
			if ( dailyFee < 0 ) dailyFee = 0

			var forecast = p * ( Math.pow(1 + r, t) )

			var profit = forecast - settlement

			var cost = data.cost + data.ltscFee

			if (
				$proccingEl.is(self.$lotSizeSelect) ||
				$proccingEl.is(self.$termSelect) ||
				$proccingEl.is(self.$initialPayment) ||
				$proccingEl.is(self.$deferredPayment)
			) {
				self.$initialPaymentSlider.attr('data-min', data.minimum)
				self.$initialPaymentSlider.attr('data-max', data.ltscFee - deferredPayment)
				self.$initialPaymentSlider.noUiSlider({
					range: {
						min: data.minimum,
						max: data.ltscFee - deferredPayment
					}
				}, true)

				self.$initialPayment.trigger('changeEffect')

				if ( maxDeferred <= 0 ) {
					self.$deferredPaymentSlider.animate({ opacity: 0.4 })
				} else {
					self.$deferredPaymentSlider.animate({ opacity: 1 })
					self.$deferredPaymentSlider.attr('data-min', 0)
					self.$deferredPaymentSlider.attr('data-max', maxDeferred)
					self.$deferredPaymentSlider.noUiSlider({
						range: {
							min: 0,
							max: maxDeferred
						}
					}, true)

					self.$deferredPayment.trigger('changeEffect')
				}

			}

			self.output( self.$output_settlement		, data.cost								)
			self.output( self.$output_ltscFee			, ltscFee								)
			self.output( self.$output_cost				, cost									)
			self.output( self.$output_stampDuty			, stampDuty			, { round: true }	)
			self.output( self.$output_legalFee			, legalFee								)
			self.output( self.$output_final				, final									)
			self.output( self.$output_forecast			, forecast			, { round: true }	)
			self.output( self.$output_term				, term									)
			self.output( self.$output_forecastInterest	, forecastInterest						)
			self.output( self.$output_profit			, profit			, { round: true }	)
			//self.output( self.$output_deferred			, deferred			, { round: true }	)
			self.output( self.$output_monthlyFee		, monthlyFee		, { round: true }	)
			self.output( self.$output_weeklyFee			, weeklyFee			, { round: true }	)
			self.output( self.$output_dailyFee			, dailyFee			, { round: true }	)

			return true
		}

		Calc.prototype.output = function($el, value, opt) {
			opt || ( opt = {} )
			if ( opt.round == null ) opt.round = false
			if ( opt.format == null ) opt.format = true

			var oldHtml = $el.html()
			$el.html( self.formatNumber(value, opt) )

			if ( oldHtml != $el.html() ) $el.trigger('changeEffect')
		}

		Calc.prototype.formatNumber = function(number, opt) {
			opt || ( opt = {} )
			if ( opt.round == null ) opt.round = false

			if ( opt.round ) number = Math.round( number )
			
			return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
		}

		Calc.prototype.find = function(props, dataArray) {
			var satisfied

			for (var index in dataArray) {
				var obj = dataArray[index]
				satisfied = false

				for (var key in props) {
					var needle = props[key]

					if ( key in obj && obj[key] == needle )
						satisfied = true
					else
						satisfied = false
				}

				if ( satisfied ) return obj
			}

			return null
		}

		return Calc
	})()


	$(document).ready(function(){
		/*var $rangesliders = $('.rangeslider')

		$rangesliders.rangeslider({
			pollyfill: false
		})

		$rangesliders.on('change', function() {
			var $item	= $(this)
			,	$output	= $( $item.data('output') )

			$output.html($item.val())
		})

		return null;
		*/
	
		var $rangeSliders = $('.rangeSlider')

		$rangeSliders.each(function() {
			var $slider = $(this)
			,	$output = $( $slider.data('output') )
			,	min		= $slider.data('min')
			,	max		= $slider.data('max')

			$slider.noUiSlider({
				start: [ min ],
				range: {
					min: [ min ],
					max: [ max ]
				},
				step: 100,

				serialization: {
					lower: [
						$.Link({ target: $output }),
					],
					format: {
						decimals: 0,
					}
				}
			})

			$slider.on('change', function() {
				console.log('set')
				$output.trigger('change')
				$slider.removeClass('drawFocus')
			})
		})

		//return null

	

		// Instantiate the Calc class, sets up listeners etc.
		var $calc	= $('.vendorCalc')
		
		$calc.$step1 = $calc.find('.calc-step1')
		$calc.$step2 = $calc.find('.calc-step2')
		$calc.$step3 = $calc.find('.calc-step3')

		$calc.$termSelect		= $calc.find('.calc-termSelect')
		$calc.$lotSizeSelect	= $calc.find('.calc-lotSizeSelect')

		$calc.removeClass('row-3col row-2col row-1col')
		$calc.addClass('row-1col')
		$calc.$step2.hide()
		$calc.$step3.hide()

		var calc = new Calc($calc, dataSets)

		var stepEval = function() {
			var self = stepEval
			,	newIndex = 0

			if ( self.currentIndex == undefined ) self.currentIndex = newIndex

			for ( var index in steps ) {
				var step = steps[index]
			
				if ( ! step.eval() ) {
					break
				} else {
					newIndex = index
				}
			}
			// loop over the steps and init them if necessary
			for (var index in steps) {
				if ( index >= self.currentIndex && index <= newIndex ) {
					if ( ! steps[index].initiated && steps[index].init ) steps[index].init()
				}
			}
			if ( newIndex > self.currentIndex ) {


				step.change()
				self.current = step
			}
			// todo: make a little height thiner that takes an array of $els and finds the tallest
			// then sets all of their height to that!
			// todo: make slider step

		}

		stepEval.show = function($el, time) {
			if ( ! $el.is(':visible') ) {
				var oldMargin = $el.css('margin')
				$el
					.css({ opacity: 0, marginLeft: '-=120' })
					.show()

				setTimeout(function(){
					$el
						.animate({ opacity: 1, marginLeft: oldMargin }, 750, function() {
							$el.css('marginLeft', '')
						})
				}, time)

				return time
			}

			return 0
		}

		stepEval.hide = function($el, time) {
			time || ( time = 500 )

			if ( ! $el.is(':visible') ) {
				setTimeout(function(){
					$el.fadeOut(500)
				}, time)

				return time
			}

			return 0
		}

		stepEval.watch = function($el, cb) {
			$el.on('change', function() {
				var $item = $(this)
				console.log( 'change', $item, $item.find(':selected').val() )
				if ( $item.find(':selected').val() ) {
					$item.removeClass('drawFocus')
					$item.blur()
					stepEval()
				} else {
					$item.addClass('drawFocus')
				}
				
				$el.trigger('changeEffect')
			})
		}

		//
		// drawFocus
		//

		var steps = [
			{
				eval: function() {
					passed = true

					if ( ! $calc.$termSelect.find(':selected').val() ) {
						passed = false
					}

					if ( ! $calc.$lotSizeSelect.find(':selected').val() ) {
						passed = false
					}

					return passed
				},
				init: function() {
					this.initiated = true

					if ( ! $calc.$termSelect.find(':selected').val() ) {
						$calc.$termSelect.addClass('drawFocus')
					}

					if ( ! $calc.$lotSizeSelect.find(':selected').val() ) {
						$calc.$lotSizeSelect.addClass('drawFocus')
					}
				},
				change: function() {
					$calc.removeClass('row-3col row-2col row-1col')
					$calc.addClass('row-1col')

					var time = 500
					stepEval.show($calc.$step1, time)
					time += stepEval.hide($calc.$step2, time)
					time += stepEval.hide($calc.$step3, time)

					$calc.children().fitTallest({ animate: false })
				}
			}, {
				eval: function() {
					passed = true

					if ( ! $calc.$termSelect.find(':selected').val() ) {
						$calc.$termSelect.addClass('drawFocus')
						passed = false
					}

					return passed
				},
				init: function() {
					this.initiated = true

					$calc.find('.calc-initialPaymentSlider').addClass('drawFocus')
				},
				change: function() {
					$calc.removeClass('row-3col row-2col row-1col')
					$calc.addClass('row-2col')

					var time = 500
					stepEval.show($calc.$step1, time)
					time += stepEval.show($calc.$step2, time)
					time += stepEval.hide($calc.$step3, time)

					$calc.children().fitTallest({ animate: false })
				}
			}, {
				eval: function() {
					return true
				},
				init: function() {
					this.initiated = true
				},
				change: function() {
					$calc.removeClass('row-3col row-2col row-1col')
					$calc.addClass('row-3col')

					var time = 500

					stepEval.show($calc.$step1, time)
					time += stepEval.show($calc.$step2, time)
					time += stepEval.show($calc.$step3, time)

					$calc.children().fitTallest({ animate: false })
				}
			}
		]

		stepEval.watch($calc.$termSelect)

		stepEval.watch($calc.$lotSizeSelect)

		$('.vendorCalc select, .vendorCalc .output, .vendorCalc textarea, .rangeSlider').on('changeEffect', function() {
			var $item = $(this)
			$item.addClass('changed')

			setTimeout(function() {
				$item.removeClass('changed')
			}, 1000)
		})

		stepEval()

		$calc.children().fitTallest()

	})
})()


$.fn.fitTallest = function(opt) {
	opt || ( opt = {} )

	if ( opt.speed === undefined )		opt.speed = 400
	if ( opt.animate === undefined )	opt.animate = true

	var $items = $(this)

	var maxHeight = 0

	$items.each(function() {
		var $item = $(this)

		if ( ! $item.is(':visible') ) return null

		$item.css('height', '')

		var height = $item.innerHeight()

		if ( height > maxHeight ) maxHeight = height
	})

	$items.each(function() {
		if ( ! $(this).is(':visible') ) return null

		if ( opt.animate )
			$(this).animate({ height: maxHeight }, opt.speed)
		else
			$(this).css({ height: maxHeight })
	})

	return this
}
