<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geeks_Forge_Theme
 */

if (is_admin_bar_showing()) {
	$logged = ' header--logged';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/favicon-16x16.png">
	<link rel="manifest" href="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo esc_url(get_template_directory_uri()); ?>/img/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header <?php echo wp_kses_post($logged); ?>">
		<div class="header__main 
		<?php
		if (is_admin_bar_showing()) :
		?>
			header__main--logged<?php endif; ?>">
			<div class="header__container container--100">
				<div class="logo">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img id="logo" class="logo__image" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo-czytajkomiksy.png" alt="Geek's Forge - blog popkulturowy" /></a>
				</div>
				<nav class="nav nav--main" aria-label="primary">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-primary',
							'menu_id'        => '',
							'container'      => false,
							'menu_class'     => 'menu',
							'li_class'       => 'menu__item',
							'url_class'      => 'menu__link',
						)
					);
					?>
				</nav>
				<div class="nav nav--mobile">
					<div class="line1"></div>
					<div class="line2"></div>
					<div class="line3"></div>
				</div>
				<div class="search-form">
					<svg class="search-form__icon  search-form__link" width="52" height="52" version="1.1" id="lni_lni-search-alt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
						<path d="M62.1,57L44.6,42.8c3.2-4.2,5-9.3,5-14.7c0-6.5-2.5-12.5-7.1-17.1v0c-9.4-9.4-24.7-9.4-34.2,0C3.8,15.5,1.3,21.6,1.3,28
								c0,6.5,2.5,12.5,7.1,17.1c4.7,4.7,10.9,7.1,17.1,7.1c6.1,0,12.1-2.3,16.8-6.8l17.7,14.3c0.3,0.3,0.7,0.4,1.1,0.4
								c0.5,0,1-0.2,1.4-0.6C63,58.7,62.9,57.6,62.1,57z M10.8,42.7C6.9,38.8,4.8,33.6,4.8,28s2.1-10.7,6.1-14.6c4-4,9.3-6,14.6-6
								c5.3,0,10.6,2,14.6,6c3.9,3.9,6.1,9.1,6.1,14.6S43.9,38.8,40,42.7C32,50.7,18.9,50.7,10.8,42.7z" />
					</svg>
				</div>
			</div>
		</div>
		<div class="search-form search-form--body">
			<div class="search-form__container">
				<div class="search-form__text">
					Wyszukiwarka
				</div>
				<form role="search" name="main-search" method="get" class="search-form__form" action="<?php echo esc_url(home_url('/')); ?>">
					<input type="text" class="search-form__input" name="s" placeholder="Czego szukasz?" value="<?php echo get_search_query(); ?>" />
					<button type="submit" class="button search-form__button">Szukaj</button>
					<span class="search-form__close search-form__link">
						<svg fill="#000000" width="12" height="12" version="1.1" id="lni_lni-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
							<path d="M34.5,32L62.2,4.2c0.7-0.7,0.7-1.8,0-2.5c-0.7-0.7-1.8-0.7-2.5,0L32,29.5L4.2,1.8c-0.7-0.7-1.8-0.7-2.5,0
									c-0.7,0.7-0.7,1.8,0,2.5L29.5,32L1.8,59.8c-0.7,0.7-0.7,1.8,0,2.5c0.3,0.3,0.8,0.5,1.2,0.5s0.9-0.2,1.2-0.5L32,34.5l27.7,27.8
									c0.3,0.3,0.8,0.5,1.2,0.5c0.4,0,0.9-0.2,1.2-0.5c0.7-0.7,0.7-1.8,0-2.5L34.5,32z" />
						</svg>
					</span>
				</form>
			</div>
		</div>
	</header>

	<div class="wrapper">