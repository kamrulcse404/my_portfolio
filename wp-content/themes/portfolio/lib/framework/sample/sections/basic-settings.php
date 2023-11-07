<?php
defined('ABSPATH') || exit;

// Basic Settings //

// header logo 
Redux::setSection($opt_name, array(
    'title'            => __('Header Section', 'elon'),
    'id'               => 'header-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'header-logo',
            'type'    => 'media',
            'title' => __('Website Header Logo', 'elon'),
            'subtitle' => __('Upload Your Header Website Logo', 'elon'),
            'default' => array(
                'url' => get_template_directory_uri() . '/assets/images/logo3.png',
            )
        ),
    )
));


// footer section
Redux::setSection($opt_name, array(
    'title'            => __('Footer Section', 'portfolio'),
    'id'               => 'footer-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'copy_right',
            'type' => 'text',
            'title' => __('Copy Rights', 'portfolio'),
            'default' => ' © 2022 Luique. All rights reserved',
        ),

        array(
            'id' => 'author',
            'type' => 'text',
            'title' => __('Author Name', 'portfolio'),
            'default' => 'BSLTHEMES',
        ),

        
        array(
            'id' => 'twitter_footer_url',
            'type' => 'text',
            'title' => __('Twitter Url', 'portfolio'),
            'default' => 'BSLTHEMES',
        ),

        array(
            'id' => 'twitter_footer_url',
            'type' => 'text',
            'title' => __('Twitter Url', 'portfolio'),
            'default' => "https://twitter.com/",
        ),

        array(
            'id' => 'dribbble_footer_url',
            'type' => 'text',
            'title' => __('Dribbble Url', 'portfolio'),
            'default' => "https://dribbble.com/",
        ),

        array(
            'id' => 'behance_footer_url',
            'type' => 'text',
            'title' => __('Behance Url', 'portfolio'),
            'default' => "https://www.behance.net/",
        ),
    )
));

