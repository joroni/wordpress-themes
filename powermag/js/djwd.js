/*
==========================================================
SUPERFISH
==========================================================
*/

/*
* Superfish v1.4.8 - jQuery menu widget
* Copyright (c) 2008 Joel Birch
*
* Dual licensed under the MIT and GPL licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl.html
*
*/
(function($){$.fn.superfish=function(op){var sf=$.fn.superfish,c=sf.c,$arrow=$(['<span class="',c.arrowClass,'"> +</span>'].join("")),over=function(){var $$=$(this),menu=getMenu($$);clearTimeout(menu.sfTimer);$$.showSuperfishUl().siblings().hideSuperfishUl();},out=function(){var $$=$(this),menu=getMenu($$),o=sf.op;clearTimeout(menu.sfTimer);menu.sfTimer=setTimeout(function(){o.retainPath=($.inArray($$[0],o.$path)>-1);$$.hideSuperfishUl();if(o.$path.length&&$$.parents(["li.",o.hoverClass].join("")).length<1){over.call(o.$path);}},o.delay);},getMenu=function($menu){var menu=$menu.parents(["ul.",c.menuClass,":first"].join(""))[0];sf.op=sf.o[menu.serial];return menu;},addArrow=function($a){$a.addClass(c.anchorClass).append($arrow.clone());};return this.each(function(){var s=this.serial=sf.o.length;var o=$.extend({},sf.defaults,op);o.$path=$("li."+o.pathClass,this).slice(0,o.pathLevels).each(function(){$(this).addClass([o.hoverClass,c.bcClass].join(" ")).filter("li:has(ul)").removeClass(o.pathClass);});sf.o[s]=sf.op=o;$("li:has(ul)",this)[($.fn.hoverIntent&&!o.disableHI)?"hoverIntent":"hover"](over,out).each(function(){if(o.autoArrows){addArrow($(">a:first-child",this));}}).not("."+c.bcClass).hideSuperfishUl();var $a=$("a",this);$a.each(function(i){var $li=$a.eq(i).parents("li");$a.eq(i).focus(function(){over.call($li);}).blur(function(){out.call($li);});});o.onInit.call(this);}).each(function(){var menuClasses=[c.menuClass];if(sf.op.dropShadows&&!($.browser.msie&&$.browser.version<7)){menuClasses.push(c.shadowClass);}$(this).addClass(menuClasses.join(" "));});};var sf=$.fn.superfish;sf.o=[];sf.op={};sf.IE7fix=function(){var o=sf.op;if($.browser.msie&&$.browser.version>6&&o.dropShadows&&o.animation.opacity!=undefined){this.toggleClass(sf.c.shadowClass+"-off");}};sf.c={bcClass:"sf-breadcrumb",menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",arrowClass:"sf-sub-indicator",shadowClass:"sf-shadow"};sf.defaults={hoverClass:"sfHover",pathClass:"overideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},speed:"normal",autoArrows:true,dropShadows:true,disableHI:false,onInit:function(){},onBeforeShow:function(){},onShow:function(){},onHide:function(){}};$.fn.extend({hideSuperfishUl:function(){var o=sf.op,not=(o.retainPath===true)?o.$path:"";o.retainPath=false;var $ul=$(["li.",o.hoverClass].join(""),this).add(this).not(not).removeClass(o.hoverClass).find(">ul").hide().css("visibility","hidden");o.onHide.call($ul);return this;},showSuperfishUl:function(){var o=sf.op,sh=sf.c.shadowClass+"-off",$ul=this.addClass(o.hoverClass).find(">ul:hidden").css("visibility","visible");sf.IE7fix.call($ul);o.onBeforeShow.call($ul);$ul.animate(o.animation,o.speed,function(){sf.IE7fix.call($ul);o.onShow.call($ul);});return this;}});})(jQuery);


/* My Scripts */
jQuery.noConflict();

/*
==========================================================
MENU ITEMS CORNERS
==========================================================
*/

jQuery(document).ready(function ($) {
    $("li").each(function(){
        $(this).find("span.corner").addClass("custom-color"); //apply class custom-color to span
        if ($(this).find("span.corner").hasClass("custom-color")) {
            var cornerColor = $(this).find('small').text();
            if (cornerColor) {
				
				/* Chrome,Safari4+ */
                $(this).find("span.corner").css('background','-webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(50%,rgba(0,0,0,0)), color-stop(51%,' + cornerColor + '), color-stop(83%, ' + cornerColor + '), color-stop(100%,' + cornerColor + '))')
				
				/* Chrome10+,Safari5.1+ */
				$(this).find("span.corner").css('background','-webkit-linear-gradient(-45deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%,' + cornerColor + ' 51%,' + cornerColor + ' 83%,' + cornerColor + ' 100%);')
				
				/* FF3.6+ */
				$(this).find("span.corner").css('background','-moz-linear-gradient(-45deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0) 50%, ' + cornerColor + ' 51%, ' + cornerColor + ' 83%, ' + cornerColor + ' 100%)')
				
				/* Opera 11.10+ */
				$(this).find("span.corner").css('background','-o-linear-gradient(-45deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%, ' + cornerColor + ' 51%, ' + cornerColor + ' 83%, ' + cornerColor + ' 100%)')
				
				/* IE10+ */
				$(this).find("span.corner").css('background','-ms-linear-gradient(-45deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%,' + cornerColor + ' 51%,' + cornerColor + ' 83%,' + cornerColor + ' 100%)')
				
				/* W3C */
				$(this).find("span.corner").css('background','linear-gradient(135deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 50%,' + cornerColor + ' 51%,' + cornerColor + ' 83%,' + cornerColor + ' 100%)')
				
				/* IE6-9 fallback on horizontal gradient */
				$(this).find("span.corner").css('background','progid:DXImageTransform.Microsoft.gradient( startColorstr="#00333333", endColorstr="' + cornerColor + '",GradientType=1 )')
				
				/*Li's coloring*/
				$(this).find("li").css('background-color', cornerColor)

            }
        }
    });
}); 



