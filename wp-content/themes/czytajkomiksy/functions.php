<?php

/**
 * Czytaj Komiksy Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Czytaj_Komiksy_Theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('czytajkomiksy_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function czytajkomiksy_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Czytaj Komiksy Theme, use a find and replace
		 * to change 'czytajkomiksy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('czytajkomiksy', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		add_image_size('pizdanaczole', 1000, '', true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-primary' => esc_html__('Główne', 'czytajkomiksy'),
				'footer-cat' => esc_html__('Stopka - kategorie', 'czytajkomiksy'),
				'footer-other' => esc_html__('Stopka - inne', 'czytajkomiksy'),
				'footer-coop' => esc_html__('Stopka - współprace', 'czytajkomiksy'),
			)
		);

		function new_class_li_menu($classes, $item, $args)
		{
			if (isset($args->li_class)) {
				$classes[] = $args->li_class;
			}
			return $classes;
		}
		add_filter('nav_menu_css_class', 'new_class_li_menu', 1, 3);

		function new_class_link_menu($atts, $item, $args)
		{
			if (isset($args->url_class)) {
				$atts['class'] = $args->url_class;
			}
			return $atts;
		}
		add_filter('nav_menu_link_attributes', 'new_class_link_menu', 1, 3);

		function nav_css_filter($classes)
		{
			$current = array('current-menu-item', 'current-menu-parent', 'current-menu-ancestor', 'current-page-ancestor', 'menu__item', 'menu-item-has-children');
			if (is_array($classes)) {
				$classes = array_intersect($classes, $current);
			} else {
				$classes = '';
			}
			return $classes;
		}
		add_filter('nav_menu_css_class', 'nav_css_filter', 10, 1);
		add_filter('nav_menu_item_id', 'nav_css_filter', 10, 1);
		add_filter('page_css_class', 'nav_css_filter', 10, 1);

		function my_nav_class($classes, $item)
		{
			$classes[] = sanitize_title_with_dashes(remove_accents($item->title));
			return $classes;
		}
		add_filter('nav_menu_css_class', 'my_nav_class', 10, 2);

		function change_class($classes)
		{
			$classes = str_replace("current-menu-item", "menu__item--active", $classes);
			$classes = str_replace("current-menu-parent", "menu__item--parent", $classes);
			$classes = str_replace("current-menu-ancestor", "menu__item--ancestor", $classes);
			$classes = str_replace("current-page-ancestor", "menu__item--ancestor", $classes);
			$classes = str_replace("menu-item-has-children", "menu__item--child", $classes);
			return $classes;
		}
		add_filter('wp_nav_menu', 'change_class');

		function czytajkomiksy_post_navigation()
		{
			$args =  array(
				'class' => 'next-prev',
				'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 206 107.86"><path class="cls-1" d="M18.17,57.53l64.61,44.83-5.53,5.5L0,53.78,77.25,0l5.54,5.49L18.16,50.33H206v7.19H18.17Z"/></svg><span class="next-prev__text">' . esc_html__('Poprzedni', 'czytajkomiksy') . '</span> <span class="next-prev__title">%title</span>',
				'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 206 107.86"><path class="cls-1" d="M187.83,50.33L123.22,5.5l5.53-5.5,77.25,54.08-77.25,53.78-5.54-5.49,64.62-44.84H0s0-7.19,0-7.19c0,0,187.83,0,187.83,0Z"/></svg><span class="next-prev__text">' . esc_html__('Nastepny', 'czytajkomiksy') . '</span> <span class="next-prev__title">%title</span>',
			);
			$next_prev = get_the_post_navigation($args);
			if ($next_prev) :
				$next_prev = str_replace('nav-links', 'next-prev__links', $next_prev);
				$next_prev = str_replace('nav-previous', 'next-prev__previous', $next_prev);
				$next_prev = str_replace('nav-next', 'next-prev__next', $next_prev);
				echo $next_prev;
			endif;
			return $next_prev;
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'czytajkomiksy_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'czytajkomiksy_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function czytajkomiksy_content_width()
{
	$GLOBALS['content_width'] = apply_filters('czytajkomiksy_content_width', 640);
}
add_action('after_setup_theme', 'czytajkomiksy_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function czytajkomiksy_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'czytajkomiksy'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'czytajkomiksy'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'czytajkomiksy_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function czytajkomiksy_scripts()
{
	wp_enqueue_style('czytajkomiksy-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('czytajkomiksy-style', 'rtl', 'replace');

	wp_enqueue_script('czytajkomiksy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'czytajkomiksy_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Ustawienia motywu',
		'menu_title'	=> 'Motyw',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Ustawienia globalne',
		'menu_title'	=> 'Globalne',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Ustawienia pętli na stronie głównej',
		'menu_title'	=> 'Posty Hero',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Ustawienia stopki strony',
		'menu_title'	=> 'Stopka',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Ustawienia strony 404',
		'menu_title'	=> '404',
		'parent_slug'	=> 'theme-general-settings',
	));
}

add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_tax()) { //for custom post types
		$title = sprintf(__('%1$s'), single_term_title('', false));
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	}
	return $title;
});

add_filter('wp_tag_cloud', 'title_tag_cloud_links');
function title_tag_cloud_links($return)
{

	$return = preg_replace('/[\[{\(].*?[\]}\)]/', '', $return);
	$return =  str_replace(' "', '"', $return);;
	return $return;
}

if (function_exists('acf_register_block')) {

	acf_register_block(array(
		'name'				=> 'posts',
		'title'				=> __('Wyświetlanie wpisy'),
		'description'		=> __('Blok wyświetlający wpisy.'),
		'render_callback'	=> 'my_acf_block_render_callback',
		'category'			=> 'formatting',
		'icon'				=> 'admin-post',
		'keywords'			=> array('article', 'post', 'posts', 'wpis', 'wpisy'),
	));
}

if (function_exists('acf_register_block')) {

	acf_register_block(array(
		'name'				=> 'social-media',
		'title'				=> __('Media społecznościowe'),
		'description'		=> __('Blok wyświetlający linki do mediów społecznościowych.'),
		'render_callback'	=> 'my_acf_block_render_callback',
		'category'			=> 'formatting',
		'icon'				=> 'admin-post',
		'keywords'			=> array('sm', 'social media', 'media społecznościowe', 'facebook', 'instagram', 'twitter'),
	));
}

function my_acf_block_render_callback($block)
{

	$slug = str_replace('acf/', '', $block['name']);

	if (file_exists(get_theme_file_path("/blocks/{$slug}.php"))) {
		include(get_theme_file_path("/blocks/{$slug}.php"));
	}
}
