<?php 

  function add_theme_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css', array(), null, 'all' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), null, true);
  }

  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
  add_theme_support('title-tag');

  add_theme_support( 'post-thumbnails' );

  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

  // Remove p tags from category description
  remove_filter('term_description','wpautop');

  function register_my_menus(){
    register_nav_menus(
      array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu'
      )
    );
  }
  add_action('init','register_my_menus');
?>
