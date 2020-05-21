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
    
foreach( $categories as $category ): 
    $category_id = $category->term_id;
?>
  <a class="category_id" href="<?php  echo esc_url( get_category_link( $category_id ));?>" data-category="<?php echo $category_id;?>"> 
        <?php echo esc_html( $category->name );?> 
  </a>

<?php 
 endforeach;
