<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	
<?php if ( get_option_mmtheme('seo_on_off') == 'true' ) { ; ?>
<!-- Magazine3 SEO Starts- http://magazine3.com/ -->
<title><?php m3_titles(); ?></title>
<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<meta name="keywords" content="<?php echo get_option_mmtheme( 'homepage-seo-keyword' ) ?>" />
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="<?php echo get_option('blogdescription'); ?>" />
<meta name="keywords" content="<?php echo get_option_mmtheme( 'homepage-seo-keyword' ) ?>" /> <?php endif; ?>
<?php if ( get_option_mmtheme('canonical_on_off') == 'true' ) { ;?> 
<?php #homepage urls
if (is_home() )echo '<link rel="canonical" href="'.get_bloginfo('url').'" />';
#single page urls
global $wp_query; 
$postid = $wp_query->post->ID; 
if (is_single() || is_page()) echo '<link rel="canonical" href="'.get_permalink().'" />';	
#index page urls
if (is_archive() || is_category() || is_search()) echo '<link rel="canonical" href="'.get_permalink().'" />';	
?> <?php } ?> 
<?php rel_next_prev(); ?>  
<?php m3_indexing(); ?>
<!-- Magazine3 SEO ENDS- http://magazine3.com/ -->
<?php } elseif ( ( get_option_mmtheme('seo_on_off') == 'false' ) ) {  ?>	 
<title>
 <?php wp_title(' '); ?>
 <?php if(wp_title(' ', false)) { echo '|'; } ?> 
 <?php bloginfo('name'); ?>
 </title>
<?php } ?>

<meta name="generator" content="Magazine3 Framework" />
<link rel="profile" href="http://gmpg.org/xfn/11" /> 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

 <!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!-- OpenGraph Facebook Start --> 
<?php if (is_single()) { ?>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<?php function og_meta_desc() {
	global $post;
	$meta = strip_tags($post->post_content);
	$meta = strip_shortcodes($meta);
	$meta = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), ' ', $meta);
	$meta = substr($meta, 0, 200);
	if ( $meta != '' ) {
		echo "<meta property=\"og:description\" content=\"$meta...\" />";
	} else {
		echo "<meta property=\"og:description\" content=\"Here is some cool new content.  Check it out.\" />";
	}
} og_meta_desc(); ?>
<meta property="og:image" content="<?php echo wp_get_attachment_thumb_url( get_post_thumbnail_id( $post->ID ) ) ?>" /> <?php } else { } ?>
<!-- OpenGraph Facebook Ends -->

