<?php
 get_header();
?>
<div class="imagen-destacada">
    <?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
             <h2 class="center color-font-header texto-center font-weight-15px Bold"><?php the_field('titulo_cabecera');?></h2>
        </div>
    <?php endwhile;?>
</div>
</header>
<div class="conteiner-header">
<div class="container">
    <div class="row">
        <h4 class="center Franklin-Black semi-bold titulo-2"><?php the_field('titulo_slogan');?></h4>
    </div>
</div>
<?php get_template_part('template-parts/icono','front');?>
</div>
<br><br>
  <?php 
     get_option( 'category_base' );
  ?>

<div class="min-heigth">
<section class="section  Bold height-40 background-principal texto-important no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 Bold font-size-35 color-white Bold"><?php the_content();?></h5>
        </div>
      </div>
</section>
<section class="section height-50  container no-pad-bot">
      <div class="row producto-destacado-front producto-principal">
         <?php producto_destacado(1);?>
      </div>
</section>
</div>

<section class=" backfround-lineas paddin-vertical">
       <div class="titulo-wrapper color-titilo-secundario">
           <h3 class="semi-bold">Nuetros Productos</h3>
           <div class="titulo-border"></div>
       </div>
    <div class="container">
        <hr>
       <div class="conatiner-slider">
         <div class="swiper-container">
           <div class="swiper-wrapper">
              <?php carousel(-1); ?>
           </div>
           <!-- Add Pagination -->
           <div class="swiper-pagination"></div>
           <div class="swiper-button-next"></div>
           <div class="swiper-button-prev"></div>
         </div>
       </div>
    </div>
</section>

  <section >
       <div class="titulo-wrapper color-titilo-secundario">
           <h3 class="semi-bold">Eventos</h3>
           <div class="titulo-border"></div>
       </div>
       <div class="eventos-front">
         <?php eventos_front(2);
             $evento = get_page_by_title('Eventos');
         ?>                  
        </div> 
        <h3 class="center titulo"> <a href="<?php the_permalink($evento->ID);?>" class="btn btn-grueso background-boton">Ver Más</a></h3>
   
  </section>

  


 


<?php get_footer();?>