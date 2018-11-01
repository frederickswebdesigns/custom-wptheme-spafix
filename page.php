<?php
get_header();
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>
  <main class="post page">
  <?php
    if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb('
    <p id="breadcrumbs">','</p>
    ');
    }
  ?>
    <h3><?php the_title();?></h3>
    <?php the_content(); ?>
  </main>
  <?php endwhile;

  else : 
    echo '<p>No content found</p>';
  endif;

  get_footer();
?>