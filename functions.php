<?php
// Enqueue your CSS/JS (keep yours if you already have it)
add_action('wp_enqueue_scripts', function () {
  // main stylesheet
  wp_enqueue_style(
    'kuber-main',
    get_stylesheet_directory_uri() . '/assets/css/main.css',
    [],
    filemtime(get_stylesheet_directory() . '/assets/css/main.css')
  );

  // small inline JS for the mobile toggle
  wp_enqueue_script(
    'kuber-nav',
    get_stylesheet_directory_uri() . '/assets/js/nav.js',
    [],
    filemtime(get_stylesheet_directory() . '/assets/js/nav.js'),
    true
  );
});

// Register the primary menu location
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  register_nav_menus([
    'primary' => __('Primary Menu', 'kuber'),
  ]);
});
