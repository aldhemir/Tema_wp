<?php
/**
 * @package
 */
if ( post_password_required() )
	return;
?>
<div id="comments" class="comments-area">
	<?php 
		if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( 
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'skt-filmmaker' ) ),
					esc_attr(number_format_i18n( get_comments_number() )),
					'<span>' . esc_html(get_the_title()) . '</span>'
				);
			?>
		</h2>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'skt-filmmaker' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'skt-filmmaker' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'skt-filmmaker' ) ); ?></div>
		</nav>
		<?php endif;?>
		<ol class="comment-list">
			<?php
				
				wp_list_comments( array( 'callback' => 'skt_filmmaker_comment' ) );
			?>
		</ol><!-- .comment-list -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'skt-filmmaker' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'skt-filmmaker' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'skt-filmmaker' ) ); ?></div>
		</nav>
		<?php endif; 
			  endif; 

		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'skt-filmmaker' ); ?></p>
	<?php endif; 
		  comment_form(); ?>
</div>