<?php


// metabox for index hero section
function metabox_for_index_works_section(array $index_section_works)
{
    $index_section_works[] = array(
        'id' => 'index_page_section_service',
        'title' => 'Index Work Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(

            array(
                'id' => 'work_title',
                'name' => 'Title For Work Section',
                'default' => "Portfolio",
                'type' => 'text',
            ),           
            
            array(
                'id' => 'work_sub_title',
                'name' => 'Sub-Title For Service Section',
                'default' => "my Cases",
                'type' => 'text',
            ),   
           
        ),
    );

    return $index_section_works;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_works_section');


