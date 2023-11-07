<?php




// metabox for index conatct heading section
function metabox_for_index_contact_heading_section(array $index_section_contact_heading)
{
    $index_section_contact_heading[] = array(
        'id' => 'index_page_section_contact_heading',
        'title' => 'Index Conatct Section Heading',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(

            array(
                'id' => 'index_contact_background_image',
                'name' => 'Contact Background Image',
                'default' => get_template_directory_uri() . '/assets/images/pat-1.png',
                'type' => 'file',
            ),

            array(
                'id' => 'index_conatct_heading_title',
                'name' => 'Title',
                'default' => " Contact Me ",
                'type' => 'text',
            ),

            array(
                'id' => 'index_conatct_heading_sub_title',
                'name' => 'Sub-Title',
                'default' => "Let's Talk About Ideas",
                'type' => 'text',
            ),

            array(
                'id' => 'index_conatct_heading_address',
                'name' => 'Address',
                'default' => "North Tower, Toronto, Canada",
                'type' => 'text',
            ),

            array(
                'id' => 'index_conatct_heading_frelance',
                'name' => 'Frealance',
                'default' => "Available Right Now",
                'type' => 'text',
            ),

            array(
                'id' => 'index_conatct_heading_email',
                'name' => 'Email',
                'default' => "zoe.miller@mydomain.com",
                'type' => 'text',
            ),

            array(
                'id' => 'index_conatct_heading_phone',
                'name' => 'Phone',
                'default' => "+1 900 - 900 - 9000",
                'type' => 'text',
            ),         

            
        ),
    );

    return $index_section_contact_heading;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_contact_heading_section');

