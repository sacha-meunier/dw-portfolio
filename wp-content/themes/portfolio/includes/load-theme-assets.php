<?php
// Define const for the dist assets
define('THEME_ASSETS', get_template_directory_uri() . '/../../../dist');

// Function to save the main css and js files
function enqueue_theme_assets(): void
{
    // Save main css file
    wp_enqueue_style('main-css', THEME_ASSETS . '/css/main.css', array(), '1.0', 'all');

    // Save main js file
    wp_enqueue_script('main-js', THEME_ASSETS . '/js/main.js', array(), '1.0', true);
}

// Action to add styles and scripts to wp_head
add_action('wp_enqueue_scripts', 'enqueue_theme_assets');
