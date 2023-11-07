<?php




// metabox for index blog heading section
function metabox_for_blog_heading_section(array $blog_heading)
{
    $blog_heading[] = array(
        'id' => 'blog_page_section_heading',
        'title' => 'Blog Section Heading',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'blog.php',
        ),
        'fields' => array(
            array(
                'id' => 'blog_heading_title',
                'name' => 'Title',
                'default' => "OUR BLOGS",
                'type' => 'text',
            ),

            array(
                'id' => 'blog_heading_short_desc',
                'name' => 'Short Description',
                'default' => "RECENT ARTICLES",
                'type' => 'text',
            ),
            
        ),
    );

    return $blog_heading;
}

add_filter('cmb2_meta_boxes', 'metabox_for_blog_heading_section');

