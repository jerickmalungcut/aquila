<?php
/**
 * * Theme functions and definitions
 * * @package Aquila
 */
// Enqueue Stylesheet
function aquila_enqueue_scripts() {
    wp_enqueue_style( 'aquila-style', get_stylesheet_uri()); // Enqueue main stylesheet
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true); // Enqueue main JavaScript file

}
add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' ); // Hook into WordPress