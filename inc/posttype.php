<?php 
add_action( 'init', 'divisiones' );
function divisiones() {
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
        'description'        => __( 'Description.', 'divisiones' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'divisiones' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'divisiones', $args );
}