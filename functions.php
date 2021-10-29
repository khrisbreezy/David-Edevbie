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

// Function to add menus
function register_theme_menus() {
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'right-menu-image' => "Right Menu Image"
        )
    );
}
add_action('init', 'register_theme_menus');

// Register WordPress nav menu
register_nav_menu('main-menu', 'Main Menu');

require_once('bs4navwalker.php');

add_theme_support('post-thumbnails'); // Enables featured images for blog post

// To display the option field
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Footer');
    acf_add_options_sub_page('Social Media on Nav');
}
