<?php get_header(); ?>

<?php if ( 'on' == et_get_option( 'styleshop_featured', 'on' ) && is_home() ) get_template_part( 'includes/featured', 'home' ); ?>

<div class="ad-outer-container ad-belowFeatured">
	<div class="ad-container">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Excl-news HomeMiddleAd -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3525701263209076"
     data-ad-slot="5359993747"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	</div>
</div>

<?php if ( 'on' == et_get_option( 'styleshop_display_offers', 'on' ) ) : ?>
<?php
	$args = array(
		'post_type'			=> 'offer',
		'posts_per_page' 	=> (int) et_get_option( 'styleshop_home_offers_number', 6 )
	);
	$et_offers_query = new WP_Query( apply_filters( 'et_home_offers_query_args', $args ) );
	if ( $et_offers_query->have_posts() ) : ?>
	<section id="special-offers">
		<h1><?php esc_html_e( 'Special Seasonal Offers', 'StyleShop' ); ?></h1>
		<div id="offers">
			<div class="et-carousel-wrapper">
				<ul class="clearfix">
				<?php while ( $et_offers_query->have_posts() ) : $et_offers_query->the_post(); ?>
				<?php
					$thumb = '';
					$width = 440;
					$height = 275;
					$classtext = '';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Offer' );
					$thumb = $thumbnail["thumb"];

					$custom_permalink 	= ( $et_custom_permalink = get_post_meta( get_the_ID(), '_et_offer_custom_link', true ) ) && '' != $et_custom_permalink ? $et_custom_permalink : '#';
					$custom_button		= ( $et_custom_button = get_post_meta( get_the_ID(), '_et_offer_button_text', true ) ) && '' != $et_custom_button ? $et_custom_button : __( 'Read More', 'StyleShop' );
				?>
					<li>
						<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext ); ?>
						<span class="overlay"></span>
						<div class="offers-description">
							<h2><a href="<?php echo esc_url( $custom_permalink ); ?>"><?php the_title(); ?></a></h2>
							<a href="<?php echo esc_url( $custom_permalink ); ?>" class="more-button small"><?php echo esc_html( $custom_button ); ?></a>
						</div>
					</li>
				<?php endwhile; ?>
				</ul>
			</div> <!-- .et-carousel-wrapper -->
		</div>
	</section> <!-- #special-offers -->
<?php
	endif;
	wp_reset_postdata();
?>
<?php endif; // 'on' == et_get_option( 'styleshop_display_offers', 'on' ) ?>


<div id="content-area" class="clearfix<?php if ( $fullwidth ) echo ' fullwidth'; ?>">
	<div id="main-area">

		<?php
		$old_posts = $posts;

		$args = array(
			'order' => 'DESC',
			'posts_per_page' => 6
		);
		$the_posts = new WP_Query( $args );
		$postCount = 0;
		
		while ( $the_posts->have_posts() ) :
			$the_posts->the_post();
			++$postCount;

			if ( $postCount === 4 ) { ?>

<div class="ad-outer-container ad-afterThirdPost">
	<div class="ad-container">

<a href="http://ltsc.com.au">
	<img style="max-width:728px;" src="http://ltsc.wpengine.com/wp-content/themes/ltsc/img/ad728x90.gif" />
</a>

	</div>
</div>

			<?php }

			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix entry' ); ?>>
				<?php
					$thumb = '';
					$width = (int) apply_filters( 'et_blog_image_width', 629 );
					$height = (int) apply_filters( 'et_blog_image_height', 240 );
					$classtext = '';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail( $width, $height, '', $titletext, $titletext, false, 'Indeximage' );
					$thumb = $thumbnail["thumb"];

					$postinfo = et_get_option( 'styleshop_postinfo2' );
					$show_thumb = is_page() ? et_get_option( 'styleshop_page_thumbnails', 'false' ) : et_get_option( 'styleshop_thumbnails', 'on' );
				?>

				<h1 class="title"><?php the_title(); ?></h1>

				<?php if ( '' != $thumb && 'false' != $show_thumb ) { ?>
					<a href="<?php the_permalink(); ?>">
						<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext ); ?>
					</a>
				<?php } ?>

				<div class="entry-content">
				<?php
					if ( $postinfo && ! is_page() ) {
						echo '<p class="meta-info">';
						et_postinfo_meta( $postinfo, et_get_option( 'styleshop_date_format', 'M j, Y' ), esc_html__( '0 comments', 'StyleShop' ), esc_html__( '1 comment', 'StyleShop' ), '% ' . esc_html__( 'comments', 'StyleShop' ) );
						echo '</p>';
					}
				?>

				<?php echo do_shortcode('[social_share]'); ?>

				<?php
					?><p><?php truncate_post(550); ?></p>
					<a href="<?php the_permalink(); ?>" class="readmore"><span><?php esc_html_e('read more','StyleShop'); ?></span></a>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'StyleShop' ), 'after' => '</div>' ) );
				?>
				</div> <!-- .entry-content -->
			</article>

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>
		
	</div> <!-- #main-area -->

	<?php if ( ! $fullwidth ) get_sidebar(); ?>
</div> <!-- #content-area -->



<?php if ( 'on' == et_get_option( 'styleshop_home_products_onsale', 'on' ) && class_exists( 'woocommerce' ) ) : ?>
<?php
	global $woocommerce;

	$product_ids_on_sale = et_woocommerce_get_product_on_sale_ids();

	$meta_query[] = $woocommerce->query->visibility_meta_query();
    $meta_query[] = $woocommerce->query->stock_status_meta_query();

	$query_args = array(
		'posts_per_page' => (int) et_get_option( 'styleshop_sale_products_number', 8 ),
		'no_found_rows' => 1,
		'post_status' 	=> 'publish',
		'post_type' 	=> 'product',
		'orderby' 		=> 'date',
		'order' 		=> 'DESC',
		'meta_query' 	=> $meta_query,
		'post__in'		=> $product_ids_on_sale
	);

	$et_products_onsale_query = new WP_Query( $query_args );

	if ( $et_products_onsale_query->have_posts() ) :
