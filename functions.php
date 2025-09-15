<?php
// Load CSS from assets/css/main.css
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'kuber-main',
    get_stylesheet_directory_uri() . '/assets/css/main.css',
    [],
    filemtime(get_stylesheet_directory() . '/assets/css/main.css')
  );
});

// Theme supports + a menu location
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus([
    'primary' => __('Primary Menu', 'kuber'),
  ]);
});
