<?php 
add_action( 'cmb2_admin_init', 'kervis' );

function kervis(){

	$divisiones = new_cmb2_box( array(
		'id'            => 'divisiones',
		'title'         => esc_html__( 'select', 'cmb2' ),
		'object_types'  => array( 'divisiones' ), // Post type
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
