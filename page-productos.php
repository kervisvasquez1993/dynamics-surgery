<?php 
  /* Template Name: divisiones*/
  get_header();
   
?>
<?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
           <h2 class="center">Titulo Dynamics surgery </h2>
        </div>
<?php endwhile;
          /*while($query->have_posts()):$query->the_post(); */
         ?>

   <?php get_template_part( 'template-parts/menu', 'interno' );?>
        
      <section class="header-productos">
          <header class="center">
              <h3>Conoce nuestras lineas</h3>
              <p>lorem ipsup lorem ipsuplorem ipsup lorem ipsuplorem ipsuplorem ipsuplorem ipsup</p>
          </header>
        </section>
        <section class="row wrapper-card">
           <?php kervis_query_productos(-1);?>
        </section>
  </div>


<?php get_footer();?>