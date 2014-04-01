<?php

/**
 * Home Page.
 *
 * @category   Genesis_Sandbox
 * @package    Templates
 * @subpackage Home
 * @author     Travis Smith and Jonathan Perez, for Surefire Themes
 * @license    http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link       http://wpsmith.net/
 * @since      1.1.0
 */

remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 ) ;

remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_after_header', 'custom_navigation' );

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'render_home_page' );



// add_filter( 'genesis_sidebar', 'custom_sidebar' );


add_filter( 'excerpt_length', 'my_excerpt_length' );
add_filter( 'excerpt_more', 'my_excerpt_more' );

remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5);
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 ) ;

add_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
add_action( 'genesis_footer', 'custom_broadbent_footer', 7 );
add_action( 'genesis_footer', 'genesis_do_footer', 9 );
add_action( 'genesis_footer', 'genesis_footer_markup_close', 15);



function my_excerpt_length($length) {
        return 15;
}
function my_excerpt_more( $more ) {
        return '... <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">Read More</a>';
}



// add_action( 'get_header', 'gs_home_helper' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function gs_home_helper() {

        if ( is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-left' ) || is_active_sidebar( 'home-right' ) || is_active_sidebar( 'home-bottom' ) ) {

                remove_action( 'genesis_loop', 'genesis_do_loop' );
                add_action( 'genesis_loop', 'gs_home_widgets' );

                /** Force Full Width */
                add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
                add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

        }
}

/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function gs_home_widgets() {

        genesis_widget_area(
                'home-top',
                array( 'before' => '<div id="home-top" class="home-widget widget-area">', )
        );

        echo '<div id="home-middle">';
        genesis_widget_area(
                'home-left',
                array(
                        'before' => '<div id="home-left" class="first one-half"><div class="home-widget widget-area">',
                        'after' => '</div></div><!-- end #home-left -->',
                )
        );

        genesis_widget_area(
                'home-right',
                array(
                        'before' => '<div id="home-right" class="one-half"><div class="home-widget widget-area">',
                        'after' => '</div></div><!-- end #home-right -->',
                )
        );
        echo '</div>';


        genesis_widget_area(
                'home-bottom',
                array(
                        'before' => '<div id="home-bottom"><div class="home-widget widget-area">',
                        'after' => '</div></div><!-- end #home-left -->',
                )
        );
}

function render_home_page() {
        $post_count = 0;
        $left_col = array();
        $right_col = array();
        $featured_post = '';

        ?>

        <?php

        if( have_posts() ) {
                while( have_posts() ) : the_post() ;
                        if( $post_count === 0 ) {
                                show_featured_post();
                        }

                        $post_count++;
                endwhile;
        }

        ?>
        <div class="left-col">
        <?php

        $post_count = 0;
        if( have_posts() ) {
                while( have_posts() ) : the_post() ;
                        if( $post_count != 0 && $post_count % 2 != 0 ) {
                                show_regular_post();
                        }
                        $post_count++;
                endwhile;
        }

        ?>
        </div>
        <div class="right-col">
        <?php

        //Menu
        show_weekly_menu();

        $post_count = 0;
        if( have_posts() ) {
                while( have_posts() ) : the_post() ;
                        if( $post_count != 0 && $post_count % 2 === 0 ) {
                                show_regular_post();
                        }

                        $post_count++;
                endwhile;
        }

        ?>
        </div>
        <?php

        do_action( 'genesis_after_endwhile' );
}

function show_featured_post() {
        ?>
        <div class="featured-post">
                <?php if( has_post_thumbnail() ) { ?>
                        <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full-size'); ?></a>
                        </div>
                <?php } ?>

                <div class="post-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                        <?php echo '<p>' . preg_replace( '(<[^p]+>)', '', substr( get_the_content(), 0, 350 ) ) . '... <a href="' . get_permalink() . '">[Read More]</a>' . '</p>' ?>
                        <?php echo do_shortcode('[social_share]'); ?>
                </div>
        </div>
        <?php
}

function show_regular_post() {
        ?>
        <div class="normal-post">
                <?php if(has_post_thumbnail() ) { ?>
                        <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                        </div>
                <?php } ?>

                <div class="post-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                        <?php the_excerpt() ?>
                </div>
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