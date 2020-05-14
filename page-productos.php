<?php 
  /* Template Name: divisiones*/
  get_header();
   
?>
<?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
            <h2 class="center color-font-header texto-center"><?php the_field('titulo_cabecera');?></h2>
        </div>

         
   <?php get_template_part( 'template-parts/menu', 'interno' );?>
        
      <section class="header-productos">
          <header class="center">
              <?php the_content();?>
          </header>
        </section>
        <?php endwhile;?>
        <section class="container">
           <div class="row wrapper-card">
               <?php kervis_query_productos(-1);?>
           </div>
        </section>
  </div>


<?php get_footer();?>