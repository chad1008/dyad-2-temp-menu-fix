<?php

add_action( 'wp_enqueue_scripts', 'dyad_2_wpcom_parent_theme_enqueue_styles' );

function dyad_2_wpcom_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'dyad-2-wpcom-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'dyad-2-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'dyad-2-wpcom-style' )
    );

}

function dyad_2_menu_fix() {
    unregister_nav_menu( 'menu-1' );
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'dyad' ),
    ) );
}

add_action( 'after_setup_theme', 'dyad_2_menu_fix', 12 );


