<?php 
    /**
     * Template Name: eventos
    */
    get_header();
?>
<?php while(have_posts()): the_post();?>
    <div class="img-hero2" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
         <h2 class="center color-font-header texto-center Bold"><?php the_field('titulo_cabecera');?></h2>
    </div>
<?php endwhile;?>
<?php get_template_part( 'template-parts/menu', 'interno' ); ?>

  
<div class="container">
    <h3 class="Bold titulo-font-color">Eventos</h3>
    <div class="titulo-border3"></div>
    <div class="row">

       <section class=" col s12 m12 l8 ">
         <?php kervis_query_eventos(-1);?>
       </section>
       <?php get_sidebar();?>
    </div>

   
</div>
        
<?php get_footer();?>