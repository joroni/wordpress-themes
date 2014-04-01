<?php

/**
Template Name: Page Default
**/

remove_action( 'genesis_before_content', 'genesis_do_breadcrumbs' );

add_action( 'genesis_header', 'add_mobile_nav' );
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