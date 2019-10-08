<?php

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style ('theme-style', get_template_directory_uri().'/css/clean-blog.min.css', array('parent-style'));

    wp_enqueue_script('theme-style', get_template_directory_uri().'/js/clean-blog.min.js', false);
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

