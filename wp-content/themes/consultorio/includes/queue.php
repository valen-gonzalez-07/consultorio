<?php

// Register/Enqueue css and js
add_action( 'wp_print_scripts', 'enqueue_theme_scripts' );
add_action( 'wp_print_styles', 'enqueue_theme_styles' );


/**
 * Theme Scripts/Styles
 */

function enqueue_theme_styles() {
    // Register styles
    wp_register_style( 'google', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700', array(), null );
    wp_register_style( 'globals', get_template_directory_uri() . '/css/globals.css' );

    // enqueue styles
    wp_enqueue_style( 'google' );
    wp_enqueue_style( 'globals' );
    // Pages
    wp_register_style( 'error', get_template_directory_uri() . '/css/components/404.css' );

    if ( is_404() ){
        wp_enqueue_style( 'error' );
    }

}

function enqueue_theme_scripts() {
    // Register scripts
    // wp_register_script('browserDetection', get_template_directory_uri() . '/js/libraries/browserDetection.js', array(), '1.0', true);
    // wp_enqueue_script( 'views');

}
