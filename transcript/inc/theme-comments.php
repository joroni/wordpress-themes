<?php 
if ( ! function_exists( 'gab_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own gab_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 */
function gab_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

	
		<div class="comment-wrapper" id="comment-<?php comment_ID(); ?>">
			<div class="comment-inner">
				<div class="text">
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<p class="waiting_approval"><?php _e( 'Your comment is awaiting moderation.', 'transcript' ); ?></p>
					<?php endif; ?>
					
					<?php comment_text(); ?>
					
				</div>		
				
				<div class="commentmeta">
					<?php echo get_avatar( $comment, 48 ); ?>
					<p>
						<?php printf( __( '%s '), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?><br />
						<?php echo get_comment_date(); ?> <?php _e( 'at', 'transcript'); ?> <?php echo get_comment_time(); ?><br />
						<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						<?php edit_comment_link( __( 'Edit', 'transcript'), ' ' ); ?>
					</p>
				</div>
				
				<div class="clear"></div>
			</div><!-- .comment-inner  -->
		</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'transcript' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'transcript' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;