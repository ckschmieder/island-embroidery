<?php

// Begin ENQUEUE BOOTSTRAP

function my_scripts() {
        wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
    }
add_action('wp_enqueue_scripts', 'my_scripts');

function my_styles() {
        wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
    }


// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

        
if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
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


// FLEXSLIDER

function anaximander_flexslider() {
    if (!is_admin()) {

        // Enqueue FlexSlider JavaScript
        wp_register_script('jquery_flexslider', get_stylesheet_directory_uri(). '/js/jquery.flexslider-min.js', array('jquery') );
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