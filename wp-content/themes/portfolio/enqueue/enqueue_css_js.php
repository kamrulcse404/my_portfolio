<?php


function enqueue_custom_styles()
{
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/vendors/bootstrap.css');

    // Enqueue Font Awesome CSS
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.css');

    // Enqueue Magnific Popup CSS
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/vendors/magnific-popup.css');

    // Enqueue Splitting CSS
    wp_enqueue_style('splitting', get_template_directory_uri() . '/assets/css/vendors/splitting.css');

    // Enqueue Swiper CSS
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/vendors/swiper.css');

    // Enqueue Animate CSS
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/vendors/animate.css');

    // Enqueue Style CSS
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue Dark CSS
    wp_enqueue_style('dark-style', get_template_directory_uri() . '/assets/css/dark.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');



function enqueue_custom_scripts()
{
    // Register and enqueue jQuery
    wp_enqueue_script('jquery');

    // Register and enqueue the rest of the scripts
    wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', array('jquery'), null, true);
    wp_enqueue_script('splitting', get_template_directory_uri() . '/assets/js/splitting.js', array('jquery'), null, true);
    wp_enqueue_script('jarallax', get_template_directory_uri() . '/assets/js/jarallax.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), null, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-scrolla', get_template_directory_uri() . '/assets/js/jquery.scrolla.js', array('jquery'), null, true);
    wp_enqueue_script('skrollr', get_template_directory_uri() . '/assets/js/skrollr.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.js', array('jquery'), null, true);
    wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/typed.js', array('jquery'), null, true);
    wp_enqueue_script('common', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), null, true);

    wp_enqueue_script('main_script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);

    wp_localize_script('custom-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));

}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function enqueue_custom_favicon() {
    // Enqueue the favicon
    wp_enqueue_script('custom-favicon', get_template_directory_uri() . '/favicon.ico', array(), null);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_favicon');


function enqueue_custom_fonts() {
    // Enqueue Jost and Caveat fonts
    wp_enqueue_style('jost-font', 'https://fonts.googleapis.com/css?family=Jost:0,100,200,300,400,500,600,700,800,900,1,100,1,200,1,300,1,400,1,500,1,600,1,700,1,800,1,900|Caveat:400,500,600,700&display=swap', array(), null);
    
    // Enqueue Roboto and Roboto Slab fonts
    wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Roboto+Slab:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&display=auto', array(), null);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');



// function enqueue_custom_script1() {
//     // Enqueue your script
//     wp_enqueue_script('custom-script', get_template_directory_uri() . '/path-to-your-script.js', array('jquery'), '1.0', true);

//     // Localize the script with the AJAX URL
//     wp_localize_script('custom-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
// }
// add_action('wp_enqueue_scripts', 'enqueue_custom_script1');


