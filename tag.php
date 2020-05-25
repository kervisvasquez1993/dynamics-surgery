<?php get_header();?>
<?php while(have_posts()): the_post();?>
    <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
         <h2 class="center color-font-header texto-center"><?php the_field('titulo_cabecera');?></h2>
    </div>
<?php endwhile;?>
<?php get_template_part( 'template-parts/menu', 'interno' ); ?>

  
    <div class="container">
    <h2>Eventos</h2>
    <div class="row">

       <section class=" col s12 m12 l8 ">
         <?php 
         $args2 = array(
            'posts_per_page'  => -1,
            'tag_id'          => $tag,
            'fields' 	  => 'ids',
        );
        $tag_query = new WP_Query( $args2 );
         
         while( $tag_query->have_posts()): $tag_query->the_post();?>
         <div class="card-padre">
            <div class="card-header">
                <h6><?php the_title();?></h6>
            </div>
            <div class="card">
                <a href="<?php the_permalink();?>" class="btn">Ver Más</a>
            </div>
         </div>
        <?php endwhile;?>
         <div class="text-center">
            <div class="navigation">
                <?php if(function_exists('pagenavi')) { pagenavi(); } ?>
            </div>
       </div>
       </section>
       <?php get_sidebar();?>
</div>

</div>
</div>
<?php get_footer();?>