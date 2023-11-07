<?php


// metabox for index skills section
function metabox_for_index_skills_section(array $index_section_skills)
{
    $index_section_skills[] = array(
        'id' => 'index_page_section_skills',
        'title' => 'Index Skills Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(

            array(
                'id' => 'skills_title',
                'name' => 'Title For Skills Section',
                'default' => "Professional Skills ",
                'type' => 'text',
            ),           
            
            array(
                'id' => 'skills_sub_title',
                'name' => 'Sub-Title For Skills Section',
                'default' => "my Talent",
                'type' => 'text',
            ),   
           
        ),
    );

    return $index_section_skills;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_skills_section');


// // repeater add more option for index testimonial
// function index_testimonial_metaboxes()
// {
//     $cmb = new_cmb2_box(array(
//         'id' => 'index-testimonial-repeater',
//         'title' => 'Add More Option For Testimonial Section',
//         'object_types' => array('page'),
//         'show_on' => array(
//             'key' => 'page-template',
//             'value' => 'index.php',
//         ),
//         'context' => 'normal',
//         'priority' => 'high',
//         'show_names' => true,
//     ));

//     $add_more_option = $cmb->add_field(array(
//         'id' => 'index_testimonial_item',
//         'type' => 'group',
//         'repeatable' => true,
//         'options' => array(
//             'group_title' => 'Add More {#}',
//             'add_button' => 'Add Another Option',
//             'remove_button' => 'Remove Option',
//             'closed' => true,
//             'sortable' => true,
//         ),
//     ));

//     $cmb->add_group_field($add_more_option, array(
//         'name' => 'Image',
//         'desc' => 'Upload Testimonial Image',
//         'id' => 'index_testimonial_sesction_image',
//         'type' => 'file',
//     ));

//     $cmb->add_group_field($add_more_option, array(
//         'name' => 'Background Image',
//         'desc' => 'Upload Testimonial Background Image',
//         'id' => 'index_testimonial_sesction_background_image',
//         'type' => 'file',
//     ));

//     $cmb->add_group_field($add_more_option, array(
//         'name' => 'Short Text',
//         'desc' => 'Testimonial Short DEscription',
//         'id' => 'index_testimonial_sesction_short_desc',
//         'type' => 'textarea',
//     ));
// }

// add_action('cmb2_admin_init', 'index_testimonial_metaboxes');


