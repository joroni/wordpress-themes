<?php

function show_weekly_menu() {
        ?>
        <div class="weekly-menu">
                <img src="/wp-content/themes/forkandkniv/images/blue-background.jpg" alt="Fancy Dinner Set">
                <div class="menu-title">
                        Weekly Menu
                </div>
                <div class="menu-content">
                        <?php get_menu_items() ?>
                </div>
        </div>
        <?php
}

function get_menu_items() {
        $args = array('category_name' => 'weekly-menu', 'posts_per_page' => '7' );
        $query = new WP_Query( $args );
        $weekdays = array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday' );
        $increment = 0;

        while( $query->have_posts() ) {
                $query->the_post();

                ?>
                <div class="menu-item">

                        <div class="weekday">
                                <div><?php echo $weekdays[ $increment ]; ?></div>
                        </div>

                        <div class="title">
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="content">
                                <?php echo '<p>' . preg_replace( '(<[^p]+>)', '', substr( get_the_content(), 0, 70 ) ) . '...</p>' ?>
                                <a href="<?php the_permalink() ?>" class="view-recipe">View Recipe &raquo;</a>
                                <div class="clear"></div>
                        </div>
                </div>
                <?php

                $increment++;
        }

        wp_reset_postdata();
}