<?php
 get_header() ;
?>

<div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
   <h2 class="center">Titulo Dynamics surgery </h2>
</div>
<?php get_template_part( 'template-parts/menu', 'interno' );?>

<section class="container">
   <div class="flex-category">
       <div class="sister1">
          <?php require_once dirname( __FILE__ ).'/template-parts/list-category.php';?>
       </div>
        <div class="sister2">
                <h4><?php echo get_cat_name($cat2);?></h4>
                <div class="img-category blue">
                    <img src="" alt="">
                </div>
                <div>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto sint hic, tempora officia at reiciendis ratione et accusamus velit mollitia recusandae, magni fuga sed, autem dolorum! Quaerat quidem reiciendis officia.</p>
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


