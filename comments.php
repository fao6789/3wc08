<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emcos.vn
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php

	if ( have_comments() ) :
		?>
		<!--<h2 class="comments-title">
			<?php
/*			$emcos_vn_comment_count = get_comments_number();
			if ( '1' === $emcos_vn_comment_count ) {
				printf(

					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'emcos-vn' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf(

					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $emcos_vn_comment_count, 'comments title', 'emcos-vn' ) ),
					number_format_i18n( $emcos_vn_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			*/?>
		</h2>-->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'emcos-vn' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
