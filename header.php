<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <span class="brand-mark" aria-hidden="true"></span>
      <span class="brand-text"><strong>KUBER</strong> PROJECTS</span>
    </a>
    <nav class="nav" aria-label="<?php esc_attr_e('Primary', 'kuber'); ?>">
      <?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'menu_class'=>'nav-list','fallback_cb'=>false]); ?>
    </nav>
  </div>
</header>
