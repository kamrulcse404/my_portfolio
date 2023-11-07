<?php

function custom_works_post_type() {
    $labels = array(
        'name'               => _x( 'Works', 'post type general name', 'portfolio' ),
        'singular_name'      => _x( 'Work', 'post type singular name', 'portfolio' ),
        'menu_name'          => _x( 'Works', 'admin menu', 'portfolio' ),
        'name_admin_bar'     => _x( 'Work', 'add new on admin bar', 'portfolio' ),
        'add_new'            => _x( 'Add New', 'work', 'portfolio' ),
        'add_new_item'       => __( 'Add New Work', 'portfolio' ),
        'new_item'           => __( 'New Work', 'portfolio' ),
        'edit_item'          => __( 'Edit Work', 'portfolio' ),
        'view_item'          => __( 'View Work', 'portfolio' ),
        'all_items'          => __( 'All Works', 'portfolio' ),
        'search_items'       => __( 'Search Works', 'portfolio' ),
        'parent_item_colon'  => __( 'Parent Works:', 'portfolio' ),
        'not_found'          => __( 'No works found.', 'portfolio' ),
        'not_found_in_trash' => __( 'No works found in Trash.', 'portfolio' ),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'portfolio' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'works' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'works', $args );
}

add_action( 'init', 'custom_works_post_type' );

function custom_works_taxonomy() {
    $labels = array(
        'name'              => _x( 'Work Categories', 'taxonomy general name', 'portfolio' ),
        'singular_name'     => _x( 'Work Category', 'taxonomy singular name', 'portfolio' ),
        'search_items'      => __( 'Search Work Categories', 'portfolio' ),
        'all_items'         => __( 'All Work Categories', 'portfolio' ),
        'parent_item'       => __( 'Parent Work Category', 'portfolio' ),
        'parent_item_colon' => __( 'Parent Work Category:', 'portfolio' ),
        'edit_item'         => __( 'Edit Work Category', 'portfolio' ),
        'update_item'       => __( 'Update Work Category', 'portfolio' ),
        'add_new_item'      => __( 'Add New Work Category', 'portfolio' ),
        'new_item_name'     => __( 'New Work Category Name', 'portfolio' ),
        'menu_name'         => __( 'Work Categories', 'portfolio' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'work_cat' ),
    );

    register_taxonomy( 'work_cat', 'works', $args );
}

add_action( 'init', 'custom_works_taxonomy' );
