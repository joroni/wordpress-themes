<?php
function custom_mobile_nav() {
        $menu_id = get_menu_id();

        $nav_items = wp_get_nav_menu_items( $menu_id );

        ?>
        <nav class="fixed-mobile-nav">
                <div class="title">
                        NAVIGATION
                </div>
                <?php
                foreach( $nav_items as $nav ) {
                        echo "<a class='nav-item' href='" . $nav->url . "'>" . $nav->title . "</a>";
                }
                ?>
                <a href="#" class='close-mobile-menu'>Close Menu</a>
        </nav>
        <?php
}

function get_menu_id() {
        $menu_slug = "Primary Nav";
        $locations = get_nav_menu_locations();

        if( isset( $locations['primary'] ) ) {
                return $locations['primary'];
        }

        return null;
}

function last_element($array, $key) {
        end($array);
        return $key === key($array);
}

function add_mobile_nav() {
        echo "<div class='mobile-nav-link-container'><a href='#' class='mobile-menu-toggle'>Menu</a></div>";
}