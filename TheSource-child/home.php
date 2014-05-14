<?php get_header(); ?>

<?php if (get_option('thesource_recent_fromcat_display') == 'on') { ?>
	<div id="from-categories" class="clearfix">
		<?php $last = false; ?>
		<?php $headingColor = 'orange'; ?>
		<div class="recent-cat first">
			<?php $cat_option='thesource_home_cat_one'; ?>
			<?php query_posts("posts_per_page=1&cat=".get_catId(get_option($cat_option)));
				  while (have_posts()) : the_post(); ?>
					  <?php include(get_stylesheet_directory() . '/includes/recent-cat.php'); ?>
			<?php endwhile; wp_reset_query(); ?>
		</div> <!-- end .recent-cat-first -->

		<?php $headingColor = 'green'; ?>
		<div class="recent-cat">
			<?php $cat_option='thesource_home_cat_two'; ?>
			<?php query_posts("posts_per_page=1&cat=".get_catId(get_option($cat_option)));
				  while (have_posts()) : the_post(); ?>
					   <?php include(get_stylesheet_directory() . '/includes/recent-cat.php'); ?>
			<?php endwhile; wp_reset_query(); ?>
		</div> <!-- end .recent-cat -->

		<?php $headingColor = 'light-blue'; ?>
		<div class="recent-cat">
			<?php $cat_option='thesource_home_cat_three'; ?>
			<?php query_posts("posts_per_page=1&cat=".get_catId(get_option($cat_option)));
				  while (have_posts()) : the_post(); ?>
					   <?php include(get_stylesheet_directory() . '/includes/recent-cat.php'); ?>
			<?php endwhile; wp_reset_query(); ?>
		</div> <!-- end .recent-cat -->

		<?php $headingColor = 'blue'; ?>
		<div class="recent-cat last">
		<?php $last = true; ?>
			<?php $cat_option='thesource_home_cat_four'; ?>
			<?php query_posts("posts_per_page=1&cat=".get_catId(get_option($cat_option)));
				  while (have_posts()) : the_post(); ?>
					   <?php include(get_stylesheet_directory() . '/includes/recent-cat.php'); ?>
			<?php endwhile; wp_reset_query(); ?>
		</div> <!-- end .recent-cat -->
	</div> <!-- end #from-categories -->
<?php }; ?>

<div id="main-content-wrap">
	<div id="main-content" class="clearfix">
		<div id="recent-posts" class="clearfix">
			<h4 class="title"><?php esc_html_e('Recent Posts','TheSource'); ?></h4>
				<?php

			if ( $lambCat = get_category_by_slug('tiffany-lamb') ) {
				$thumb = '';
				$ps = query_posts(array(
					'category' => $lambCat->term_id,
					'posts_per_page' => 1
				));

				if ( $ps ) {
					?>
					<div class="tiffanyLambSection">
					<img class="tiffanyLambBanner" src="<?php echo get_stylesheet_directory_uri() ?>/img/tiffanyLambBanner.jpg" />
					<?php
					foreach($ps as $p) {
					setup_postdata( $p );
					?>
						<div class="entry clearfix" >
							<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<div class="entry-content clearfix">
								<?php if ($thumb <> '' && get_option('thesource_thumbnails_index') == 'on') { ?>
									<a href="<?php the_permalink(); ?>">
										<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext , $width, $height, $classtext); ?>
									</a>

									<?php if (get_option('thesource_postinfo1') ) { ?>
										<?php if (in_array('date', get_option('thesource_postinfo1'))) { ?>
											<p class="date"><span><?php the_time(get_option('thesource_date_format')) ?></span></p>
										<?php }; ?>
									<?php }; ?>
								<?php }; ?>

								<?php if (get_option('thesource_blog_style') == 'on') the_content(""); else { ?>
									<p><?php truncate_post(365); ?></p>
								<?php }; ?>

							</div> <!-- end .entry-content -->

							<div class="post-meta clearfix">
								<?php get_template_part('includes/postinfo'); ?>

								<?php echo do_shortcode('[social_share]'); ?>

								<a href="<?php the_permalink(); ?>" class="readmore"><span><?php esc_html_e('Read More','TheSource'); ?></span></a>
							</div>
						</div> <!-- end .entry -->

					<?php
					} ?>
					</div>

				<?php }
					wp_reset_query();

				}
				?>

			<?php get_template_part('includes/entry'); ?>
		</div> <!-- end #recent-posts -->

		<?php get_sidebar(); ?>

<?php get_footer(); ?>