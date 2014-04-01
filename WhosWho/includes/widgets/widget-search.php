<?php class CustomSearchWidget extends WP_Widget
{
	function CustomSearchWidget(){
		$widget_ops = array('description' => 'Display custom search field.');
		parent::WP_Widget(false,$name='ET Search',$widget_ops);
	}

  /* Displays the Widget in the front-end */
	function widget($args, $instance){
		extract( $args );
		echo $before_widget;
?>
	<div class="et-search-form">
		<form method="get" class="searchform" action="<?php echo esc_url( home_url() ); ?>">
			<input type="text" value="<?php esc_attr_e( 'Search this site...', 'StyleShop' ); ?>" name="s" class="search_input" />

			<input type="image" src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" class="search_submit" />
		</form>
	</div>
<?php
		echo $after_widget;
	}

}// end CustomSearchWidget class

function CustomSearchWidgetInit() {
	register_widget('CustomSearchWidget');
}

add_action('widgets_init', 'CustomSearchWidgetInit');

?>