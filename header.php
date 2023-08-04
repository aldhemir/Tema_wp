<?php
/**
 * @package
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<a class="skip-link screen-reader-text" href="#content_navigate">
<?php esc_html_e( 'Skip to content', 'skt-filmmaker' ); ?>
</a>
<!--HEADER INFO AREA STARTS-->
<?php 
$fb_link = get_theme_mod('fb_link'); 
$twitt_link = get_theme_mod('twitt_link');
$linked_link = get_theme_mod('linked_link');
$youtube_link = get_theme_mod('youtube_link');
$insta_link = get_theme_mod('insta_link');
$hidetopbar = get_theme_mod('hide_header_topbar', 1);
?>
<!--HEADER INFO AREA ENDS-->
<div class="header">
  <div class="container">
    <div class="logo">
		<?php skt_filmmaker_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
    </div> 
        <?php if( $hidetopbar == '') { ?>
    <div class="social-icons">
		<?php 
		if (!empty($fb_link)) { ?>
        <a title="<?php echo esc_attr__('facebook','skt-filmmaker'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a> 
        <?php } 		
		if (!empty($twitt_link)) { ?>
        <a title="<?php echo esc_attr__('twitter','skt-filmmaker'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a>
        <?php } 
		 if (!empty($linked_link)) { ?> 
        <a title="<?php echo esc_attr__('linkedin','skt-filmmaker'); ?>" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a>
        <?php } ?> 
        <?php
		if (!empty($youtube_link)) { ?> 
        <a title="<?php echo esc_attr__('Youtube','skt-filmmaker'); ?>" class="yt" target="_blank" href="<?php echo esc_url($youtube_link); ?>"></a>
        <?php } ?>          
        <?php
		if (!empty($insta_link)) { ?> 
        <a title="<?php echo esc_attr__('Instagrama','skt-filmmaker'); ?>" class="insta" target="_blank" href="<?php echo esc_url($insta_link); ?>"></a>
        <?php } ?>                   
      </div>
    <?php } ?>
    <div id="navigate-main">       
		   <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" type="button">
			<span aria-hidden="true"><?php esc_html_e( 'Menu', 'skt-filmmaker' ); ?></span>
			<span class="dashicons" aria-hidden="true"></span>
		   </button>
		  <nav id="main-navigation" class="site-navigation primary-navigation" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'primary-menu menu' ) ); ?>
		  </nav><!-- .site-navigation -->
	    </div>
  </div> <!-- container -->
  <div class="clear"></div>
</div><!--.header -->
<div class="clear"></div>