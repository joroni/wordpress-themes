<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
<title><?php gab_title(); ?></title>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( of_get_option('of_rssaddr') <> "" ) { echo of_get_option('of_rssaddr'); } else { echo bloginfo('rss2_url'); } ?>" />	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>	

	<?php if(file_exists(TEMPLATEPATH . '/custom.css')) { ?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/custom.css" />
	<?php } ?>	
</head>

<body <?php body_class(); ?>>

<?php if(of_get_option('of_tr_ad1') <> "") { ?>
	<div id="topad">
		<?php gab_categoryad('sitewide_728x90'); ?>
	</div>
<?php } ?>

<div class="wrapper">

	<div id="masthead"></div>
	
	<div id="header">

		<?php if(of_get_option('of_header_type') == 'singleimage') { ?>
			<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?>">
				<img src="<?php echo of_get_option('of_himageurl'); ?>" id="header_banner" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>
			</a>
		<?php } else { ?>
		
		<div id="logo" style="padding:<?php echo of_get_option('of_padding_top'); ?>px 0 <?php echo of_get_option('of_padding_bottom'); ?>px <?php echo of_get_option('of_padding_left'); ?>px;">
		
			<?php 
			if ( of_get_option('of_logo_type') == 'image') { ?>
				<a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?>">
					<img src="<?php echo of_get_option('of_logo'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>
				</a>
			<?php } else { ?>
				<h1>
					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
						<?php bloginfo('name'); ?>
						<span><?php bloginfo('description'); ?></span>
					</a>
				</h1>
			<?php } ?>
		</div><!-- /logo -->
		
		<div class="banner">
			<?php gab_categoryad('sitewide_468x60'); ?>
		</div>
			
		<?php } ?>

		<div class="clear"></div>	
		
		
	</div><!-- /header -->
		
	<div class="clear"></div>		
	
	<div id="mainmenu">
		<ul class="mainnav dropdown">
			<li <?php if(is_home() ) { ?>class="current-cat first"<?php } ?>><a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('description'); ?>"><?php _e('Home','transcript'); ?></a></li>
			<?php
			if(of_get_option('of_nav1', 0) == 1) { 
				wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s'));
			} else {
				wp_list_categories('orderby='. of_get_option('of_order_cats') .'&order='. of_get_option('of_sort_cats') .'&title_li=&exclude='. of_get_option('of_ex_cats'));
			}		
			?>
		</ul>
		<div class="clear"></div>	
	</div>
	
	<div id="submenu">
		<ul class="secondarynav dropdown">
			<?php
			if(of_get_option('of_nav2', 0) == 1) { 
				wp_nav_menu( array('theme_location' => 'secondary', 'container' => false, 'items_wrap' => '%3$s'));
			} else {
				wp_list_pages('sort_column=menu_order&title_li=&exclude='. of_get_option('of_ex_pages'));
			}	
			?>
			<li><a href="#" class="gab_connect"><?php _e('Stay Connected','transcript'); ?></a>
				<ul id="social_links">
					<li><a class="gab_rss" href="<?php if ( of_get_option('of_tr_rssaddr') <> "" ) { echo of_get_option('of_tr_rssaddr'); } else { echo bloginfo('rss2_url'); } ?>" rel="nofollow" title="<?php _e('Subscribe to latest posts in RSS','transcript'); ?>"><?php _e('RSS for posts','transcript'); ?></a></li>
					<?php if ( of_get_option('of_feedemail') <> "" ) { ?><li><a class="gab_email" href="<?php echo of_get_option('of_feedemail'); ?>" rel="nofollow" title="<?php _e('Subscribe to latest posts via email','transcript'); ?>"><?php _e('Subscribe by e-mail','transcript'); ?></a></li><?php } ?>
					<?php if ( of_get_option('of_tr_twitter') <> "" ) { ?><li><a class="gab_twitter" href="http://www.twitter.com/<?php echo of_get_option('of_tr_twitter'); ?>" rel="nofollow" title="<?php _e('follow on twitter','transcript'); ?>"><?php _e('Follow us on Twitter','transcript'); ?></a></li><?php } ?>
					<?php if ( of_get_option('of_tr_facebook') <> "" ) { ?><li><a class="gab_facebook" href="<?php echo of_get_option('of_tr_facebook'); ?>" rel="nofollow" title="<?php _e('Connect on facebook','transcript'); ?>"><?php _e('Connect on Facebook','transcript'); ?></a></li><?php } ?>
				</ul>
			</li>
		</ul>

		<div id="search">
			<?php get_search_form(); ?>
		</div><!-- /search -->
		<div class="clear"></div>	
	</div>
	
	<div class="clear"></div>