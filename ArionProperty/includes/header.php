<?php

function custom_header () {
	?>
	<div class="header-left">
		<div id="title-area">
			<a href="<?php echo home_url(); ?>">COTTONPARK</a>
		</div>
	</div>
    <div class="header-right">
        <span class='header-title'><?php echo get_the_title(); ?></span>
    </div>
	<div class="clear"></div>

	<div class="toggle-mobile-nav mobile-menu-toggle"></div>

	<div class="widget-area header-widget-area"></div>

	<?php
}

function custom_navigation() {
    $menu_id = get_menu_id();

    $nav_items = wp_get_nav_menu_items( $menu_id );

    ?>
        <ul class='full-nav'>
        <?php
        $first = 0;
        foreach( $nav_items as $key=>$nav ) {
            if( $first === 0 ) {
                $class = 'first';
                $first++;
            } else {
                $class = '';
            }
                echo "<li class='nav-item " . $class . "'><a href='" . $nav->url . "'><span>" . strtoupper($nav->title) . "</span></a>";
                echo "</li>";
        }
        ?>
        <div class="clear"></div>
        </ul>

    <?php
}

add_action( 'genesis_before', 'custom_mobile_nav' );

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
    </nav>
    <?php
}

function get_menu_id() {
    $menu_slug = "Primary Nav";
    $locations = get_nav_menu_locations();

    if( isset( $locations['primary'] ) ) {
            return $locations['primary'];
    }

}

?>