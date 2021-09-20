<?php


function theme_styles() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js(){
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-3.11.2.min.js', array('jquery'), '', false);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_js');


function uni_features() {
    add_theme_support('post-thumbnails'); // Enables featured images for blog post
}
add_action('after_setup_theme', 'uni_features');