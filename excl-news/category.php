<?php
//* Template Name: Russells

// $posts = array();

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'test' );
add_action( 'genesis_before_content', 'sort_posts' );

add_action( 'genesis_header', 'add_mobile_nav' );
add_action( 'genesis_before', 'custom_mobile_nav' );
add_action( 'genesis_header', 'add_follow_us_section' );

function add_follow_us_section() {
    show_social_media();
}

remove_action( 'genesis_after_post_content', 'genesis_post_meta' );

add_action( 'genesis_before_footer', 'external_sites' );

function external_sites() {
        ?>
        <div id="main-footer">
                <div id="footer-widgets">
                        <div id="other-site-feeds">
                                <div class="column">
                                        <div id="other-site-feeds-left"><div class="footer-column first"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsLeft1' ); ?></div></div></div>
                                        <div id="other-site-feeds-middle"><div class="footer-column"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsMiddle1' ); ?></div></div></div>
                                        <div id="other-site-feeds-right"><div class="footer-column last"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsRight1' ); ?></div></div></div>

                                        <div class="clear"></div>
                                </div>

                                <div class="column">
                                        <div id="other-site-feeds-left"><div class="footer-column first"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsLeft2' ); ?></div></div></div>
                                        <div id="other-site-feeds-middle"><div class="footer-column"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsMiddle2' ); ?></div></div></div>
                                        <div id="other-site-feeds-right"><div class="footer-column last"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsRight2' ); ?></div></div></div>

                                        <div class="clear"></div>
                                </div>

                                <div class="column">
                                        <div id="other-site-feeds-left"><div class="footer-column first"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsLeft3' ); ?></div></div></div>
                                        <div id="other-site-feeds-middle"><div class="footer-column"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsMiddle3' ); ?></div></div></div>
                                        <div id="other-site-feeds-right"><div class="footer-column last"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsRight3' ); ?></div></div></div>

                                        <div class="clear"></div>
                                </div>

                                <div class="column">
                                        <div id="other-site-feeds-left"><div class="footer-column first"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsLeft4' ); ?></div></div></div>
                                        <div id="other-site-feeds-middle"><div class="footer-column"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsMiddle4' ); ?></div></div></div>
                                        <div id="other-site-feeds-right"><div class="footer-column last"><div class="footer-widget"><?php dynamic_sidebar( 'OtherSiteFeedsRight4' ); ?></div></div></div>
                                </div>
                        </div>

                        <div class="clear"></div>
                </div>
        </div>
        <?php
}


function render_main_stories($top_images, $top_headings, $story_urls) {
	?>

	<div class="huge-top-stories">
        <div class="image-content">
            <?php
            $i = 0;
            foreach( $top_images as $image ) {
                ?><div class="frame panel <?php echo 'frame-' . $i; if( $i == 0 ) { echo ' active'; } ?>">
                <span class="helper"></span>
                <?php echo $image; ?>
                </div>
                <?php
                $i++;
            }

            ?>
        </div>
        <div class="story-list">
            <h2>Todays Top Stories</h2>
            <?php
            $i = 0;
            array_pop($top_headings); # Removes the last story to make space for the ad
            foreach( $top_headings as $heading ) {
                ?>
                <a href="<?php echo $story_urls[$i]; ?>" data-target="frame-<?php echo $i; ?>" class="story-item panel <?php if( $i == 0 ) { echo 'first active'; } ?>">
                    <span class="arrow"></span>
                    <span><?php echo $heading; ?></span>
                </a>
                <?php
                $i++;
            }

            ?>

            <div class="top-stories-ad">
                <div class="ad-container">
                    <?php dynamic_sidebar("TopStoriesAd"); ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <?php
}

