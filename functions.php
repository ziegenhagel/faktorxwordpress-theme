<?php
function fxwp_theme_styles()
{
    wp_enqueue_style('fxwp_theme_style', str_replace('style.css', 'style.min.css', get_stylesheet_uri()));
}

add_action('wp_enqueue_scripts', 'fxwp_theme_styles');

// Registrieren Sie die Menüs
function fxwp_theme_register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}

add_action('init', 'fxwp_theme_register_menus');

// Kommentare vollständig deaktivieren
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );
