<?php get_header();
  
  echo get_post_meta( get_the_ID(), 'test',true );
  while(have_posts()): the_post();
  $imagenes = get_post_meta( get_the_ID(), 'uploader_imagen', true );
?>


<div class="container">
    <section class="row producto-principal-single">
                    <div class="wrappers-single">
                       <h3><?php the_title();?></h3>
                       <p>
                           <?php the_content();?>
                       </p>
                       <a href="<?php the_field('subir_archivo')?>" class="btn">Descargar pdf <?php the_title(); ?></a>
                    </div>
                    <div class=" product-destacado-single swiper-container kervis-slider">
                        <div class="swiper-wrapper">
                                <?php foreach($imagenes as $imagen): ?>
                                     <div class="swiper-slide">
                                          <img src="<?php echo $imagen?>" alt="">
                                     </div>
                                <?php endforeach ;?>  
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    
    </section>
    <h3 class="center">Beneficios y caracteristicas</h3>
    <?php $beneficios = get_post_meta( get_the_ID(), 'blog_group', true );?>
    <section class="row">
    <?php foreach($beneficios as $beneficio):?>
        <div class="card card-single">
            <div class="img-product-single">
                 <img src="<?php echo $beneficio[image];?>" alt="">
            </div>
            <div class="contenido-single">
                <h5><?php echo $beneficio[title];?></h5>
                <p><?php echo $beneficio[description];?></p>
            </div>
        </div>
    <?php endforeach;?>
    </section>
</div>
<?php endwhile;?>
<?php get_footer();?>