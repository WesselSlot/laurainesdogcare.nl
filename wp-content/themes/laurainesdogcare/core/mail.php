<?php
add_action("wp_ajax_nopriv_send_form_action", "send_form");

function send_form() {
    $data = $_POST['data'];
    $name = trimCharacters($data['name']);
    $email = trimCharacters($data['email']);
    $phoneNumber = trimCharacters($data['phone']);
    $messages = trimCharacters($data['messages']);

    $to = 'wesselslot1@gmail.com';
    $subject = 'The subject';
    $body = '<ul><li>' . $name . '</li><li>' . $email . '</li><li>' . $phoneNumber . '</li><li>' . $messages . '</li></ul>';
    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail($to, $subject, $body, $headers);

    wp_die();
}

function trimCharacters($value) {
    return htmlspecialchars(trim($value));
}