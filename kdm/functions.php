<?php
function hobea_theme_setup() {
  add_theme_support('title-tag');
  register_nav_menus(array(
    'primary' => __('Hoofdmenu', 'hobea')
  ));
}
add_action('after_setup_theme', 'hobea_theme_setup');

function hobea_theme_scripts() {
  wp_enqueue_style('hobea-style', get_stylesheet_uri());
  wp_enqueue_script('hobea-menu-toggle', get_template_directory_uri() . '/menu-toggle.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'hobea_theme_scripts');
?>
