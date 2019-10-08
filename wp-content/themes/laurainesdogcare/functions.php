<?php

// load the css and the javascript
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'font-style', get_template_directory_uri().'/css/all.css' );
    wp_enqueue_style ('theme-style', get_template_directory_uri().'/css/clean-blog.min.css', array('parent-style'));
    wp_enqueue_script('theme-style', get_template_directory_uri().'/js/clean-blog.min.js', false);
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// add a custom menu
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

// activate thumbnails
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