<?php mmtheme_get_google_font( get_option_mmtheme( 'body_postpage_font' ) ) ?> 
<?php mmtheme_get_google_font( get_option_mmtheme( 'slider_cats_area' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h1_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h2_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h3_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h4_font' ) ) ?>
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h5_font' ) ) ?> 
<?php mmtheme_get_google_font( get_option_mmtheme( 'body_h6_font' ) ) ?> 


 <style>
.single-wrapper .entry-content p, .single-wrapper .entry-content  {font-size: <?php get_option_mmtheme( 'postcontent_font_size' , true) ?>px !important; }
 .entry-content h1 {font-family: <?php get_option_mmtheme( 'body_h1_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h1_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h1_font_color' , true) ?> ;}
 .entry-content h2 {font-family: <?php get_option_mmtheme( 'body_h2_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h2_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h2_font_color' , true) ?> ;}
 .entry-content h3 {font-family: <?php get_option_mmtheme( 'body_h3_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h3_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h3_font_color' , true) ?> ;}
 .entry-content h4 {font-family: <?php get_option_mmtheme( 'body_h4_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h4_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h4_font_color' , true) ?> ;}
 .entry-content h5 {font-family: <?php get_option_mmtheme( 'body_h5_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h5_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h5_font_color' , true) ?> ;}
 .entry-content h6 {font-family: <?php get_option_mmtheme( 'body_h6_font' , true) ?> ;font-size: <?php get_option_mmtheme( 'body_h6_font_size' , true) ?>px !important; color:  <?php get_option_mmtheme( 'body_h6_font_color' , true) ?> ;}

 
  

.entry-content a {
 color: <?php get_option_mmtheme( 'body_link_color' , true) ?> !important;
text-decoration : none;
}
.entry-content a:hover	{
 color:<?php get_option_mmtheme( 'body_link_hover_color' , true) ?> !important;
text-decoration : none;
}</style>
 

<?php wp_head(); ?> 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css" type="text/css" media="screen" />
 
</head>
<body <?php body_class(); ?>>
<div class="top1"><a name="top"></a></div>

<?php if ( get_option_mmtheme('ad_1_on_off') == 'true' ) { ;?> 
<div class="ad-1">
<?php echo stripslashes( get_option_mmtheme('ad_1') ) ?>  		
</div>
<?php } ?> 


<div class="header-wrapper">	
		<!-- trending -->
		<div class="trending-wrapper">
			<div class="trending-holder">
				<div class="trending">
					<div class="trending-text"> TRENDING </div>						 
					<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'first', 'container_id' => 'trending-menu', 'container_class' =>'trending', 'fallback_cb'=>'primarymenu1') );?>
				</div>
					<div class="home-navigate">
						<div class="navigate-text">Navigate<span class="navigate-arrow"></span></div>	
						<div class="navigate-dropdown"> <?php wp_nav_menu( array( 'theme_location' => 'second', 'container_class' =>'navigate-menu',  'fallback_cb'=>'primarymenu4') );?> </div>	
					</div>
				<div class="cb"></div>	
			</div>
		</div>	
		<!-- end trending -->
	<!-- header -->
	<header id="masthead" class="site-header" role="banner">	
		<div id="header">
	 
			<div class="head-wrapper">				
				<div class="logo-holder">
				<div class="logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_option_mmtheme( 'custom_logo_value' ) ?>" alt="" /> </a></div>
				</div>	
					
				<div class="social-wrapper">								 
					<div class="top-slider">
						<?php if ( get_option_mmtheme('top_slider') == 'true' ) { ;?> 
							<?php  get_template_part( 'featured-small', get_post_format() );?>	
						<?php } ?>
					</div>

					<div class="contact-us">
						<?php dynamic_sidebar( 'Contact Us' ); ?>
					</div>

							
					
						 
					<!-- search starts -->
						<div class="search-form-default">
							<form method="get" class="headsearch" action="<?php bloginfo('url'); ?>/">
							<input type="text" name="s" value="" onblur="if(this.value=='') this.value='';" onfocus="if(this.value=='') this.value='';" id="shead-default" />
							<input type="submit" value=" " class="searchsubmit-default" />
							</form>
						</div>
				<!-- search ends --> 						
						
						
					<!-- social-holder -->
					<div class="social-holder">							
							<ul class="social-networks">
							<?php if ( get_option_mmtheme('social8_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social8_link') ) ?>" class="rss">rss</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social12_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social12_link') ) ?>" class="youtube">youtube</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social10_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social10_link') ) ?>" class="twitter">twitter</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social7_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social7_link') ) ?>" class="pinterest">pinterest</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social3_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social3_link') ) ?>" class="flickr">flickr</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social5_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social5_link') ) ?>" class="gplus">gplus</a></li>
							<?php 	} ?>
							<?php if ( get_option_mmtheme('social6_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social6_link') ) ?>" class="linkedin">linkedin</a></li>
							<?php 	} ?>									
							<?php if ( get_option_mmtheme('social11_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social11_link') ) ?>" class="vimeo">vimeo</a></li>
							<?php 	} ?>								
							<?php if ( get_option_mmtheme('social2_on_off') == 'true' ) { ;?>
							<li><a target="_blank" href="<?php echo stripslashes( get_option_mmtheme('social2_link') ) ?>" class="facebook">facebook</a></li>
							<?php 	} ?>
							</ul> 
					</div>
						<div class="cb"></div>
 
				</div>
			<div class="cb"></div>
			</div>	
		</div>	

		<!-- menu -->
		<nav id="top-menu">
			<div class="responsivemenu"> <nav id="mobile-menu" role="navigation"></nav></div>
			<div class="menu">
<?php wp_nav_menu( array( 'walker' => new Arrow_Walker_Nav_Menu, 'theme_location' => 'third', 'container_id' => 'menu-22', 'container_class' =>'ddsmoothmenu', 'menu-header', 'fallback_cb'=>'primarymenu3') );?> 
			</div>
		</nav>
		
<!-- #navigation-wrapper -->
		<!-- end menu -->	
	</header> 
	<!-- end header -->
</div>

<div id="main">
<div class="ad-outer-container ad-topBanner">
	<div class="ad-container">
		<a href="http://ltsc.com.au">
			<img width="100%" style="max-width:728px;" src="http://ltsc.wpengine.com/wp-content/themes/ltsc/img/ad728x90.gif" />
		</a>
	</div>
</div>
<?php get_template_part( 'featured', get_post_format() );?>
