<?php

remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_post_title', 'genesis_do_post_title' );
remove_action( 'genesis_before_post_content', 'genesis_post_info');
remove_action( 'genesis_post_content', 'genesis_do_post_content');

add_action( 'genesis_before_post_content', 'opening_markup', 1);
add_action( 'genesis_before_post_content', 'post_image', 3);
add_action( 'genesis_before_post_content', 'post_title', 5 );
add_action( 'genesis_before_post_content', 'post_content', 7);
add_action( 'genesis_before_post_content', 'closing_markup', 9);

remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5);
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 ) ;

add_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
add_action( 'genesis_footer', 'custom_broadbent_footer', 7 );
add_action( 'genesis_footer', 'genesis_do_footer', 9 );
add_action( 'genesis_footer', 'genesis_footer_markup_close', 15);

function opening_markup() {
	?>
        <div class="ad-outer-container ad-aboveSingle">
                <div class="ad-container">
<a href="http://ltsc.com.au/sm-april" target="_blank">
        <img width="100%" style="max-width:728px;" src="http://ltsc.wpengine.com/wp-content/themes/ltsc/img/ad728x90.gif" />
</a>
                </div>
        </div>
	<div class="main-post-open">
	<?php
}

function post_image() {
	?>
	<div class="main-post-image">
		<?php the_post_thumbnail( 'full'); ?>
	</div>
	<?php
}

function post_title() {
	?>
	<div class="main-post-content">
	<h2><?php the_title(); ?></h2>
	<?php
}

function post_content() {
	the_content();

	?>
	</div>
	<?php
}

function closing_markup() {
	?>
	</div>
	<?php
}

function custom_broadbent_footer() {
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

genesis();