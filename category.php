<?php get_header();
  
     $args = array( 
           'post_type' => 'post', 
           'category_name' => array('ejemplo'), 
           'orderby' => 'date', 
           'order' => 'DESC',
           'showposts' => 4);
 
     $wp_query = new WP_Query($args);
   
     if($wp_query->have_posts()) :
 while($wp_query->have_posts()) :
 $wp_query->the_post(); ?>
 
     <a  href='<?php the_permalink(); ?>'><?php get_the_title(); ?> </a>
 
     <?php   endwhile; endif; 
     wp_reset_query(); 
?>






<?php get_footer();?>