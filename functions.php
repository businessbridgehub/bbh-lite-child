<?php
/**
 * BBH-Lite Child Theme functions and definitions
 *
 * @package BBH-Lite-Child
 */

define( 'CHILD_THEME_BBH_LITE_VERSION', '1.0.4' );

function child_enqueue_styles() {
    // Enqueue the parent theme's style from its own directory
    wp_enqueue_style( 
        'bbh-lite-parent-style', 
        get_template_directory_uri() . '/style.css', 
        array(), 
        wp_get_theme()->parent()->get( 'Version' ) 
    );

    // The parent handle 'bbh-lite-style' will load your child style.css automatically.
    // This line ensures your child styles depend on the parent styles loading first.
    wp_styles()->add_data( 'bbh-lite-style', 'dependencies', array( 'bbh-lite-parent-style' ) );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 5 );