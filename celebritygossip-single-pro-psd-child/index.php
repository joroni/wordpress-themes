<?php get_header(); ?>

<div class="hgroup"><hgroup>
<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
</hgroup></div>

<?php insertAd('ad-topBanner'); ?>
<div id="content-wrapper" class="site-content">
	<div id="content" role="main">	
		<section>
			<div class="section_content"> <?php include("normalposts.php"); ?> 	
			</div><!-- .section-content -->
		</section>
	</div><!-- #content -->
<?php get_sidebar(); ?>	
<?php get_footer(); ?>