?>
	<section class="home-area">
		<h1><?php esc_html_e( 'Featured Products Now On Sale!', 'StyleShop' ); ?></h1>
		<ul class="et-products clearfix">
		<?php while ( $et_products_onsale_query->have_posts() ) : $et_products_onsale_query->the_post(); ?>
			<li>
			<?php
				global $post;

				if ( function_exists( 'get_product' ) )
					$_product = get_product( $et_products_onsale_query->post->ID );
				else
					$_product = new WC_Product( $et_products_onsale_query->post->ID );

				$thumb = '';
				$width = 140;
				$height = 135;
				$classtext = '';
				$titletext = get_the_title();
				$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'ProductImage' );
				$thumb = $thumbnail["thumb"];

				$et_price_before = 'variable' == $_product->product_type ? $_product->min_variation_regular_price : $_product->regular_price;
			?>
					<a href="<?php the_permalink(); ?>">
						<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext ); ?>
					</a>
					<?php woocommerce_show_product_sale_flash( $post, $_product ); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<span class="et-price-button">
						<span class="et-price-before"><del><?php echo woocommerce_price( $et_price_before ); ?></del></span>
						<span class="et-price-sale"><?php echo woocommerce_price( $_product->get_price() ); ?></span>
					</span>
			</li>
		<?php endwhile; ?>
		</ul>
	</section>
<?php
	endif;
	wp_reset_postdata();
?>
<?php endif; // 'on' == et_get_option( 'styleshop_home_products_onsale', 'on' ) ?>

<?php if ( 'on' == et_get_option( 'styleshop_home_new_items', 'on' ) && class_exists( 'woocommerce' ) && 'false' == et_get_option( 'styleshop_blog_style', 'false' ) ) : ?>
	<?php if ( have_posts() ) : ?>
	<section class="home-area">
		<h1><?php esc_html_e( 'Hot New Items', 'StyleShop' ); ?></h1>
		<ul class="et-products clearfix">
		<?php while ( have_posts() ) : the_post(); ?>
			<li>
			<?php
				global $post;

				if ( function_exists( 'get_product' ) )
					$_product = get_product( $post->ID );
				else
					$_product = new WC_Product( $post->ID );

				$thumb = '';
				$width = 140;
				$height = 135;
				$classtext = '';
				$titletext = get_the_title();
				$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'ProductImage' );
				$thumb = $thumbnail["thumb"];

				$et_price_before = 'variable' == $_product->product_type ? $_product->min_variation_regular_price : $_product->regular_price;
			?>
				<a href="<?php the_permalink(); ?>">
					<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext ); ?>
				</a>
				<?php woocommerce_show_product_sale_flash( $post, $_product ); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<?php $product_ids_on_sale = et_woocommerce_get_product_on_sale_ids(); ?>
			<?php if ( ! in_array( get_the_ID(), array_map( 'intval', $product_ids_on_sale ) ) ) { ?>
				<?php if ( '' != $_product->get_price_html() ) : ?>
				<span class="et-main-price"><?php echo $_product->get_price_html(); ?></span>
				<?php endif; ?>
			<?php } else { ?>
				<span class="et-price-button">
					<span class="et-price-before"><del><?php echo woocommerce_price( $et_price_before ); ?></del></span>
					<span class="et-price-sale"><?php echo woocommerce_price( $_product->get_price() ); ?></span>
				</span>
			<?php } ?>

			</li>
		<?php endwhile; ?>
		</ul>
	</section>
	<?php endif; ?>
<?php endif; // 'on' == et_get_option( 'styleshop_home_new_items', 'on' ) ?>

<?php if ( 'on' == et_get_option( 'styleshop_show_logos', 'false' ) ) { ?>
	<section class="home-area">
		<h1><?php esc_html_e( 'We Have Been Featured In The Following Publications', 'StyleShop' ); ?></h1>
		<ul id="client-logos" class="clearfix">
	<?php
		$logos_number = (int) apply_filters( 'et_logos_number', 4 );

		for ( $i = 1; $i <= $logos_number; $i++ ) {
			if ( ( $logo_path = et_get_option( 'styleshop_logo_path_' . $i ) ) && '' != $logo_path )
				printf( '<li><a href="%s"><img src="%s" alt="%s"/></a></li>',
					esc_url( et_get_option( 'styleshop_logo_url_' . $i, '#' ) ),
					esc_attr( $logo_path ),
					esc_attr( et_get_option( 'styleshop_logo_alt_' . $i, '' ) )
				);
		}
	?>
		</ul>
	</section>
<?php } // 'on' == et_get_option( 'styleshop_show_logos', 'false' ?>

<?php if ( 'on' == et_get_option( 'styleshop_blog_style', 'false' ) ) { ?>
	<div id="content-area" class="clearfix">
		<div id="main-area">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('includes/entry', 'index'); ?>
		<?php
		endwhile;
			if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi();
			else get_template_part( 'includes/navigation', 'entry' );
		else:
			get_template_part( 'includes/no-results', 'entry' );
		endif; ?>

		</div> <!-- #main-area -->

		<?php get_sidebar(); ?>
	</div> <!-- #content-area -->
<?php } // 'on' == et_get_option( 'styleshop_blog_style', 'false' ) ?>

<?php get_footer(); ?>