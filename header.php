<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php echo bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header-inner flex flex-column">
      <?php $tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
      <<?php echo $tag; ?> class="site-title">
        <a href="<?php echo esc_url(home_url()); ?>" class="change-clr"><?php echo bloginfo('name'); ?>
        </a>
      </<?php echo $tag; ?>>
      <nav class="header-nav">
        <ul class="header-list">
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="change-clr">about</a></li>
          <li><a href="<?php echo esc_url(home_url('/service/')); ?>" class="change-clr">service</a></li>
          <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="change-clr">recruit</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="change-clr">contact</a></li>
        </ul>
      </nav>
    </div>
  </header>