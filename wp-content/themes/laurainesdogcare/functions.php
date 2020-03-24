<?php

// load the css and the javascript
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'font-style', get_template_directory_uri().'/css/all.css' );
    wp_enqueue_style ('theme-style', get_template_directory_uri().'/css/clean-blog.min.css', array('parent-style'));
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function load_footer_scripts() {
    wp_enqueue_script('theme-script', get_template_directory_uri().'/js/clean-blog.min.js', false);
    wp_enqueue_script('mail-script', get_template_directory_uri().'/js/mail.js', false);
    wp_localize_script( 'mail-script', 'ajax',
        array( 'url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_footer', 'load_footer_scripts' );

// add a custom menu
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

// activate thumbnails
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

add_action("wp_ajax_nopriv_send_form_action", "send_form");

function send_form() {
    echo "test";
//    $data = $_POST['data'];
//    $name = trimCharacters($data['name']);
//    $email = trimCharacters($data['email']);
//    $phoneNumber = trimCharacters($data['phone']);
//    $messages = trimCharacters($data['messages']);
//
//    $to = 'wesselslot1@gmail.com';
//    $subject = 'The subject';
//    $body = '<ul><li>' . $name . '</li><li>' . $email . '</li><li>' . $phoneNumber . '</li><li>' . $messages . '</li></ul>';
//    $headers = array('Content-Type: text/html; charset=UTF-8');
//
//    wp_mail($to, $subject, $body, $headers);

    wp_die();
}

function trimCharacters($value) {
    return htmlspecialchars(trim($value));
}


