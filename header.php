<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header" role="banner">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <span class="brand-mark" aria-hidden="true"></span>
      <span class="brand-text"><strong>KUBER</strong> PROJECTS</span>
    </a>

    <!-- Mobile menu button -->
    <button class="nav-toggle" aria-expanded="false" aria-controls="primary-menu">
      <span class="nav-toggle__bar" aria-hidden="true"></span>
      <span class="nav-toggle__bar" aria-hidden="true"></span>
      <span class="nav-toggle__bar" aria-hidden="true"></span>
      <span class="visually-hidden">Menu</span>
    </button>

    <nav class="primary-nav" aria-label="<?php esc_attr_e('Primary', 'kuber'); ?>">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_id'        => 'primary-menu',
          'menu_class'     => 'nav-list',
          'fallback_cb'    => false,
          // keep markup simple
          'depth'          => 2,
        ]);
      ?>
    </nav>
  </div>
</header>

