<?php 
add_action( 'init', 'productos' );
function productos() {
    $labels = array(
        'name'               => _x( 'divisiones', 'surgery' ),
        'singular_name'      => _x( 'divisiones', 'post type singular name', 'surgery' ),
        'menu_name'          => _x( 'divisiones', 'admin menu', 'surgery' ),
        'name_admin_bar'     => _x( 'divisiones', 'add new on admin bar', 'surgery' ),
        'add_new'            => _x( 'Add New', 'book', 'surgery' ),
        'add_new_item'       => __( 'Add New divisiones', 'surgery' ),
        'new_item'           => __( 'New divisiones', 'surgery' ),
        'edit_item'          => __( 'Edit divisiones', 'surgery' ),
        'view_item'          => __( 'View divisiones', 'surgery' ),
        'all_items'          => __( 'All divisiones', 'surgery' ),
        'search_items'       => __( 'Search divisiones', 'surgery' ),
        'parent_item_colon'  => __( 'Parent divisiones:', 'surgery' ),
        'not_found'          => __( 'No divisiones found.', 'surgery' ),
        'not_found_in_trash' => __( 'No divisiones found in Trash.', 'surgery' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'productos' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'productos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category','tags' ),
    );

    register_post_type( 'productos', $args );
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
        'hierarchical'       => true,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes' , 'genesis-cpt-archives-settings', 'genesis-seo', 'genesis-scripts', 'genesis-layouts', 'genesis-rel-author', ),
        'taxonomies'          => array( 'post_tag' ),
    );

    register_post_type( 'eventos', $args );
}
