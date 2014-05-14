
var wait = function(time, cb) {
	return setTimeout(cb, time)
}

$(document).ready(function() {
	var menu = {
		items: [],
		fixedOffset: 75
	}

	menu.find = function(scrollTo) {
		for ( var key in this.items ) {
			if ( this.items[key].key === scrollTo ) return this.items[key]
		}
		return null
	}

	menu.checkLocation = function() {
		for ( var index = this.items.length - 1; index >= 0; --index ) {
			var item = this.items[index]

			if (
				(
					( item.$target.offset().top - ( menu.fixedOffset * 2 ) ) <= $window.scrollTop()
				)
			) {
				if ( menu.item && menu.item.$target.is(item.$target) ) return null

				this.activate(item)
				break
			}
		}
	}

	menu.activate = function(item) {
		//if ( item.$button.parent().hasClass('active') ) return null

		item.$button.parent().addClass('active').siblings().removeClass('active')
		moveUnderline(item.$button)

		this.item = item
	}

	menu.scrollTo = function(item, offset, speed) {
		offset || ( offset = this.fixedOffset )
		speed || ( speed = 800 )

		menu.makeFixed()
		menu.scrolling = true

		var position = item.$target.offset().top - offset
		if ( position < 0 ) position = 0

		$window.scrollTo( position, speed, function() {
			menu.scrolling = false
			menu.position()
		})
	}

	menu.position = function(offset) {
		offset || ( offset = 3 )

		if ( $window.scrollTop() >= offset ) {
			this.makeFixed()
		} else {
			this.makeStatic()
		}

		return null
	}

	menu.makeFixed = function() {
		if ( ! $body.hasClass('fixedMenu') ) return $body.addClass('fixedMenu')
	}

	menu.makeStatic = function() {
		if ( $body.hasClass('fixedMenu') ) return $body.removeClass('fixedMenu')
	}
	
	var $window	= $(window)
	,	$body	= $('body')

	$window.on('scroll.checkMenu', function() {
		if ( $window.timeout || menu.scrolling ) return null

		$window.timeout = wait(100, function() {
			$window.timeout = null
			menu.checkLocation()
		})
	})

	// Makes the menu become fixed position on scroll
	$window.on('scroll.menu', function() {
		if ( menu.scrolling ) return null

		// if position changed
		if ( menu.position() ) {
			moveUnderline.reposition()
		}
	})

	$window.on('resize', function() {
		clearTimeout($menu.$items.$scrollables.$active.timeout)
		$menu.$items.$scrollables.$active.timeout = wait(100, function() {
			moveUnderline.move($menu.$items.$scrollables.$active)
		})
	})

	var $menu = $('.menu')

	$menu.$items = $menu.find('.menuItem')
	$menu.$items.$anchors = $menu.find('.menuItem a')
	$menu.$items.$scrollables = $menu.find('.menuItem [data-scroll]')
	$menu.$items.$scrollables.$active = $menu.$items.filter('.active').find('[data-scroll]')

	$menu.$underline = $menu.find('.underline')

	$menu.$items.$scrollables.each(function() {
		var $item		= $(this)
		,	scrollTo	= $item.data('scroll') || ''
		,	$scrollTo	= $( scrollTo )

		if ( $scrollTo.length ) {
			menu.items.push({
				$button: $item, $target: $scrollTo, key: scrollTo
			})
		}
	})

	$menu.$items.$scrollables.on('click', function(event) {
		event.preventDefault()

		var $item		= $(this)
		,	$menuItem	= $item.parent()
		,	scrollTo	= $item.data('scroll')
		,	href		= $item.attr('href')

		//if ( $menuItem.is('.active') ) {
		//	event.preventDefault()
		//	return null
		//}
		
		var item = menu.find(scrollTo)

		if ( ( ! item || ! item.$target.length ) && href ) {
			window.location.href = href
			return null
		}

		menu.activate(item)
		menu.scrollTo(item)
	})

	var moveUnderline = function($item) {
		if ( ! $item.length ) return $menu.$underline

		var position		= $item.position()
		,	left			= position.left
		,	top				= position.top + $item.innerHeight()
		,	removedWidth	= 10
		,	firstWidth		= $item.innerWidth() - removedWidth

		moveUnderline.$item = $item

		return $menu.$underline.stop().clearQueue().animate({
			left: left + (removedWidth / 2), top: top,
			width: firstWidth,
			opacity: 1
		}, 350, function() {
			$(this).animate({
				opacity: 0.4,
				width: firstWidth - removedWidth,
				left: left + removedWidth,
			}, 200)
		})
	}

	moveUnderline.reposition = function() {
		if ( this.$item ) {
			moveUnderline(this.$item)
		}
	}

	moveUnderline.move = function($item) {
		if ( ! $item.length ) return $menu.$underline

		var position		= $item.position()
		,	left			= position.left
		,	top				= position.top + $item.innerHeight()
		,	removedWidth	= 10
		,	firstWidth		= $item.innerWidth() - removedWidth

		moveUnderline.$item = $item

		return $menu.$underline.stop().clearQueue().css({
			left: left + (removedWidth / 2), top: top,
			width: firstWidth,
			opacity: 1
		})
	}

	$menu.$items.$scrollables.on('mouseover', function() {
		clearTimeout( $menu.$items.leaveTimeout )

		moveUnderline($(this))
	})

	$menu.$items.$scrollables.on('mouseleave', function() {
		var $item = $(this)
		,	$menuItem = $item.parent()

		clearTimeout( $menu.$items.leaveTimeout )

		$menu.$items.leaveTimeout = wait(600, function() {
			if ( ! $menuItem.hasClass('active') ) {
				moveUnderline( $menu.$items.filter('.active').find('[data-scroll]') )
			}
		})
	})



	menu.position()
	menu.checkLocation()
	moveUnderline($menu.$items.$scrollables.$active)



	var $mobileMenu = $('.mobileBasicMenu')

	$mobileMenu.$itemsBox = $mobileMenu.find('.mobileMenuItems')
	$mobileMenu.$itemButtons = $mobileMenu.find('.mobileMenuItems a')
	$mobileMenu.$menuButton = $mobileMenu.find('.mobileMenuButton')

	$mobileButtons = $mobileMenu.$menuButton.add($mobileMenu.$itemButtons)
	$mobileButtons.on('click', function() {
		var $button = $(this)

		$button.toggleClass('active')
		$mobileMenu.$itemsBox.toggle()
	})

	$mobileMenu.$itemButtons.on('click', function(event) {
		event.preventDefault()

		var $item		= $(this)
		,	scrollTo	= $item.data('scroll') || ''
		,	href		= $item.attr('href')

		var item = menu.find(scrollTo)

		if ( ( ! item || ! item.$target.length ) && href ) {
			window.location.href = href
			return null
		}

		menu.activate(item)
		menu.scrollTo(item)
	})


	var $spoilers = $('.spoilers .spoilerButton')

	$spoilers.on('click', function(event) {
		event.preventDefault()

		var $button = $(this)
		,	$content = $button.next('.spoiler')

		$content.toggleClass('active')
		$button.toggleClass('active')


	})



})