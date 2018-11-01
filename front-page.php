<?php
get_header();
if (have_posts()) : 
  while (have_posts()) : the_post(); ?>
  <main class="post page">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("homepage") ) : ?>
      <?php endif;?>
    <?php the_content(); ?>
  </main>
  <?php endwhile;

  else : 
    echo '<p>No content found</p>';
  endif;

  get_footer();
?>