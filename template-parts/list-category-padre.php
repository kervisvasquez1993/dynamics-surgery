<?php
// variables para obtener categorias
$args = array(
    "type"      => "post",      
    "orderby"   => "name",
    "order"     => "ASC",
    "hide_empty" => false
);
    
    $types = get_categories($args);
   
    foreach( $types as $type )
    {
       
        
        printf( __( 'The post type is: %s', 'textdomain' ), get_post_type( $type->term_id ) );
        $category_link = sprintf
        ( 
            '<a href="%1$s" alt="%2$s">%3$s</a>',
            esc_url( get_category_link( $type->term_id ) ),
            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $type->name ) ),
            esc_html( $type->name )
        );
        echo '<p>' . sprintf($category_link ) . '</p> ';
    }

   