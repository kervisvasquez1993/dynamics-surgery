<?php 
    /**
     * Template Name: eventos
    */
    get_header();
?>
<?php while(have_posts()): the_post();?>
    <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
         <h2 class="center color-font-header texto-center"><?php the_field('titulo_cabecera');?></h2>
    </div>
<?php endwhile;?>
<?php get_template_part( 'template-parts/menu', 'interno' ); ?>

  
    <div class="container">
    <h2>Eventos</h2>
    <div class="row">

       <section class=" col s12 m8 ">
         <?php kervis_query_eventos(-1);?>
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