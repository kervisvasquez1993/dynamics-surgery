<?php get_header();?>
<?php get_template_part( 'template-parts/menu', 'interno' ); ?>
<div class="container">
         <?php 
            $tag_id;
         $cantidad = -1;
         $the_query = new WP_Query( array( 'tag_id' => $tag_id, 'posts_per_page' => 1 ) );
         print_r($the_query);
         while($the_query->have_post()):
            the_title();
         endwhile;

         

         
 get_footer();?>