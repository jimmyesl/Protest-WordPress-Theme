<?php

/**
 * Protest functions and definitions
 *
 * @link https://jamesoller.com
 *
 * @package WordPress
 * @subpackage protest
 * @since 1.0
 */


//Enqueue stylesheet
function protest_scripts() {
    wp_enqueue_style( 'protest-style', get_stylesheet_uri('style.css') );
}
add_action( 'wp_enqueue_scripts', 'protest_scripts' );


// Register Bootstrap Navigation Walker
require_once('wp-bootstrap-navwalker.php');


register_nav_menus(array(
   'primary' => __('Primary Menu','protest' ),
));


if ( ! function_exists( 'protest_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function protest_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on protest, use a find and replace
	 * to change 'protest' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'protest', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size('customthumb', 540, 330, false);
    add_image_size('homepageslide', 1366, 496, true);
    add_image_size( 'category-thumb', 600, 9999 );
    add_image_size( 'related-small', 205, 130,false);
    add_image_size( 'pop-thumb', 100, 75,false);
    add_image_size( 'archive-size', 250, 250, false);


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'protest' ),
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
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	$args = array(
	'default-color' => 'ffffff',
	'default-image' => get_template_directory_uri() . '/images/background.jpg',
);
add_theme_support( 'custom-background', $args );
}


     // Set up the Wordpress core custom header feature

    $defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


     
endif; // protest_setup
add_action( 'after_setup_theme', 'protest_setup' );




//Add Theme Customizer

function protest_theme_customizer( $wp_customize ) {
    $wp_customize->add_section('protest_logo_section' , array(
       'title'       =>__( 'Logo', 'protest'),
       'priority'    => 30,
       'description' => 'Uploading a branding logo to the header',
    ) );
    
    $wp_customize->add_setting( 'branding_logo' );
    
    $wp_customize->add_control ( new WP_Customize_Image_Control ( $wp_customize, 'branding_logo', array(
        'label'      =>__( 'Upload a logo', 'protest' ),
        'section'    => 'protest_logo_section',
        'settings'   => 'branding_logo',
    ) ) );
}

add_action ( 'customize_register', 'protest_theme_customizer' );





/*
* Add support for frontpage,  sidebar and footer widget areas 
*/

 function protest_widgets_init() {
    
    //Register front page widget areas
    register_sidebar( array(
    'id'          => 'home-slide',
    'name'        => __( 'home slide', 'protest' ),
    'description' => __( 'This is home section for slider or hero.', 'protest' ),
    ) );
        
    register_sidebar( array(
	'id'          => 'home-1',
	'name'        => __( 'home 1', 'protest' ),
	'description' => __( 'This is the first home section.', 'protest' ),
     ) );
   
    register_sidebar( array(
	'id'          => 'home-2',
	'name'        => __( 'home 2', 'protest' ),
	'description' => __( 'This is the section home section.', 'protest' ),
    ) );
    
     register_sidebar( array(
	'id'          => 'home-3',
	'name'        => __( 'home 3', 'protest' ),
	'description' => __( 'This is the third home section.', 'protest' ),
    ) );
     
    //Register Main footer widgets
     register_sidebar( array(
      'name' => 'footer-1',
      'id' => 'footer-1',
      'description' => 'Appears in the footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
    
     /*register_sidebar( array(
      'name' => 'footer-2',
      'id' => 'footer-2',
      'description' => 'Appears in the footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
    
     
     register_sidebar( array(
      'name' => 'footer-3',
      'id' => 'footer-3',
      'description' => 'Appears in the footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );*/
     
   
    //Register Copyright Text Footer Widget
    register_sidebar( array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer-copyright-text',
        'before_widget' => '<div class="footer_copyright_text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    //Register sidebar widgets
    register_sidebar( array(
        'name'          => 'Main Sidebar', 'protest',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-main">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
     
}
add_action( 'widgets_init', 'protest_widgets_init' );








