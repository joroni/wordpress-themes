<?php

$postCount = 0;
$lambCat = get_category_by_slug('tiffany-lamb');
if ( $lambCat )
	query_posts(array(
		'cat' => '-' . $lambCat->term_id
	));

if (have_posts()) : while (have_posts()) : the_post();
		$postCount++;
		$thumb = '';
		$width = (int) get_option('thesource_thumbnail_width_usual');
		$height = (int) get_option('thesource_thumbnail_height_usual');
		$classtext = 'thumb alignleft';
		$titletext = get_the_title();

		$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
		$thumb = $thumbnail["thumb"];

		if ( $postCount === 3 ) {
			?>

<div class="ad-outer-container ad-afterThirdPost">
	<div class="ad-container">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-3525701263209076"
     data-ad-slot="8204212147"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	</div>
</div>

			<?php
		}
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
<?php endwhile; ?>
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
	else { ?>
		 <?php get_template_part('includes/navigation'); ?>
	<?php } ?>
<?php else : ?>
	<?php get_template_part('includes/no-results'); ?>
<?php endif; ?>