<?php


// metabox for index hero section
function metabox_for_index_hero_section(array $index_section_hero)
{
    $index_section_hero[] = array(
        'id' => 'index_page_section_hero',
        'title' => 'Index Hero Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(

            array(
                'id' => 'index_hero_image',
                'name' => 'Profile Image',
                'default' => get_template_directory_uri() . '/assets/images/iti5.png',
                'type' => 'file',
            ),

            array(
                'id' => 'index_hero_first_name',
                'name' => 'First Name',
                'default' => "Md Kamrul",
                'type' => 'text',
            ),

            array(
                'id' => 'index_hero_last_name',
                'name' => 'Last Name',
                'default' => "Hasan",
                'type' => 'text',
            ),

            array(
                'id' => 'index_hero_who_i_am',
                'name' => 'Who I am',
                'default' => "Web Developer",
                'type' => 'text',
            ),

            array(
                'id' => 'index_hero_short_description_me',
                'name' => 'Short Description About Me',
                'default' => " From Egypt, Cairo. I have rich experience in web design,
                also I am good at wordpress. I love to talk with you
                about our unique.",
                'type' => 'textarea',
            ),

            array(
                'id' => 'index_hero_twitter_url',
                'name' => 'Twitter Url',
                'default' => "https://twitter.com/",
                'type' => 'text',
            ),

            array(
                'id' => 'index_hero_dribbble_url',
                'name' => 'Dribbble Url',
                'default' => "https://dribbble.com/",
                'type' => 'text',
            ),

            array(
                'id' => 'index_hero_behance_url',
                'name' => 'Behance Url',
                'default' => "https://www.behance.net/",
                'type' => 'text',
            ),

            array(
                'id' => 'cv_url',
                'name' => 'CV Download Link',
                'default' => '#',
                'type' => 'text',
            ),

            array(
                'id' => 'work_experience',
                'name' => 'Work Experience',
                'default' => '3',
                'type' => 'text',
            ),

            array(
                'id' => 'complete_project',
                'name' => 'Work Experience',
                'default' => '60+',
                'type' => 'text',
            ),
        ),
    );

    return $index_section_hero;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_hero_section');
