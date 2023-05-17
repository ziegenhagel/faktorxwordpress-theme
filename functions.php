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
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

function fxwp_custom_theme_customizer( $wp_customize ) {
    // Add a new section
    $wp_customize->add_section( 'fxwp_custom_section', array(
        'title'    => __( 'Custom Section', 'fxwp-custom-theme' ),
        'priority' => 160,
    ) );

    // Add settings for columns
    for ( $i = 1; $i <= 4; $i++ ) {
        $wp_customize->add_setting( 'fxwp_custom_section_column_' . $i, array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post',
        ) );

        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fxwp_custom_section_column_' . $i, array(
            'label'       => __( 'Column ' . $i, 'fxwp-custom-theme' ),
            'section'     => 'fxwp_custom_section',
            'settings'    => 'fxwp_custom_section_column_' . $i,
            'type'        => 'textarea',
            'description' => __( 'Column ' . $i . ' content.', 'fxwp-custom-theme' ),
        ) ) );
    }
}
add_action( 'customize_register', 'fxwp_custom_theme_customizer' );


function breadcrumb() {
    // Get the current post/page ID
    $post_id = get_queried_object_id();

    // Initialize an empty breadcrumb string
    $breadcrumb = '';

    // Set the separator character for the breadcrumbs
    $separator = '<span class="breadcrumb-separator"> / </span>';

    // Add the Home link
    $breadcrumb .= '<a href="' . esc_url(home_url('/')) . '">Home</a>' . $separator;

    // Add the parent pages
    $parent_ids = get_post_ancestors($post_id);
    if ($parent_ids) {
        $parent_ids = array_reverse($parent_ids);
        foreach ($parent_ids as $parent_id) {
            $breadcrumb .= '<a href="' . esc_url(get_permalink($parent_id)) . '">' . get_the_title($parent_id) . '</a>' . $separator;
        }
    }

    // Add the current page/post
    $breadcrumb .= '<span class="current">' . get_the_title($post_id) . '</span>';

    // Return the breadcrumb HTML
    echo '<div class="breadcrumb">' . $breadcrumb . '</div>';
}
