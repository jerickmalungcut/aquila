<?php
/**
 * Header Template
 * @package Aquila
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>


<header class="fixed top-0 left-0 w-full bg-black/80 backdrop-blur shadow z-50">
<div class="max-w-7xl mx-auto px-6 flex items-center justify-between h-20">


<!-- LOGO -->
<a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="h-10" alt="<?php bloginfo('name'); ?> Logo" />
<span class="text-xl font-bold"><?php bloginfo('name'); ?></span>
</a>


<!-- NAVIGATION -->
<nav class="hidden md:flex items-center gap-8">
<?php
wp_nav_menu([
'theme_location' => 'primary-menu',
'container' => false,
'menu_class' => 'flex items-center gap-8 font-medium',
'fallback_cb' => false,
]);
?>
</nav>


<!-- SEARCH -->
<div class="hidden md:flex items-center bg-gray-100 rounded-full px-4 py-2 w-64 focus-within:ring-2 ring-blue-400 transition">
<?php get_search_form(); ?>
</div>


<!-- MOBILE MENU BUTTON -->
<button id="mobileBtn" class="md:hidden focus:outline-none">
<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
</svg>
</button>
</div>


<!-- MOBILE MENU -->
<div id="mobileMenu" class="md:hidden bg-white shadow-lg p-6 space-y-4 hidden animate-fade-down">
<?php
wp_nav_menu([
'theme_location' => 'primary-menu',
'container' => false,
'menu_class' => 'space-y-4 font-medium',
'fallback_cb' => false,
]);
?>


<div class="bg-gray-100 rounded-full px-4 py-2 flex items-center">
<?php get_search_form(); ?>
</div>
</div>
</header>