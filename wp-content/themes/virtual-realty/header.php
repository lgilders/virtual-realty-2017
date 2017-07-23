<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virtual_Realty
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'virtual-realty' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div id="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php if( get_field('logo', 'option') ): ?>
                        <img src="<?php the_field('logo', 'option'); ?>" />
                    <?php endif; ?>
                </a>
            </div><!-- logo -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'virtual-realty' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
        <!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
