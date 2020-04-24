<?php get_header() ;
   $list_subcat = array();
   $cat;
   $the_query = new WP_Query( array( 'cat' => $cat, 'posts_per_page' => 10 ) );
   $parent_cat = get_category_link($cat);
   $cat2 = $the_query->query[cat];
   
?>





<?php get_footer();?>