<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title(''); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- site-header -->
  <header class="site-header">
    <div id="header-image">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" width="100%" />
      </a>
    </div>
    <div class="mobile-menu">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
    <nav class="main-nav">
      <?php wp_nav_menu(array('theme_location' => 'primary'));?>
    </nav>
  </header> <!-- /site-header -->
  <nav class="mobile-nav"> <!-- mobile-menu -->
      <?php wp_nav_menu(array('theme_location' => 'mobile'));?>
  </nav><!-- mobile-menu -->

  <!-- hero section -->

  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
  <div class="hero-image" style="background-image: url('<?php echo $backgroundImg[0]; ?>')" >
    <div class="intro"> 
      <?php if (is_front_page()) : ?> 
      <h1>Your Spa Need Fixing?</h1>
      <?php elseif (is_home()) : ?>
      <h1>Blog</h1>
      <?php else : ?>
      <h1><?php the_title();?></h1>
      <?php endif; ?>
      <span>0425-777-000</span>
      <button class="click-to-call"><a href="tel:5555555555">Call Now</a></button>
    </div>
  </div> <!-- /hero section -->



  <div class="container"><!-- /container -->
