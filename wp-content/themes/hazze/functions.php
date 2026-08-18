<?php
if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.1');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hazze_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on hazze, use a find and replace
		* to change 'hazze' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('hazze', get_template_directory() . '/languages');

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( [
	'header'    => 'Header menu', // Название слота для меню в шаблоне
	'footer' => 'Footer menu'   // Название другого слота меню в шаблоне
] );

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
			'hazze_custom_background_args',
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
add_action('after_setup_theme', 'hazze_setup');


function hazze_scripts()
{
	wp_enqueue_style('hazze-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_enqueue_style('libre-franklin-fonts', 'https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap', array(), _S_VERSION);
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), _S_VERSION);
	wp_enqueue_style('themify-icons', get_template_directory_uri() . '/css/themify-icons.css', array(), _S_VERSION);
	wp_enqueue_style('owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), _S_VERSION);
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), _S_VERSION);
	wp_enqueue_style('slicknav.min', get_template_directory_uri() . '/css/slicknav.min.css', array(), _S_VERSION);
	wp_enqueue_style('hazze-style-main', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION);

	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . './js/jquery-3.3.1.min.js',  array(), _S_VERSION, true);
	// wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',  array(), _S_VERSION, true);
	wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',  array('jquery'), _S_VERSION, true);
	wp_enqueue_script('jquery.slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js',  array('jquery'), _S_VERSION, true);
	wp_enqueue_script('mixitup.min', get_template_directory_uri() . '/js/mixitup.min.js',  array(), _S_VERSION, true);
	wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js',  array(), _S_VERSION, true);
	wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js',  array(), _S_VERSION, true);
	wp_enqueue_script('hazze-script-main', get_template_directory_uri() . '/js/main.js',  array(), _S_VERSION, true);

	}
add_action('wp_enqueue_scripts', 'hazze_scripts');

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
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main settings',
		'menu_title'	=> 'Theme settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// function custom_menu_link_class($atts, $item, $args) {
// 	if ($args->theme_location == 'header') {
// 		$atts['class'] = 'nav_link';
// 	}
// 	return $atts;
// }
// add_filter('nav_menu_link_attributes', 'custom_menu_link_class', 10, 3);\

add_image_size( 'hazze-custom', 785, 393, true );

add_shortcode( 'pink-banner', 'foobar_shortcode' );

function foobar_shortcode(){
	require 'shortcodes/pink-banner.php';
}

add_filter ('excerpt_length', function() {
	return 10;
});

add_filter ('excerpt_more', function ($more) {
	return '...';
});

require 'breadcrumbs.php';