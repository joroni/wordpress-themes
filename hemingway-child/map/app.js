
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