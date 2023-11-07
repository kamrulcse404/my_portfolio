<?php




// metabox for index resume heading section
function metabox_for_index_resume_heading_section(array $index_section_resume_heading)
{
    $index_section_resume_heading[] = array(
        'id' => 'index_page_section_resume_heading_1',
        'title' => 'Index Resume Section Heading',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(

            array(
                'id' => 'index_resume_heading_title',
                'name' => 'Title',
                'default' => " Resume",
                'type' => 'text',
            ),      

            array(
                'id' => 'index_resume_heading_sub_title',
                'name' => 'Title',
                'default' => " my Story",
                'type' => 'text',
            ), 

            
        ),
    );

    return $index_section_resume_heading;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_resume_heading_section');



// repeater add more option for index resume education
function index_resume_education_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index_resume_education_repeater',
        'title' => 'Add More Option For Resume Education',
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
        'id' => 'index_resume_ed_item',
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
        'name' => 'Department Name',
        'desc' => 'Write Your Department Name',
        'id' => 'index_depart_name',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Institute Name',
        'desc' => 'Write Your Institute Name',
        'id' => 'index_institute_name',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Duration',
        'desc' => 'Write Subject Duration',
        'id' => 'index_subject_duration',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Short Description',
        'desc' => 'Short Description About Subject',
        'id' => 'index_short_desc_about_subject',
        'type' => 'textarea',
    ));
}

add_action('cmb2_admin_init', 'index_resume_education_metaboxes');


// repeater add more option for index resume experience
function index_resume_experience_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index_resume_experience_repeater',
        'title' => 'Add More Option For Resume experience',
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
        'id' => 'index_resume_exp_item',
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
        'name' => 'Designation Name',
        'id' => 'index_exp_designation_name',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Company Name',
        'id' => 'index_exp_company_name',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Duration',
        'id' => 'index_exp_duration_name',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Short Description About Experience',
        'id' => 'index_exp_desc_name',
        'type' => 'textarea',
    ));

    
}

add_action('cmb2_admin_init', 'index_resume_experience_metaboxes');

