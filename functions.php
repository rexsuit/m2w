<?php
/**
 * moon2word functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package moon2word
 */

if ( ! function_exists( 'moon2word_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function moon2word_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on moon2word, use a find and replace
	 * to change 'moon2word' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'moon2word', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'moon2word' ),
		'footer' => esc_html__( 'Footer Menu', 'moon2word')
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'moon2word_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'moon2word_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function moon2word_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'moon2word_content_width', 640 );
}
add_action( 'after_setup_theme', 'moon2word_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function moon2word_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'moon2word' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'moon2word_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function moon2word_scripts() {
	$stylesheet_directory_uri = get_stylesheet_directory_uri();
	wp_enqueue_style( 'moon2word-style', get_stylesheet_uri() );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'fontello', $stylesheet_directory_uri . '/css/fontello.css', array(), null );
	wp_enqueue_style( 'fontello-codes', $stylesheet_directory_uri . '/css/fontello-codes.css', array('fontello'), null );
	wp_enqueue_style( 'fontello-embedded', $stylesheet_directory_uri . '/css/fontello-embedded.css', array('fontello'), null );
	wp_enqueue_style( 'fontello-ie7', $stylesheet_directory_uri . '/css/fontello-ie7.css', array('fontello'), null );
	wp_enqueue_style( 'fontello-ie7-codes', $stylesheet_directory_uri . '/css/fontello-ie7-codes.css', array('fontello'), null );
	wp_enqueue_style( 'owl-carousel', $stylesheet_directory_uri . '/css/owl.carousel.css', array(), null );
	wp_enqueue_style( 'owl-transitions', $stylesheet_directory_uri . '/css/owl.transitions.css', array('owl-carousel'), null );
	wp_enqueue_style( 'full-slider', $stylesheet_directory_uri . '/css/full-slider.css', array('owl-carousel'), null );
	wp_enqueue_style( 'responsive', $stylesheet_directory_uri . '/css/responsive.css', array(), null );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), null );
	wp_enqueue_style( 'custom', $stylesheet_directory_uri . '/css/custom.css', array(), null );
	wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );
	wp_enqueue_style( 'H-Code-Bootstrap', $stylesheet_directory_uri . '/css/bootstrap.css', array(), null );


	wp_enqueue_script( 'moon2word-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'moon2word-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'jQuery.parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array( 'jquery' ), '1.1.3', true );
	wp_enqueue_script( 'modernizr', "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", array(), null, true );
	wp_enqueue_script( 'H-Code-Bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'Bootstrap-Dropdown', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.js', array( 'H-Code-Bootstrap' ), null, true );
	wp_enqueue_script( 'jQuery.easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/js/skrollr.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jQuery.appear', get_template_directory_uri() . '/js/jquery.appear.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), null, true );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'popup-gallery', get_template_directory_uri() . '/js/popup-gallery.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'text-effect', get_template_directory_uri() . '/js/text-effect.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jQuery-tools', get_template_directory_uri() . '/js/jquery.tools.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'hamburger-menu', get_template_directory_uri() . '/js/hamburger-menu.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.min.js', array( 'jquery' ), '3.0.2', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom-functions.js', array( 'jquery' ), null, true );






	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'moon2word_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom functions file.
 */
/* require get_template_directory() . '/custom-functions.php'; */


/* To remove the emoji loading, which is not needed for MB Site */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
