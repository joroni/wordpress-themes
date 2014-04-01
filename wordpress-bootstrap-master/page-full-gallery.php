<?php
/*
Template Name: Full Gallery Page
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row-fluid">

				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>

							<div class="page-header"><h1><?php the_title(); ?></h1></div>

						</header> <!-- end article header -->

						<section class="post_content">
							<div id="myCarousel" class="carousel slide">
							<?php
								$args = array(
									'post_type' => 'attachment',
									'numberposts' => -1,
									'post_status' => null,
									'post_parent' => $post->ID
								);

								$attachments = get_posts( $args );
								if( $attachments ) {
									echo '<ol class="carousel-indicators">';
									for($i = 0; $i < count($attachments); $i++) {
									    if( $i == 0 ) {
									    	echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
									    } else {
									    	echo '<li data-target="#myCarousel" data-slide-to="' . $i . '"></li>';
									    }
									}
									echo '</ol>';
									echo '<div class="carousel-inner">';
									foreach($attachments as $attachment) {
										echo '<div class="active item">' . wp_get_attachment_image( $attachment->ID, "full" ) . '</div>';
									}
									echo '</div>';

									echo '<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>';
									echo '<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>';
								}
							?>
							</div>

						</section> <!-- end article section -->

						<footer>

							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

					<?php endwhile; ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<?php //get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>