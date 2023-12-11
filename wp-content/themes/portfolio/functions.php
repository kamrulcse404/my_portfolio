<?php

/* --------------Post Thumbnails Add-------------- */

add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 337, true);
add_image_size('single-thumbnail', 600, 337, true);

// include title & js_css  
add_theme_support('title-tag');
require_once('enqueue/enqueue_css_js.php');

// redux Framework //
require_once('lib/framework/ReduxCore/framework.php');
require_once('lib/framework/sample/config.php');

//cmb2
require_once('metabox/init.php');
require_once('metabox/functions.php');



// database 
require_once('functions/database.php');

// custom functions 
require_once('functions/custom-post-type.php');
require_once('functions/ajax_actions.php'); 

// header menus 
function register_header_menu()
{
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'elon')
        )
    );
}
add_action('after_setup_theme', 'register_header_menu');




