<?php 

// single work
function metabox_for_single_work(array $work_single_meta)
{
    $work_single_meta[] = array(
        'id' => 'single_work',
        'title' => 'Single Work Extra Field',
        'object_types' => array('works'),

        'fields' => array(
            array(
                'id' => 'single_work_back_image',
                'name' => 'Upload Single Work BackgroundImage',
                'default' => get_template_directory_uri() . '/assets/images/pat-2.png',
                'type' => 'file',
            ),        
        ),
    );

    return $work_single_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_single_work');