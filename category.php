<?php
/**
 * @package 
 */
get_header(); ?>
<div class="container">
     <div class="page_content">
        <section class="site-main">
            <header class="page-header">
				<h1 class="entry-title"><?php the_archive_title( esc_html__('Category: ', 'skt-filmmaker') ); ?></h1>
            </header><!-- .page-header -->
			<?php if ( have_posts() ) : ?>
                <div class="blog-post">
                    <?php /* Start the Loop */ 
						while ( have_posts() ) : the_post(); 
						get_template_part( 'content', get_post_format() ); 
						endwhile; 
					?>
                </div>
                <?php the_posts_pagination(); 
				else : 
				get_template_part( 'no-results');  
				endif; 
				?>
       </section>
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->
<?php get_footer(); ?>