<?php 
/* ********************
 * Share Items
 * Required JS libraries for share items
 ******************************************************************** */
 function gab_twitter() {
	echo '<script type=\'text/javascript\'>
	<!--
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	// -->
	</script>';
 }
 
 function gab_facebook() {
	$language = get_bloginfo('language'); 
	$language = str_replace("-", "_", $language); 

	echo '
	<div id="fb-root"></div>
	<script type=\'text/javascript\'>
	<!--
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/'. $language .'/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, \'script\', \'facebook-jssdk\'));
	// -->
	</script>';
 }
 
 function gab_googleplus() {
	echo '<script type="text/javascript">
	  <!--
	  (function() {
		var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
		po.src = \'https://apis.google.com/js/plusone.js\';
		var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
	  })();
	  // -->
	</script>';
 
 }
 function gab_pinterest() {
	echo '<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
	
	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js">
	<!--
		document.body.innerHTML = document.body.innerHTML.replace(/&amp;;/g, "a");
	// -->
	</script>';
 }

add_action("wp_head", "theme_scripts"); 
add_action("wp_footer", "gab_facebook"); function theme_scripts() { ?>

	<script type='text/javascript'>
	(function($) {
		$(document).ready(function() { 
			
			$('a[href=#top]').click(function(){	$('html, body').animate({scrollTop:0}, 'slow');	return false; });
			
			$("ul.tabs").tabs("div.panes > div");			
			$("ul.sc_tabs").tabs("div.sc_tabs-content > div");
			
			$("#mediabar .container").jCarouselLite({
				<?php if(of_get_option('of_tr_media_rotate') == 'true'){ ?>
					auto:<?php if ( of_get_option('of_tr_media_pause') <> "" ) { echo of_get_option('of_tr_media_pause').'000'; } else { echo '5000'; } ?>,
				<?php } ?>
				scroll: <?php if ( of_get_option('of_tr_media_scroll') <> "" ) { echo of_get_option('of_tr_media_scroll'); } else { echo '2'; } ?>,
				speed: 800,	
				visible: 6,
				start: 0,
				circular: false,
				btnPrev: "#previous_button",
				btnNext: "#next_button"
			});
			
			$('#slides').slides({
				<?php if(of_get_option('of_tr_inner_rotate') == 'true') { ?>
				play: <?php if ( of_get_option('of_tr_inner_pause') <> "" ) { echo of_get_option('of_tr_inner_pause').'000'; } else { echo '5000'; } ?>,
				pause: 2500,
				hoverPause: true,
				<?php } ?>
				preload: true,
				autoHeight: true
			});			
		});
	})(jQuery);
	</script>
<?php } 

function theme_footer_scripts() { ?>

	<?php
	$language = get_bloginfo('language'); 
	$language = str_replace("-", "_", $language); 
	?>

	<div id="fb-root"></div>
	<script type='text/javascript'>
	<!--
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/<?php echo $language; ?>/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	// -->
	</script>
	
	<script type='text/javascript'>
	<!--
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	// -->
	</script>
	
	<script type="text/javascript">
		<!--
	  (function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	  // -->
	</script>
	
	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
	
	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js">
	<!--
		document.body.innerHTML = document.body.innerHTML.replace(/&amp;;/g, "a");
	// -->
	</script>

	
<?php }