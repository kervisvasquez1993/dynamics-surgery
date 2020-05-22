<?php 
  get_header();
?>
<div class="img-hero2" style="background:url('<?php echo get_template_directory_uri();?>/img/columna.jpg?>');">
    <h2 class="center color-font-header texto-center"><?php the_field('titulo_cabecera');?></h2>
</div>
<?php get_template_part( 'template-parts/menu', 'interno' );?>

        <section class="container">
           <div class="row wrapper-card">
           <?php while(have_posts()):the_post();?>  
                <div class="col xl3 l4 m6 s12"> 
                  <div class="">
                      <div class="card">
                          <div class="card-image">
                                <?php 
                                  the_post_thumbnail( 'mediano', array('class' => 'img-fluid') );
                                ?>
                          </div>
                      </div>
                      <div class="constent-card">
                         <a href="<?php the_permalink(); ?>">
                                <span class="card-title-flex">
                                    <span class="raya"></span>
                                    <p class="titulo-product"><?php the_title();?></p>
                                </span>
                         </a>
                         <p class="muestra-content">
                             <?php the_excerpt(); ?>
                         </p>
                         
                      </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
           </div>
        </section>
  </div>


<?php get_footer();?>