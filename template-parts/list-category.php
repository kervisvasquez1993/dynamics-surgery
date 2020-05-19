<?php
// variables para obtener categorias
$list_subcat = array();
$cat;
$cantidad = -1;
$the_query = new WP_Query( array( 'cat' => $cat, 'posts_per_page' => $cantidad ) );
$parent_cat = get_category_link($cat);
$cat2 = $the_query->query[cat]; //id de la categoria    
// echo get_cat_name($cat2); // nombre de la categoria 
//fin de variables

$categories = get_categories(array('orderby' => 'name','order'   => 'ASC', "hide_empty" => false)); //traer las categorias de 
    
foreach( $categories as $category )
   {
   $category_link = sprintf( 
       '<a href="%1$s" alt="%2$s">%3$s</a>',
       esc_url( get_category_link( $category->term_id ) ),
       esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
       esc_html( $category->name )
   );
   echo '<p>' . sprintf($category_link ) . '</p> ';
  
} 
?>