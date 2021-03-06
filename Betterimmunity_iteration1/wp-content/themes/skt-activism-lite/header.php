<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Activism Lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<a class="skip-link screen-reader-text" href="#content_navigator">
<?php esc_html_e( 'Skip to content', 'skt-activism-lite' ); ?>
</a>
<!--HEADER INFO AREA STARTS-->
<?php 
$header_buttontext = get_theme_mod('header_buttontext');
$header_buttonurl = get_theme_mod('header_buttonurl');
$hidetopbar = get_theme_mod('hide_header_topbar', 1);
?>
<!--HEADER INFO AREA ENDS-->
<div class="header">
  <div class="container">
    <div class="logo">
		<?php skt_activism_lite_the_custom_logo(); ?>
        <div class="logo-bg"></div>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <div id="logo-main">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
        </div>

        
    </div> 
    <?php if( $hidetopbar == '') { ?>
    <div class="headsearchbox">
        <div class="get-button">
        	<?php if (!empty($header_buttonurl)) { ?><a href="<?php echo esc_url($header_buttonurl); ?>"><?php } if (!empty($header_buttontext)) { echo esc_html($header_buttontext); } if (!empty($header_buttonurl)) { ?></a><?php } ?>
        </div> 
    </div>
    <?php } ?>
        <div id="navigate-main">       
		   <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" type="button">
			<span aria-hidden="true"><?php esc_html_e( 'Menu', 'skt-activism-lite' ); ?></span>
			<span class="dashicons" aria-hidden="true"></span>
		   </button>
		  <nav id="main-navigation" class="site-navigation primary-navigation" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'primary-menu menu' ) );
			?>
		  </nav><!-- .site-navigation -->
	    </div><!-- navigate-main-->          
    </div>
  </div> <!-- container -->
  <div class="clear"></div>
</div><!--.header -->
<div class="clear"></div>