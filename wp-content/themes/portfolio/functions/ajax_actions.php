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
    $message_content = sanitize_text_field($formdata['message']);

    $data = array(
        'full_name' => $full_name,
        'email' => $email,
        'subject' => $subject,
        'message' => $message_content,
    );

    global $wpdb;
    // Insert data into the database
    $table_name = $wpdb->prefix . 'contact_info';
    $wpdb->insert($table_name, $data);

    // Mailtrap configuration
    $mailtrap_username = 'dd723a540dede2';
    $mailtrap_password = '8eb1242054fc0a';
    $mailtrap_host = 'smtp.mailtrap.io';
    $mailtrap_port = 2525;

    // Send mail using wp_mail()
    $to = 'hasan@gmail.com';
    $subject = 'Contact Form Submission';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From: testing@gmail.com';

    // Message with form data
    $message = "Full Name: $full_name<br>";
    $message .= "Email: $email<br>";
    $message .= "Subject: $subject<br>";
    $message .= "Message: $message_content<br>";

    // Set up Mailtrap SMTP details
    add_action('phpmailer_init', function ($phpmailer) use ($mailtrap_host, $mailtrap_port, $mailtrap_username, $mailtrap_password) {
        $phpmailer->isSMTP();
        $phpmailer->Host = $mailtrap_host;
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = $mailtrap_port;
        $phpmailer->Username = $mailtrap_username;
        $phpmailer->Password = $mailtrap_password;
    });

    // Send email
    wp_mail($to, $subject, $message, $headers);

    // Send a response
    wp_send_json_success('Successful');

    wp_die();
}
?>