function sort_posts() {
	$post_count = 1;
	$main_images = array();
	$main_stories = array();
	$story_urls = array();

	if ( have_posts() ) : while ( have_posts() ) : the_post();
		if($post_count < 7 ) {
			array_push( $main_images, get_the_post_thumbnail( get_the_ID(), 'full' ) );

    		array_push( $main_stories, get_the_title() );

    		array_push( $story_urls, get_permalink() );
		}

		$post_count++;

	endwhile; //* end of one post

	render_main_stories( $main_images, $main_stories, $story_urls );

	else : //* if no posts exist
		do_action( 'genesis_loop_else' );
	endif; //* end loop
}

function test() {
	$post_count = 0;

	$category = get_category( get_query_var( 'cat' ) );
	$cat_id = $category->cat_ID;

	$ppp = get_option('posts_per_page');
	$paged = get_query_var( 'paged' );
	$offset = 6;
	$page_offset = 6;

	if( $paged > 1 ) {
		$page_offset = $offset + ( ($paged-1) * $ppp );
	}

	$posts_array = new WP_Query( array( 'cat' => $cat_id, 'offset' => $page_offset, 'posts_per_page' => 4 ) );
	$num_of_posts = count( $posts_array );

	if ( $posts_array->have_posts() ) : while ( $posts_array->have_posts() ) : $posts_array->the_post();

		post_content( $post_count );

		$post_count++;
	endwhile;

	do_action( 'genesis_after_endwhile' );

	wp_reset_query();

	endif;
}

function post_content( $post_count ) {
	do_action( 'genesis_before_entry' );

	printf( '<article %s>', class_attributes( 'entry', $post_count ) );

		do_action( 'genesis_before_entry_content' );
		printf( '<div %s>', genesis_attr( 'entry-content' ) );
			normal_post();

		echo '</div>'; //* end .entry-content
		do_action( 'genesis_after_entry_content' );

	echo '</article>';

	do_action( 'genesis_after_entry' );
}

function featured_post() {
	?>

	<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
	<div class="featured-image">
		<?php the_post_thumbnail('full'); ?>
	</div>
	<div class="post-content">
		<?php the_excerpt(); ?>
	</div>

	<?php
}

function normal_post() {
	?>

	<div class="post-container">
		<div class="left-section">
			<a href="<?php echo get_permalink( $post_data->ID ); ?>"><?php echo get_the_post_thumbnail( get_the_ID(), 'medium'); ?></a>
		</div>
		<div class="right-section">
			<h2><a href="<?php echo get_permalink( $post_data->ID ); ?>"><?php echo string_limit_chars( get_the_title(), 40 ); ?></a></h2>

			<div class="post-content">
				<?php echo string_limit_chars( strip_tags(get_the_content()), 200 ); ?>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<?php
}

function render_carousel() {
	printf( '<div class="span12" style="background: red; display: block; height: 200px;"></div>' );
}

function class_attributes( $context, $post_count ) {
	$output = genesis_attr( $context );

	$split = explode( 'class="', $output );

	return $split[0] . 'class="' . bootstrap_class_attributes( $post_count ) . $split[1];
}

function bootstrap_class_attributes( $post_index ) {

	if( $post_index % 5 == 0 ) {
		$classes = $classes . 'featured-post ';
	}

	return $classes;
}


function display_thumnail_image( $position ) {
	$args = array(
		'size' => 'thumb'
	);
	$image = genesis_get_image( $args );

	if( $image ) {
		printf( '<a href="%s" class="post-thumbnail-image %s">%s</a>', get_permalink(), $position, $image );
	}
}

function display_featured_image() {
	$args = array(
		'size' => 'full'
	);
	$image = genesis_get_image( $args );

	if( $image ) {
		printf( '<a href="%s" class="post-featured-image">%s</a>', get_permalink(), $image );
	}
}

function string_limit_chars( $string, $limit ) {
	$strlength = strlen( $string );
	$newstr = substr( $string, 0, $limit );

	if( $strlength > $limit ) {
		return $newstr . ' ...';
	}

	return $newstr;
}

function string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

genesis();