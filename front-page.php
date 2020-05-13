<?php
 get_header();
?>
<div class="imagen-destacada">
    <?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
           
                <h2 class="center color-font-header"><?php the_field('titulo_cabecera');?></h2>
                
        </div>

    <?php endwhile;?>
</div>
</header>
<div class="container">
    <div class="row">
        <h4 class="center"><?php the_field('titulo_slogan');?></h4>
    </div>
</div>
<?php get_template_part('template-parts/icono','front');?>
<br><br>


<section class="section  background-principal texto-important no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light color-white"><?php the_content();?></h5>
        </div>
      </div>
</section>
<section class="section container no-pad-bot ">
      
        <div class="row producto-principal ">
             <?php producto_destacado(1);?>
        </div>
        
</section>

<div class="conatiner-slider">
  <div class="swiper-container">
    <div class="swiper-wrapper">
       <?php carousel(-1); ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</div>

<!--
<section class="conatiner slider_style">
        <div class="row">
            <div class="col s12">
                <h1 class="center">Lorem, ipsum dolor.</h1>
                <div class="carousel center-align carousel-slider">
                    <?php carousel(-1);?>
                </div>
            </div>
        </div>
    </section>
-->  
  <section >
       <h3 class="center titulo color-titilo-secundario">Eventos</h3>
       <div class="eventos-front">
         <?php eventos_front(2);
         $evento = get_page_by_title('Eventos');

         ?>                  
        </div> 
        <h3 class="center titulo"> <a href="<?php the_permalink($evento->ID);?>" class="btn background-boton">Ver masss </a></h3>
   
  </section>

                          

<?php get_footer();?>