<?php
add_filter('wpcf7_autop_or_not', '__return_false');
add_action( 'init', 'register_east_menus' );
function register_east_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' )
        )
    );
}