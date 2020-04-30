<?php 
add_action( 'cmb2_admin_init', 'kervis' );

function kervis(){

	$divisiones = new_cmb2_box( array(
		'id'            => 'divisiones',
		'title'         => esc_html__( 'select', 'cmb2' ),
		'object_types'  => array( 'producto' ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		 'context'    => 'normal',
		 'priority'   => 'high',
		 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.

	));
$divisiones->add_field( array(
		'name'     => esc_html__( 'Test Taxonomy Select', 'cmb2' ),
		'desc'     => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'       => 'yourprefix_demo_taxonomy_select',
		'type'     => 'taxonomy_select', // Or `taxonomy_select_hierarchical`
		'taxonomy' => 'category', // Taxonomy Slug
	) );

}

// seccion de campos para categorias
add_action( 'cmb2_admin_init', 'campos_categorias' );

function campos_categorias()
 {

	/**
	 * Metabox to add fields to categories and tags
	 */
	$category = new_cmb2_box( array(
		'id'               => 'yourprefix_term_edit',
		'title'            => esc_html__( 'Category Metabox', 'cmb2' ), // Doesn't output for term boxes
		'object_types'     => array( 'term' ), // Tells CMB2 to use term_meta vs post_meta
		'taxonomies'       => array( 'category', 'post_tag' ), // Tells CMB2 which taxonomies should have these fields
		// 'new_term_section' => true, // Will display in the "Add New Category" section
	) );

	$category->add_field( array(
		'name'     => esc_html__( 'Extra Info', 'cmb2' ),
		'desc'     => esc_html__( 'Información de Categoria', 'cmb2' ),
		'id'       => 'yourprefix_term_extra_info',
		'type'     => 'title',
		'on_front' => false,
	) );

	$category->add_field( array(
		'name' => esc_html__( 'Term Image', 'cmb2' ),
		'desc' => esc_html__( 'test field description (optional)', 'cmb2' ),
		'id'   => 'img_category',
		'type' => 'file',
	) );

	
}

