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


// repeater add more option for index skills
function index_skills_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index-skills-repeater',
        'title' => 'Add More Option For Skills Section',
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
        'id' => 'index_skill_items',
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
        'name' => 'Techonology Name',
        'desc' => 'Your skilled techonology name',
        'id' => 'index_skill_sesction_name',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Techonology Short Description',
        'desc' => 'Your skilled techonology description',
        'id' => 'index_skill_sesction_description',
        'type' => 'textarea',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Skill Percentage',
        'desc' => 'Your skilled techonology persentage',
        'id' => 'index_skill_sesction_percentage',
        'type' => 'text',
    ));



    
}

add_action('cmb2_admin_init', 'index_skills_metaboxes');


