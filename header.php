<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scratchpad
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'scratchpad' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="wrap">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'scratchpad' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div><!-- .wrap -->
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<div class="wrap">

				<?php
				$header_image = get_header_image();
				if ( ! empty( $header_image ) ) : ?>
					<!-- <div class="header-image-contain"> -->
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width +1000); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" class="header-image">
						</a>

					<!-- </div>--><!-- .header-image -->
				<?php endif;

				scratchpad_the_site_logo();

				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
				<nav id="languages">
					<ul>
					<?php
					if (function_exists('icl_get_languages')) {
					    $languages = icl_get_languages('skip_missing=0');
					    if (1 < count($languages)) {
					        foreach ($languages as $l) {
					            echo '<li><a href="' . $l['url'] . '"><img src="' . $l['country_flag_url'] . '" alt="' . $l['language_code'] . '" /></a></li>';
					        }
					    }
					}
					?>
					<!--
					<li><a href="<?php echo site_url(); ?>"><img src="<?php echo plugins_url(); ?>/sitepress-multilingual-cms/res/flags/en.png" /></a></li>
					<li><a href="<?php echo site_url(); ?>/fr/"><img src="<?php echo plugins_url(); ?>/sitepress-multilingual-cms/res/flags/fr.png" /></a></li>
					<li><a href="<?php echo site_url(); ?>/nl/"><img src="<?php echo plugins_url(); ?>/sitepress-multilingual-cms/res/flags/nl.png" /></a></li>
					-->
					</ul>
				</nav>
			</div><!-- .wrap -->
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="wrap">
