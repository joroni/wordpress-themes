<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/superfish.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollable.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery('ul.superfish').superfish();
		if (jQuery("#scrollable").length) jQuery("#scrollable").scrollable({horizontal:true,size: 4});
		<?php if (get_option('whoswho_disable_toptier') == 'on') echo('jQuery("ul.nav > li > ul").prev("a").attr("href","#");'); ?>
    jQuery('.flexslider').flexslider({
      animation: 'slide',
      controlsContainer: '.flex-container'
    });
	});
</script>

<div id="fb-root"></div>

<script type="text/javascript">
window.fbAsyncInit = function() {
  FB.init({appId: '<APPID>', status: true, cookie: true, xfbml: true});
};

(function() {
  var e = document.createElement('script');
  e.type = 'text/javascript';
  e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';;
  e.async = true;
  document.getElementById('fb-root').appendChild(e);
}());

jQuery(document).ready(function($) {
  // Load Tweet Button Script
  var e = document.createElement('script');
  e.type="text/javascript"; e.async = true;
  e.src = 'http://platform.twitter.com/widgets.js';
  document.getElementsByTagName('head')[0].appendChild(e);

  // Load LinkedIn button
  var e = document.createElement('script');
  e.type="text/javascript"; e.async = true;
  e.src = 'http://platform.linkedin.com/in.js';
  document.getElementsByTagName('head')[0].appendChild(e);

  // Load Plus One Button
  var e = document.createElement('script');
  e.type="text/javascript"; e.async = true;
  e.src = 'https://apis.google.com/js/plusone.js';
  document.getElementsByTagName('head')[0].appendChild(e);

  // Load StumbleUpon button
  var e = document.createElement('script');
  e.type="text/javascript"; e.async = true;
  e.src ='http://www.stumbleupon.com/hostedbadge.php?s=1&a=1&d=stumbleupon-button';
  document.getElementsByTagName('head')[0].appendChild(e);
}
</script>