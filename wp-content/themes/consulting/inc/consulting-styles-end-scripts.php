<?php

/**
 * Enqueue scripts and styles.
 */
function consulting_scripts() {
    // Styles
    wp_enqueue_style( 'consulting-fontawesome-style', get_template_directory_uri() . '/layouts/fontawesome-all.min.css' );
    wp_enqueue_style( 'consulting-bootstrap-style', get_template_directory_uri() . '/layouts/bootstrap.min.css' );
    wp_enqueue_style( 'consulting-owl-carousel-style', get_template_directory_uri() . '/layouts/owl.carousel.min.css' );
    wp_enqueue_style( 'consulting-owl-theme-default-style', get_template_directory_uri() . '/layouts/owl.theme.default.min.css' );
    wp_enqueue_style( 'consulting-style', get_stylesheet_uri() );

    // Scripts
    wp_enqueue_script( 'consulting-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '20151215', true );
    wp_enqueue_script( 'consulting-owl-carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
    wp_enqueue_script( 'consulting-custom-script', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'consulting_scripts' );
