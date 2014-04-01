<?php
/*
Template Name: Blank Page
*/

get_header();

$pm_full_width = get_post_meta(get_the_ID(), 'pm_full_width_switch', true); ?>

<div class="row">

		<div id="primary" class="content-area span12">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
	<div class="span4"><?php get_sidebar(); ?></div>
</div><!-- .row (single)-->
<?php get_footer(); ?>