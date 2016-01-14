<?php

// Begin ENQUEUE BOOTSTRAP



/*function my_styles() {
        wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
    }
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

        
if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        // wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri(). '/CSS/bootstrap.css' );
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

if ( !function_exists( 'chld_thm_cfg_child_css' ) ):
    function chld_thm_cfg_child_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', get_stylesheet_uri() ); 
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_child_css', 999 );

// END ENQUEUE PARENT ACTION

function twentyfifteen_setup() {

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu',      'twentyfifteen' ),
        'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
    ) );

}


// FLEXSLIDER

function anaximander_flexslider() {
    if (!is_admin()) {

        // Enqueue FlexSlider JavaScript
        wp_register_script('jquery_flexslider', get_stylesheet_directory_uri(). '/js/jquery.flexslider.js', array('jquery') );
        wp_enqueue_script('jquery_flexslider');

        // Enqueue FlexSlider Stylesheet        
        wp_register_style( 'flexslider-style', get_stylesheet_directory_uri() . '/CSS/flexslider.css', 'all' );
        wp_enqueue_style( 'flexslider-style' );
        
        // FlexSlider custom settings       
        add_action('wp_footer', 'anaximander_flexslider_settings');
        
        function anaximander_flexslider_settings() { ?>         
            <script>
                jQuery(document).ready(function($){

                    $('.flexslider').flexslider();
                });
            </script>
        <?php 
        }

    }
}

add_action('init', 'anaximander_flexslider');

// END FLEXSLIDER


function my_scripts() {
        // wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
        wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri(). '/js/bootstrap.js', array('jquery') );
        wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri(). '/CSS/slick.css' );
        wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri(). '/CSS/slick-theme.css' );
        wp_enqueue_style( 'magnific-popup-css', get_stylesheet_directory_uri(). '/CSS/magnific-popup.css' );
        wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri(). '/js/slick.min.js', array('jquery') );
        wp_enqueue_script( 'magnific-popup-js', get_stylesheet_directory_uri(). '/js/jquery.magnific-popup.js', array('jquery') );
        wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/js/my-script.js', array( 'jquery' ), true);
        /*wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri(). 'style.css' );*/
    }
add_action('wp_enqueue_scripts', 'my_scripts');



function register_my_menus() {
  register_nav_menu('my-social-menu',__( 'My Social Menu' ));
  register_nav_menu('my-mixed-menu',__( 'My Mixed Menu' ));
}
add_action( 'init', 'register_my_menus' );


if ( ! function_exists( 'ck_widgets_init' ) ) :
function ck_widgets_init() {
    register_sidebar(array(
        'name' => __( 'Header Widget Area 1', "kage"),
        'id' => 'header-widget-area-1',
        'description' => __( 'The header widget area 2', "kage"),
        'before_widget' => '<aside id="%1$s" class="widget %2$s"> ', 
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3><hr>',
    ));
    register_sidebar(array(
        'name' => __( 'Header Widget Area 2', "kage"),
        'id' => 'header-widget-area-2',
        'description' => __( 'The header widget area 2', "kage"),
        'before_widget' => '<aside id="%1$s" class="widget %2$s"> ', 
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3><hr>',
    ));      
}
endif;
add_action( 'widgets_init', 'ck_widgets_init' );