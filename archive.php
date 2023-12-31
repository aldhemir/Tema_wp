<?php
/**
 * @package 
 */
get_header(); ?>
<div class="container">
	<div id="content_navigate">
     <div class="page_content">
        <section class="site-main">
			<?php if ( have_posts() ) : ?>
                <header class="page-header">
                   <?php
					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				  ?>
                </header><!-- .page-header -->
				<div class="blog-post">
					<?php /* Start the Loop */ 
						while ( have_posts() ) : the_post(); 
						get_template_part( 'content', get_post_format() ); 
						endwhile;
					?>
                </div>
                <?php  
				// Previous/next post navigation.
				the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => esc_html__( 'Back', 'skt-filmmaker' ),
							'next_text' => esc_html__( 'Next', 'skt-filmmaker' ),
							'screen_reader_text' => esc_html__( 'Posts navigation', 'skt-filmmaker' )
				) );
			    else : 
				get_template_part( 'no-results'); 
				endif; ?>
        </section>
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
    </div>
</div><!-- container -->
<?php get_footer(); ?>