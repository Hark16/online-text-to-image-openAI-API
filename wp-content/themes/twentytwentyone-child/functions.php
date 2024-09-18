<?php
function enqueue_child_theme_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

