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

add_action( 'get_header', 'gs_home_helper' );
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

add_action( 'genesis_header', 'add_mobile_nav' );

remove_action( 'genesis_loop', 'genesis_do_loop');
add_action( 'genesis_loop', 'custom_loop' );

function custom_loop() {
        $cats = array( genesis_get_option( 'home_cat_2' ), genesis_get_option( 'home_cat_3' ), genesis_get_option( 'home_cat_4' ), genesis_get_option( 'home_cat_5' ), genesis_get_option( 'home_cat_6' ));
        $excluded = array();

        $query = new WP_Query( array( 'posts_per_page' => 6 ) );
        $post_count = 0;
        $top_images = array();
        $top_headings = array();
        $heading_urls = array();

        while( $query->have_posts() ) : $query->the_post();
            array_push( $top_images, get_the_post_thumbnail( get_the_ID(), 'full' ) );

            array_push( $top_headings, get_the_title() );

            array_push( $heading_urls, get_permalink() );

            array_push( $excluded, get_the_ID() );
        endwhile;

        wp_reset_query();

        ?>

        <div class="top-wrap">


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
                    foreach( $top_headings as $heading ) {
                        ?>
                        <a href="<?php echo $heading_urls[$i]; ?>" data-target="frame-<?php echo $i; ?>" class="story-item panel <?php if( $i == 0 ) { echo 'first active'; } ?>">
                            <span class="arrow"></span>
                            <span><?php echo $heading; ?></span>
                        </a>
                        <?php
                        $i++;
                    }

                    ?>
                </div>
                <div class="clear"></div>
            </div>



            <div class="top-content">
                <div class="content-left">
                        <?php
                        $excluded = featured_posts( $excluded );
                        ?>
                </div>
                <div class="content-right">
                         <?php
                         $excluded = other_posts( genesis_get_option( 'home_cat_2' ), $excluded, 'first', true );
                         // $excluded = other_posts( 3, $excluded, 'first', true );
                         ?>
                </div>
                <div class="clear"></div>
            </div>

            <div class="top-sidebar">
                    <?php breaking_news(); ?>

                    <?php dynamic_sidebar( 'HomeTopRightSidebar' ); ?>
            </div>

            <div class="clear"></div>
        </div>

        <div class="middle-content">
                <?php
                        $excluded = other_posts( genesis_get_option( 'home_cat_3' ), $excluded, 'second', false );

                ?>
                <div class="clear"></div>
        </div>

        <div class="middle-ad-wrap">
            <div class="middle-ad-container">
                <?php dynamic_sidebar( 'HomeMiddleAdSpace' ); ?>
            </div>
        </div>

        <div class="bottom-wrap">
            <div class="bottom-content">
                <?php $excluded = featured_posts_2col( genesis_get_option( 'home_cat_4' ), $excluded, 'third', false ); ?>

                <?php $excluded = featured_posts_2col( genesis_get_option( 'home_cat_5' ), $excluded, 'fifth', false ); ?>

                <!-- <div class="clear"></div> -->
            </div>

            <div class="bottom-sidebar">
                <?php $excluded = other_posts( genesis_get_option( 'home_cat_6' ), $excluded, 'fourth', false ); ?>

                <?php dynamic_sidebar( 'HomeBottomRightSidebar' ); ?>
            </div>
            <div class="clear"></div>
        </div>
        <?php
}

function featured_posts( $excluded ) {
    $cat_id = genesis_get_option( 'home_cat_1' );
    $query = new WP_Query( array('cat' => $cat_id, 'post__not_in' => $excluded, 'posts_per_page' => 3 ) );
    $post_count = 0;

    $cat_name = get_cat_name( $cat_id );

    ?>
    <h1><?php echo $cat_name; ?></h1>
    <?php

    while( $query->have_posts() ) : $query->the_post();
            if( $post_count === 0 ) {
                    featured_post();
            } else {
                    normal_post();
            }

            array_push( $excluded, get_the_ID() );

            $post_count++;
    endwhile;

    ?>
    <div class="clear"></div>
    <?php

    wp_reset_query();

    return $excluded;
}

