<?php


// metabox for index hero section
function metabox_for_index_service_section(array $index_section_service)
{
    $index_section_service[] = array(
        'id' => 'index_page_section_service',
        'title' => 'Index Service Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(

            array(
                'id' => 'service_title',
                'name' => 'Title For Service Section',
                'default' => "What I Do",
                'type' => 'text',
            ),           
            
            array(
                'id' => 'service_sub_title',
                'name' => 'Sub-Title For Service Section',
                'default' => "My Services",
                'type' => 'text',
            ),   
           
        ),
    );

    return $index_section_service;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_service_section');



// repeater add more option for index service
function index_service_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index_service_repeater',
        'title' => 'Add More Option For Service Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'index_service_item',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Title',
        'desc' => 'Write Service Title',
        'id' => 'index_service_section_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Title',
        'desc' => 'Write Service Sub Title',
        'id' => 'index_service_section_sub_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Short Text',
        'desc' => 'Service Short Description',
        'id' => 'index_service_section_short_desc',
        'type' => 'textarea',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Background Image',
        'desc' => 'Upload Service Background Image',
        'id' => 'index_service_section_background_image',
        'type' => 'file',
    ));
}

add_action('cmb2_admin_init', 'index_service_metaboxes');


