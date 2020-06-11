<?php get_header();?>

<?php 
   $tag_id;
   $cantidad = -1;
   $the_query = new WP_Query( array( 
      'post_type' => 'eventos',
      'tag_id' => $tag_id, 
      'posts_per_page' => -1,
      
       ) );
      $tag = get_tag( $tag_id);
      $tag_name = $tag->name;
?>


   
      <h3 class="container">
         <?php echo $tag_name;?>
      </h3>
       <?php while( $the_query->have_posts()): $the_query->the_post();?>
       
   <div class="container">
    
    <div class="row">

       <section class=" col s12 m12 l8 ">
             <div class="card-padre">
            <div class="card-header">
                <h6><?php the_title();?></h6>
                <div class="flex">
                    <div class="flex">
                        <p>Fecha:</p> <p><?php the_field('fecha');?></p>
                    </div>
                    <div class="flex">
                        <p>Lugar:</p> <p><?php the_field('lugar');?></p>
                    </div>
                </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
              <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') )?>
              </div>
            </div>
            <div>
                <p>
                    <?php the_excerpt();?>
                </p>
                <a href="<?php the_permalink();?>" class="btn">Ver Más</a>
            </div>
         </div>
         </section>
       <?php get_sidebar();?>
    </div>

   
</div>
       

         

         
 <?php   
 endwhile;
 get_footer();?>