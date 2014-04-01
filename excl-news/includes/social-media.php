<?php

function show_social_media() {
    ?>

    <div class="follow-us">
        <div class="search-area">
            <?php dynamic_sidebar( 'SearchArea1' ); ?>
        </div>

        <div class="title">
                FOLLOW US
        </div>

        <?php

        $facebook_url = genesis_get_option( 'facebook_url' );
        $twitter_url = genesis_get_option( 'twitter_utrl' );
        $google_url = genesis_get_option( 'google_url' );
        $pinterest_url = genesis_get_option( 'pinterest_url' );

        ?>
        <div class="right-section">
            <?php

            if(function_exists('instaemail_show_link')){echo instaemail_show_link();}

            if( $facebook_url != '' ) {
                    ?>
                    <a href="<?php echo $facebook_url; ?>" target="_blank">
                        <img style="width: 23px;height: 23px" alt="" src="http://exclusivelynews.com/wp-content/uploads/sites/16/2013/08/facebook-icon.png" /> 
                    </a>
                    <?php
            }

            if( $twitter_url != '' ) {
                    ?>

                    <a href="<?php echo $twitter_url; ?>" target="_blank">
                        <img style="width: 23px;height: 23px" alt="" src="http://exclusivelynews.com/wp-content/uploads/sites/16/2013/08/twitter-icon.png" />
                    </a>

                    <?php
            }

            if( $google_url != '' ) {
                    ?>

                    <a href="<?php echo $google_url; ?>" target="_blank">
                        <img style="width: 23px;height: 23px" alt="" src="http://exclusivelynews.com/wp-content/uploads/sites/16/2013/08/google-plus-icon-small.png" />
                    </a>

                    <?php
            }

            if( $pinterest_url != '' ) {
                    ?>

                    <a href="<?php echo $pinterest_url; ?>" target="_blank">
                        <img style="width: 23px;height: 23px" alt="" src="http://exclusivelynews.com/wp-content/uploads/sites/16/2013/08/pintrest-icon.png" />
                    </a>

                    <?php
            }

            ?>
        </div>
    </div>

    <?php
}
