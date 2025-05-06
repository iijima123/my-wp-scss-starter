<?php
function theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
}
add_action('after_setup_theme', 'theme_setup');

function theme_scripts() {
  wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'));
  wp_enqueue_script('swiper', get_theme_file_uri('/assets/js/swiper.js'), [], null, true);
  wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/script.js'), [], null, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
?>