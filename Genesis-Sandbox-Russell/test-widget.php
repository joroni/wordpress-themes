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
		$ad1 = $instance['ad1'];
		$ad1 = $instance['ad2'];
		$ad1 = $instance['ad3'];
		$ad1 = $instance['ad4'];
		$ad1 = $instance['ad5'];

		echo $before_widget;

		?>

		<script type='text/javascript'>
			console.log('Script loaded!');
		</script>

		<?php echo $ad1; ?>

		<?php echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		foreach($new_instance as $key => $value) {

			$instance[$key] = $new_instance[$key];
		}

		return $instance;
	}

	function form( $instance ) {
		$defaults = array( 'title' => '', 'ad1' => '', 'ad2' => '', 'ad3' => '', 'ad4' => '', 'ad5' => '' );
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'ad1' ); ?>">Ad 1:</label>
			<textarea name="<?php echo $this->get_field_name( 'ad1' ); ?>" id="<?php echo $this->get_field_id( 'ad1' ); ?>"></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'ad2' ); ?>">Ad 2:</label>
			<textarea name="<?php echo $this->get_field_name( 'ad2' ); ?>" id="<?php echo $this->get_field_id( 'ad2' ); ?>"></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'ad3' ); ?>">Ad 3:</label>
			<textarea name="<?php echo $this->get_field_name( 'ad3' ); ?>" id="<?php echo $this->get_field_id( 'ad3' ); ?>"></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'ad4' ); ?>">Ad 4:</label>
			<textarea name="<?php echo $this->get_field_name( 'ad4' ); ?>" id="<?php echo $this->get_field_id( 'ad4' ); ?>"></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'ad5' ); ?>">Ad 5:</label>
			<textarea name="<?php echo $this->get_field_name( 'ad5' ); ?>" id="<?php echo $this->get_field_id( 'ad5' ); ?>"></textarea>
		</p>
		<?php
	}
}

?>