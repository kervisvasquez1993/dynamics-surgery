<?php 
add_action( 'init', 'producto' );
function producto() {
    $labels = array(
        'name'               => _x( 'producto', 'surgery' ),
        'singular_name'      => _x( 'producto', 'post type singular name', 'surgery' ),
        'menu_name'          => _x( 'producto', 'admin menu', 'surgery' ),
        'name_admin_bar'     => _x( 'producto', 'add new on admin bar', 'surgery' ),
        'add_new'            => _x( 'Add New', 'book', 'surgery' ),
        'add_new_item'       => __( 'Add New producto', 'surgery' ),
        'new_item'           => __( 'New producto', 'surgery' ),
        'edit_item'          => __( 'Edit producto', 'surgery' ),
        'view_item'          => __( 'View producto', 'surgery' ),
        'all_items'          => __( 'All producto', 'surgery' ),
        'search_items'       => __( 'Search producto', 'surgery' ),
        'parent_item_colon'  => __( 'Parent producto:', 'surgery' ),
        'not_found'          => __( 'No producto found.', 'surgery' ),
        'not_found_in_trash' => __( 'No producto found in Trash.', 'surgery' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'producto' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'producto' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'producto', $args );
}

add_action( 'init', 'eventos' );
function eventos() {
    $labels = array(
        'name'               => _x( 'eventos', 'surgery' ),
        'singular_name'      => _x( 'eventos', 'post type singular name', 'surgery' ),
        'menu_name'          => _x( 'eventos', 'admin menu', 'surgery' ),
        'name_admin_bar'     => _x( 'eventos', 'add new on admin bar', 'surgery' ),
        'add_new'            => _x( 'Add New', 'book', 'surgery' ),
        'add_new_item'       => __( 'Add New eventos', 'surgery' ),
        'new_item'           => __( 'New eventos', 'surgery' ),
        'edit_item'          => __( 'Edit eventos', 'surgery' ),
        'view_item'          => __( 'View eventos', 'surgery' ),
        'all_items'          => __( 'All eventos', 'surgery' ),
        'search_items'       => __( 'Search eventos', 'surgery' ),
        'parent_item_colon'  => __( 'Parent eventos:', 'surgery' ),
        'not_found'          => __( 'No eventos found.', 'surgery' ),
        'not_found_in_trash' => __( 'No eventos found in Trash.', 'surgery' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'eventos' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'eventos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'eventos', $args );
}