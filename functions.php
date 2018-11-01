<?php 
add_filter('show_admin_bar', '__return_false');

function my_styles_and_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());

  wp_register_script('custom_script', home_url() . '/wp-content/themes/spafixadelaide/js/custom_script.js', array( 'jquery' ));
  wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'my_styles_and_scripts');

// Navigation Menus 

register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
  'mobile' => __('Mobile Menu'),
  'sidebar' => __('Sidebar Menu')
));

// Featured image enabled

add_theme_support( 'post-thumbnails' );

//widget areas

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'homepage',
    'before_widget' => '<div class = "Services">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


// Custom sidebar 

// function my_custom_sidebar() {
//   register_sidebar(
//       array (
//           'name' => __( 'Custom', 'your-theme-domain' ),
//           'id' => 'custom-side-bar',
//           'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
//           'before_widget' => '<div class="widget-content">',
//           'after_widget' => "</div>",
//           'before_title' => '<h3 class="widget-title">',
//           'after_title' => '</h3>',
//       )
//   );
// }
// add_action( 'widgets_init', 'my_custom_sidebar' );