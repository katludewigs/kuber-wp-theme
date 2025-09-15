<?php
function kuber_enqueue_styles() {
    wp_enqueue_style('kuber-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'kuber_enqueue_styles');

function kuber_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'kuber_theme_setup');
