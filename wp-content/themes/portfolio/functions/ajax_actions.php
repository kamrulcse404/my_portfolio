<?php


// user contact 
add_action('wp_ajax_get_contact_data', 'get_contact_data');
add_action('wp_ajax_nopriv_get_contact_data', 'get_contact_data');

function get_contact_data()
{
    $formdata = [];
    wp_parse_str($_POST['get_contact_data'], $formdata);


    $full_name = sanitize_text_field($formdata['full_name']);
    $email = sanitize_email($formdata['email']);
    $subject = sanitize_text_field($formdata['subject']);
    $message = sanitize_text_field($formdata['message']);

    $data = array(
        'full_name' => $full_name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message,
    );

    // echo "<pre>";
    // print_r($data);
    // exit;


    global $wpdb;
    // Insert data into the database
    $table_name = $wpdb->prefix . 'contact_info';

    $wpdb->insert($table_name, $data);

    // send mail code start 

    $to = 'hasan@gmail.com';
    $subject = 'Subject';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From:' . "testing@gmail.com";


    //Message
    $message = "successful.";

    // wp_mail($to, $subject, $message, $headers);

    // Send a response
    wp_send_json_success('successful');

    wp_die();
}