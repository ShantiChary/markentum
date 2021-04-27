<?php
/*
 Plugin Name: Custom MK Plugin
 Description: Markentum Custom Post Types and Taxonomies 
 Version: 1.0
 Author: Shanti Chary
 License: GPL 2.1
 */

//--------------------------------------------------------------
// Custom Post Types
//--------------------------------------------------------------
 function mk_register_custom_post_types() {
    //Employee Custom Post type
    $labels = array(
        'name'               => _x( 'Employees', 'post type general name' ),
        'singular_name'      => _x( 'Employee', 'post type singular name'),
        'menu_name'          => _x( 'Employees', 'admin menu' ),
        'name_admin_bar'     => _x( 'Employee', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Employee' ),
        'add_new_item'       => __( 'Add New Employee' ),
        'new_item'           => __( 'New Employee' ),
        'edit_item'          => __( 'Edit Employee' ),
        'view_item'          => __( 'View Employee' ),
        'all_items'          => __( 'All Employees' ),
        'search_items'       => __( 'Search Employees' ),
        'parent_item_colon'  => __( 'Parent Employees:' ),
        'not_found'          => __( 'No Employees found.' ),
        'not_found_in_trash' => __( 'No Employees found in Trash.' ),
        'archives'           => __( 'Employee Archives'),
        'insert_into_item'   => __( 'Uploaded to this Employee'),
        'uploaded_to_this_item' => __( 'Employee Archives'),
        'filter_item_list'   => __( 'Filter Employees list'),
        'items_list_navigation' => __( 'Employees list navigation'),
        'items_list'         => __( 'Employees list'),
        'featured_image'     => __( 'Employee feature image'),
        'set_featured_image' => __( 'Set Employee feature image'),
        'remove_featured_image' => __( 'Remove Employee feature image'),
        'use_featured_image' => __( 'Use as feature image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'employees' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => 'page-attributes',
        'menu_position'      => 5,
        'supports'           => array( 'page-attributes' ),
        'menu_icon'          => 'dashicons-media-audio',
    );
    register_post_type( 'employee', $args );
}

 add_action( 'init', 'mk_register_custom_post_types' );

 function mk_rewrite_flush() {
    mk_register_custom_post_types();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'mk_rewrite_flush' );


//--------------------------------------------------------------
// Taxonomies
//--------------------------------------------------------------
function mk_register_taxonomies() {
    // Add Location taxonomy
    $labels = array(
        'name'              => _x( 'Location', 'taxonomy general name' ),
        'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Locations' ),
        'all_items'         => __( 'All Location' ),
        'parent_item'       => __( 'Parent Location' ),
        'parent_item_colon' => __( 'Parent Location:' ),
        'edit_item'         => __( 'Edit Location' ),
        'view_item'         => __( 'Vview Location' ),
        'update_item'       => __( 'Update Location' ),
        'add_new_item'      => __( 'Add New Location' ),
        'new_item_name'     => __( 'New Location Name' ),
        'menu_name'         => __( 'Location' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'locations' ),
    );
    register_taxonomy( 'location-category', array( 'employee' ), $args );
 }
 add_action( 'init', 'mk_register_taxonomies'); 


//--------------------------------------------------------------
// Odering Custom posts by Taxonomy
//--------------------------------------------------------------
 add_filter("manage_edit-employee_sortable_columns", 'employee_sort');
 function employee_sort($columns) {
    $custom = array(
        'taxonomy-location-category' => 'taxonomy-location-category'
    );
    return wp_parse_args($custom, $columns);
 }


