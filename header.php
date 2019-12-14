<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gray-portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gray-portfolio' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();

			$gray_portfolio_description = get_bloginfo( 'description', 'display' );
			if ( $gray_portfolio_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $gray_portfolio_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<i class="fa fa-bars fa-lg"></i>
				</button>
				<h3 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>					
				</h3>

				<h4 class="menu-title">		
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php 
							$locations = get_nav_menu_locations(); //get all menu locations
							$menu = wp_get_nav_menu_object($locations['menu-1']);//get the menu object
							echo '<script>';
							echo 'console.log('. json_encode( $locations ) .');';
							echo 'console.log('. json_encode( $menu ) .');';
							echo '</script>';
							echo $menu->name;
						?>
					</a>									
				</h4>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
		</nav><!-- #site-navigation -->