/*
==========================================================
TRIGGERS
==========================================================
*/

jQuery(document).ready(function ($) {
	
	
	/**
	 * SuperFish Fire
	 */
	
	$('ul.menu').superfish({
	delay: 10,
	animation: {opacity:'show',height:'show'}, // animation
	speed: 'fast', // animation speed
	autoArrows: true // disable generation of arrow mark-up
	});
	

	/**
	 * FitVids
	 */
	
    $(".container").fitVids();
	

	/**
	 * Tooltips
	 */
	
	$('#pm-register-btn, #pm-login-btn').tooltip()
	$('[rel=tooltip]').tooltip()
	

	/**
	 * Reveal @since PM 1.1
	 */
	
	  $('#pm-register-btn').click(function(e) {
          e.preventDefault();
			$('#pm-register').reveal({
				 animationspeed: 300,
				 dismissmodalclass: 'close-reg'
			})
     });
	 
	  $('#pm-login-btn').click(function(e) {
          e.preventDefault();
			$('#pm-login').reveal({
				 animationspeed: 300,
				 dismissmodalclass: 'close-log'
			})
     });
	
	/**
	 * Hidden Content Trigger
	 */
	
	$('.collapse').collapse({
	  toggle: false
	})

	/**
	 * Scroll To Top
	 */
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn(300);
		} else {
			$('.scrollup').fadeOut(300);
		}
		}); 
	
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 400);
			return false;
	});
	

	/**
	 * Jackbox
	 */
	
	$('a[href]').filter(function() {
	  return /(jpg|gif|png)$/.test($(this).attr('href'))
	}).bind().addClass('jackbox'); //If a link targets an image, add .jackbox class
	
	$('.gallery-item .gallery-icon a').addClass('img-frame') //Add also img-frame class to galleries for hover effect @since PM 1.4.0 
	$('.jackbox').not(".entry-img .entry-img-src a").attr('data-group','powermag-gallery'); //Add data-group attribute
	$(".jackbox").not(".entry-img .entry-img-src a").attr("data-title", function() { //Get title and put it inside data-title
		
		return this.title;
	});

		$(".jackbox").each(function(){
		 
			var uniqueID = 'pm_cap_' + Math.floor( Math.random()*99999 ); //Generate Unique id name
			 
			var CaptionDivGallery = $(this).parent().next('.gallery-caption');
			var CaptionDivImage = $(this).siblings('.wp-caption-text'); //Set the correct relative caption divs or jackbox
			
			$(CaptionDivGallery).attr('id', uniqueID ); //Add the uniqueID to .gallery-caption (Galleries)
			$(CaptionDivImage).attr('id', uniqueID ); //Add the uniqueID to .wp-caption-text (Single Images)
	
			$(this).attr('data-description', '#' + uniqueID ); //Add the div name to data-description
	
		});
	
	$(".jackbox[data-group]").jackBox("init"); //initialize jackbox, thank you.

});


/*
==========================================================
EXTRAS
==========================================================
*/


jQuery(document).ready(function($) {
	
	/**
	 * Hide Widgets Post Date when the Sidebar gets thin to preserve layout
	 */

	var sidebarWidth = $('.custom-widget');
	var date = $('.custom-widget .post-attribute');
	var width = sidebarWidth.width();
	
	if (width < 370)
    date.addClass('hidden');


	/**
	 * Add Some Classes here and there
	 */
	
    $('input#submit, .wpcf7-submit, #members_search_submit, #groups_search_submit, #messages_search_submit').addClass('btn');
	$('.generic-button, #delete_inbox_messages').addClass('btn btn-mini');
	$('#delete-group-avatar-button, #delete_inbox_messages').addClass('btn-danger');
	$('.wpcf7-submit').attr('data-loading-text','Processing..');
	$('.flickr a').addClass('img-frame')
	/* @since PM 1.4.0 */
	$('.buddypress .pagination-links').wrap('<div class="page-nav" />');
	$('.buddypress .pagination-links .page-numbers').addClass('boxed');
	
	
	/**
	 * Add BuddyPress Notifications Icon @since PM 1.4.0
	 */
	 $('.pm-bp-notice a').prepend('<i class="icon-exclamation-sign"></i>')
	 $('span.pm-bp-badge').appendTo('.pm-logged-welcome')


	/**
	 * Remove empty li's and p's
	 */
	 
	$('li, p').each(function() {
		var $this = $(this);
		if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
			$this.remove();
	});

});


/**
 * Calculate Flexslider ControlNav width to position category name
 */
	
jQuery(window).load(function() {
		
	var widthControlsLeft = jQuery('.slider1 .flex-control-nav').outerWidth();
	var widthControlsRight = jQuery('.slider2 .flex-control-nav').outerWidth();
	
	jQuery('.slider1 .flex-cat').css('left', widthControlsLeft + 1);
	jQuery('.slider2 .flex-cat').css('right', widthControlsRight + 1);
	
});