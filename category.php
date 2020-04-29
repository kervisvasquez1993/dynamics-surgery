<?php
 get_header() ;
?>

<div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
   <h2 class="center">Titulo Dynamics surgery </h2>
</div>
<?php get_template_part( 'template-parts/menu', 'interno' );
   
?>
<?php echo get_term_meta( get_the_ID(), 'yourprefix_term_avatar',true )?>
<section class="container">
   <div class="flex-category">
       <div class="sister1">
          <?php require_once dirname( __FILE__ ).'/template-parts/list-category.php';?>
       </div>
        <div class="sister2">
                <h4><?php echo get_cat_name($cat2);?></h4>
                <div class="img-category blue">
                    <?php   $avatar = get_term_meta( get_queried_object_id(), 'img_category', true ); ?>
                    <img src="<?php echo $avatar?>" alt="">
                </div>
                <div>
                   <?php 
                        
                   
                     
                     ?>
                </div>
                <div>
                   <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="producto-select">
                             <p>
                                <a href="<?php the_permalink();?>"><?php the_title(); ?>
                              </p>
                        </div>
        
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                   <?php endif; ?>
                </div>
         </div>
    </div>
</section>

<?php get_footer();?>


