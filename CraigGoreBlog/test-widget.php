<?php
/**
 * Plugin Name: Test Widget
 * Plugin URI: http://example.com/widget
 * Description: A widget that serves as an example for developing more advanced widgets.
 * Version: 0.1
 * Author: Justin Tadlock
 * Author URI: http://justintadlock.com
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/** Register Widget **/
function load_russells_widget() {
	register_widget( 'Russells_Widget' );
}
add_action( 'widgets_init', 'load_russells_widget' );

/** Define the Widget as an extension of WP_Widget **/
class Russells_Widget extends WP_Widget {
	function Russells_Widget() {
		$widget_ops = array( 'classname' => 'russells_widget', 'description' => 'Lists the children of the current category' );

		$control_ops = array( 'id_base' => 'russells-widget' );

		$this->WP_Widget( 'russells-widget', 'Russells Widget', $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );

		$title = $instance['title'];
		$body = $instance['body'];
		$category_ids = $instance['category_ids'];

		echo $before_widget;

		echo $before_title . $title . $after_title;

		echo $body;

		echo "Category Ids : " . $category_ids;

		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$cat_ids = array();

		foreach($new_instance as $key => $value) {

			$instance[$key] = $new_instance[$key];

			if($key != 'title' && $key != 'body') {
				array_push($cat_ids, $key);
			}
		}

		$instance['category_ids'] = implode(',', $cat_ids);

		return $instance;
	}

	function form( $instance ) {
		$args = array(
			'orderby' => 'name',
			'order' => 'ASC'
		);
		$categories = get_categories( $args );

		$defaults = array( 'title' => 'Default Title', 'body' => 'Default Body', 'images' => true );

		foreach($categories as $category) {
			$defaults[$category->name] = false;
		}

		$instance = wp_parse_args( (array) $instance, $defaults );


		foreach($categories as $category) {
			?>
			<p>
				<input class="checkbox" type="checkbox" <?php checked($instance[ $category->name ], true) ?> id="<?php echo $this->get_field_id(  $category->name  ); ?>" name="<?php echo $this->get_field_name(  $category->name  ); ?>" />
				<label for="<?php echo $this->get_field_id( $category->name ); ?>"><?php echo $category->name . '-' . $category->cat_ID; ?></label>
			</p>
			<?php
		}

		?>

		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['images'], true) ?> id="<?php echo $this->get_field_id('images'); ?>" name="<?php echo $this->get_field_name('images'); ?>" />IMages
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'body' ); ?>">Body:</label>
			<input type="text" value="<?php echo $instance['body']; ?>" name="<?php echo $this->get_field_name( 'body' ); ?>" id="<?php echo $this->get_field_id( 'body' ); ?>">
		</p>
		<?php
	}
}

?>