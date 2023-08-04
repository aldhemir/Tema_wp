<?php
/**
 * @package
 */

if ( is_active_sidebar( 'fc-1' ) || is_active_sidebar( 'fc-2' ) || is_active_sidebar( 'fc-3' ) ) : 
?>
<div id="footer-wrapper">
		<div class="footerarea">
    	<div class="container footer">
        	<div class="footer-row">
            <?php if ( is_active_sidebar( 'fc-1' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1' ); ?>
            </div>                
    		<?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-2' ) ) : ?>
            <div class="cols-3 widget-column-2">  
            <?php dynamic_sidebar( 'fc-2' ); ?>
            </div>
            <?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-3' ) ) : ?>    
            <div class="cols-3 widget-column-3">  
            <?php dynamic_sidebar( 'fc-3' ); ?>
            </div>
			<?php endif; ?> 	
			<?php if ( is_active_sidebar( 'fc-4' ) ) : ?>    
            <div class="cols-3 widget-column-4">  
            <?php dynamic_sidebar( 'fc-4' ); ?>
            </div>
			<?php endif; ?>             	         
            <div class="clear"></div>
            </div>
        </div> 
        </div>
         <?php endif; ?>
<div id="copyright-area">
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt"><?php echo esc_html('&copy; Copyright 2021 Filmmaker All Rights Reserved.');?></div>
     <div class="clear"></div>
</div>          
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>