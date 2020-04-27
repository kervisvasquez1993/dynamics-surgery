<?php
/**
 *Template Name: categoria 
 **/
   get_header() ;
   
?>

<div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
   <h2 class="center">Titulo Dynamics surgery </h2>
</div>
<div class="container">
   <div class="row">
      <?php require_once dirname( __FILE__ ).'/template-parts/list-category.php';?>
   </div>
      <div class="row">
           <div class="img-category blue">
               <img src="" alt="" class=>
           </div>
           <div>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto sint hic, tempora officia at reiciendis ratione et accusamus velit mollitia recusandae, magni fuga sed, autem dolorum! Quaerat quidem reiciendis officia.</p>
           </div>
           <div>
           <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div>
                     <h4><a href=""><?php the_title(); ?></h4>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

           </div>
      </div>
</div>




<?php get_footer();?>


