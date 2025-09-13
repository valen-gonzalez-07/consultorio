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
    wp_register_style( 'mainHeader', get_template_directory_uri() . '/css/components/mainHeader.css' );
    wp_register_style( 'form', get_template_directory_uri() . '/css/components/form.css' );
        // Register styles Fonts
    wp_register_style( 'inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', array(), null );
    wp_register_style( 'lora', 'https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap', array(), null );
        // Register styles Componentes y Globals
    wp_register_style( 'quien-soy', get_template_directory_uri() . '/css/components/quien-soy.css' );
    wp_register_style( 'especialidades', get_template_directory_uri() . '/css/components/especialidades.css' );
    wp_register_style( 'hero-banner', get_template_directory_uri() . '/css/components/hero-banner.css' );
    // enqueue styles
    
    //Estilos globales y de Componentes
    wp_enqueue_style( 'quien-soy' );
    wp_enqueue_style( 'especialidades' );
    wp_enqueue_style( 'hero-banner' );
    wp_enqueue_style( 'globals' );
    wp_enqueue_style( 'google' );
    wp_enqueue_style( 'mainHeader' );
    wp_enqueue_style( 'form' );
        // enqueue styles
    //Fonts
    wp_enqueue_style( 'inter' );
    wp_enqueue_style( 'lora' );

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
