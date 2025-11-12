<?php
/**
 * * Theme functions and definitions
 * * @package Aquila
 */
// Enqueue Stylesheet
function aquila_enqueue_scripts() {
    wp_enqueue_style( 'aquila-style', get_stylesheet_uri() ); // Enqueue main stylesheet
}
add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' ); // Hook into WordPress