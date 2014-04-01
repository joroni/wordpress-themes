<?php

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'test' );

remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
remove_action( 'genesis_after_post_content', 'genesis_post_meta' );
remove_action( 'genesis_before_post_content', 'genesis_post_info' );

add_action( 'genesis_header', 'add_mobile_nav' );
add_action( 'genesis_before', 'custom_mobile_nav' );
add_action( 'genesis_header', 'add_follow_us_section' );

function add_follow_us_section() {
    show_social_media();
}

function test() {

    if ( have_posts() ) : while ( have_posts() ) : the_post();

        post_content();
    endwhile;

    do_action( 'genesis_after_endwhile' );

    endif;
}

function post_content() {

    do_action( 'genesis_before_entry' );

    printf( '<article %s>', class_attributes( 'entry', 1 ) );

        do_action( 'genesis_before_entry_content' );
        printf( '<div %s>', genesis_attr( 'entry-content' ) );
            normal_post();

        echo '</div>'; //* end .entry-content
        do_action( 'genesis_after_entry_content' );

    echo '</article>';

    do_action( 'genesis_after_entry' );
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

function class_attributes( $context, $post_count ) {
    $output = genesis_attr( $context );

    $split = explode( 'class="', $output );

    return $split[0] . 'class="' . bootstrap_class_attributes( $post_count ) . $split[1];
}

function bootstrap_class_attributes( $post_index ) {
    // $classes = post_width( $post_index );

    if( $post_index % 5 == 0 ) {
        // if ($post_index & 1) {
        //  $classes = $classes . 'pull-right ';
        // }
        $classes = $classes . 'featured-post ';
    }

    return $classes;
}

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

                <div class="disclaimer">
                    <p>
                        Arion Group Pty Ltd t/a Broadbent Media (ACN: 163 361 144) cannot be held responsible for damages directly or indirectly may be caused by users who use our websites. Arion Group Pty Ltd makes no warranties as to the availability or functionality.

                        Arion Group Pty Ltd cannot be held responsible for the legality of the content of the web pages we link to from our websites. We can not guarantee that links published works.

                        Arion Group Pty Ltd may also not be held responsible for any kind of loss that is related to your use of content on websites operated by Arion Group Pty Ltd. This disclaimer includes both direct and indirect losses, including losses caused by disruptions, that the sites are not available and the like.

                        Arion Group Pty Ltd takes no responsibility for the register of members in the event; malware / hacking or other external influences beyond our control or event which is considered as force majeure.

                        Arion Group Pty Ltd sites are turning to the Australian market and should therefore be assessed in accordance with Australian law. The potential users outside Australia's borders are responsible for the rules, regulations and laws.
                    </p>
                </div>
        </div>
        <?php
}

function string_limit_chars( $string, $limit ) {
    $strlength = strlen( $string );
    $newstr = substr( $string, 0, $limit );

    if( $strlength > $limit ) {
        return $newstr . ' ...';
    }

    return $newstr;
}

genesis();