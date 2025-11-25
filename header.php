<?php
/**
 * Header Template
 * @package Aquila
 */
?>

<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>"> <!-- Dynamic language attribute -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"> <!-- Dynamic charset -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?> <!-- Hook for plugins and themes to insert code into the head section -->
</head>
<body <?php body_class(); ?>> <!-- Body tag with dynamic classes -->
    <?php wp_body_open(); ?> <!-- Hook for plugins to insert code right after the body tag -->

    <header class="site-header">
        <div class="container mx-auto px-4">
            <h1 class="site-title text-3xl font-bold">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?> <!-- Dynamic site name -->
                </a>
            </h1>
            <p class="site-description text-sm text-gray-600"></p>
                <?php bloginfo( 'description' ); ?> <!-- Dynamic site description -->
        </div>
    </header>
