<?php
/**
 * @package 
 */
get_header(); 
?>
<div class="container">
     <div class="page_content">
        <section class="site-main">
        	 <div class="blog-post">
					<?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            get_template_part( 'content', get_post_format() );
                        endwhile;
                        // Previous/next post navigation.
                        the_posts_pagination();
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results');
                    endif;
                    ?>
                    </div><!-- blog-post -->
             </section>
        <?php get_sidebar();?>     
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>