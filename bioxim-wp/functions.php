<?php
/**
 * bioxim functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bioxim
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

 


add_action( 'wp_enqueue_scripts', function(){

	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js?_v=20220131132831' );

	wp_deregister_script( 'yandex-map' );
	wp_register_script( 'yandex-map', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU&_v=20220308144447' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'maskdown', 'https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js?_v=20220131132831' );

    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery','yandex-map'),'null',true );
    wp_enqueue_script( 'form', get_template_directory_uri() . '/assets/files/form.js', array('jquery'),'null',true );
});


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
		'page_title' 	=> 'Настройки отображения',
		'menu_title'	=> 'Общие настройки',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bioxim_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on bioxim, use a find and replace
		* to change 'bioxim' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bioxim', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'bioxim' ),
		)
	);

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
			'bioxim_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'bioxim_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bioxim_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bioxim_content_width', 640 );
}
add_action( 'after_setup_theme', 'bioxim_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bioxim_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bioxim' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bioxim' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bioxim_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bioxim_scripts() {
	wp_enqueue_style( 'bioxim-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bioxim-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bioxim-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bioxim_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



add_filter( 'upload_mimes', 'upload_allow_types' );
function upload_allow_types( $mimes ) {

	// разрешаем новые типы
	$mimes['doc']  = 'application/msword';
	//$mimes['woff'] = 'font/woff';
	$mimes['psd']  = 'image/vnd.adobe.photoshop';
	$mimes['djv']  = 'image/vnd.djvu';
	$mimes['djvu'] = 'image/vnd.djvu';
	$mimes['webp'] = 'image/webp';
    $mimes['svg'] = 'image/svg';
	//$mimes['fb2']  = 'text/xml';
	//$mimes['epub'] = 'application/epub+zip';



	return $mimes;
}


# Добавляем соответствие миме-типа и расширения
add_filter( 'getimagesize_mimes_to_exts', 'more_mimes_to_exts' );
function more_mimes_to_exts( $mime_to_ext ){
	$mime_to_ext['image/webp'] = 'svg';

	return $mime_to_ext;
}
define( 'ALLOW_UNFILTERED_UPLOADS', true );


add_filter( 'body_class', 'filter_function_name_8505', 10, 2 );
function filter_function_name_8505( $classes, $class ){
	$classes=[];
    $class;
	return $class;
}


function my_template_redirect(){
    if( is_404() && $_SERVER["REQUEST_URI"] != '/404/' ){
      wp_redirect( home_url( '/404/' ) );
      exit();
    }
  }
  add_action( 'template_redirect', 'my_template_redirect' );
 