function featured_posts_2col( $cat_id, $excluded, $class ) {
        $query = new WP_Query( array( 'cat' => $cat_id, 'post__not_in' => $excluded, 'posts_per_page' => 4 ) );
        // $query = new WP_Query( array( 'category_id' => $cat_id, 'posts_per_page' => 4 ) );
        $cat_name = get_cat_name( $cat_id );

        $post_count = 0;

        ?>
        <div class="category-section <?php echo $class; ?>">
            <h1><?php echo $cat_name; ?></h1>
            <?php

            while( $query->have_posts() ) : $query->the_post();
                    if( $post_count === 0 ) {
                        ?>
                            <div class="left">
                                <?php featured_post(); ?>
                            </div>
                        <?php
                    } else {
                        if( $post_count === 1) {
                            ?> <div class='right'> <?php
                        }
                            normal_post();
                    }

                    array_push( $excluded, get_the_ID() );

                    $post_count++;
            endwhile;

            ?>
        </div>
            <div class="clear"></div>
            <?php
            if( $post_count > 1 ) {
                echo "</div>";
            }
            ?>
        <?php

        wp_reset_query();

        return $excluded;
}

function other_posts( $cat_id, $excluded, $class, $extra_text ) {
        $query = new WP_Query( array( 'cat' => $cat_id, 'post__not_in' => $excluded, 'posts_per_page' => 4 ) );
        $cat_name = get_cat_name( $cat_id );

        ?>
        <div class="category-section <?php echo $class; ?>">
                <h1><?php echo $cat_name; ?></h1>
                <?php

                while( $query->have_posts() ) : $query->the_post();
                        normal_post();

                        array_push( $excluded, get_the_ID() );
                endwhile;
        ?>
        <div class="clear"></div>
        </div>
        <?php

        wp_reset_query();

        return $excluded;
}

function featured_post() {
        ?>
            <div class="featured-post">
                    <a href="<?php the_permalink(); ?>" class="post-link"></a>
                    <?php the_post_thumbnail( array(300, 300)); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php echo '<p>' . preg_replace( '/(<.+>)/', '', substr( get_the_content(), 0, 200 ) ) . '...</p>'; ?>
                    <?php echo do_shortcode('[social_share]'); ?>
                    <div class="clear"></div>
            </div>
        <?php
}

function normal_post() {
        ?>
        <div class="normal-post">
                <a href="<?php the_permalink(); ?>" class="post-link"></a>
                <h3><?php
                        $max_length = 35;
                        $title = get_the_title();
                        if(strlen($title) > $max_length) {
                                echo substr( $title, 0, $max_length) . '...';
                        } else {
                                echo $title;
                        }
                        ?>
                </h3>
                <?php the_post_thumbnail( array( 50, 70 ), array( 'class' => 'normal-post-thumb') ); ?>
                <span>
                    <?php
                    // $content = preg_replace('/(<img[^>]+.|<a[^>]+.|<\/a>|<div[^>]+.|<\/div>)/','', get_the_content() );
                    // $content = preg_replace( '/(<.+>)/', '', substr( get_the_content(), 0, 350 ) );
                    $content = strip_tags( get_the_content() );
                    if($content) {
                        echo substr($content, 0, 100);
                    }
                    ?>
                </span>
                <div class="clear"></div>
                <?php echo do_shortcode('[social_share]'); ?>
                <div class="clear"></div>
        </div>
        <?php
}

function breaking_news() {
        $query = wp_get_recent_posts( array( 'numberposts' => 5 ) );

        ?>
        <div class="breaking-news widget-container">
                <h2>Popular Stories</h2>
                <ul>
                <?php
                $post_count = 0;
                foreach( $query as $post ) {
                        ?>
                        <li>
                                <span>&raquo;</span>
                                <a <?php if($post_count === 4) echo "class='last'"; ?> href="<?php echo get_permalink($post['ID']); ?>"><?php
                                        $title = $post['post_title'];
                                        echo substr( $title, 0, 50 );
                                        if(strlen($title) > 50) echo '...';
                                ?></a>
                        </li>
                        <?php
                        $post_count++;
                }

                ?>
                </ul>
        </div>
        <?php
}

add_action( 'genesis_before', 'custom_mobile_nav' );



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

genesis();
