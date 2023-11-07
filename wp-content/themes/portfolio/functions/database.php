<?php


// create database for contact 
function create_database_for_user_contact()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_info';

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name(
        id INT NOT NULL AUTO_INCREMENT,
        full_name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        subject VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_database_for_user_contact');
add_action('after_switch_theme', 'create_database_for_user_contact');