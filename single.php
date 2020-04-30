<?php get_header();
  
  echo get_post_meta( get_the_ID(), 'test',true );
  while(have_posts()): the_post();
?>


<div class="container">
    <section class="row producto-principal-single">
                <div class="wrappers-single ">
                  
                    <h3><?php the_title();?></h3>
                    <p>
                        <?php the_content();?>
                    </p>
                    <a href="#" class="btn ">Descargar Brochure</a>
    
                </div>
                <div class= "product-destacado-single">
                    <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') )?>
                </div>
    </section>
    <h3 class="center">Beneficios y caracteristicas</h3>
    <section class="row">
        
            <div class="card card-single">
                <img src="<?php echo get_template_directory_uri();?>/img/columna.jpg" alt="">
                <div class="contenido-single">
                    <h5>ES RESISTENTE Y PUEDE SER SATURADO O CORTADO SIN DESHIDRATARSE</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quia, natus provident animi pariatur earum nemo beatae! Eos voluptate magni facilis impedit, neque veniam perferendis voluptatum consequatur blanditiis! Aspernatur, laudantium?</p>
                
            </div>
        </div>
        <div class="card card-single">
                <img src="<?php echo get_template_directory_uri();?>/img/columna.jpg" alt="">
                <div class="contenido-single">
                    <h5>ES RESISTENTE Y PUEDE SER SATURADO O CORTADO SIN DESHIDRATARSE</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quia, natus provident animi pariatur earum nemo beatae! Eos voluptate magni facilis impedit, neque veniam perferendis voluptatum consequatur blanditiis! Aspernatur, laudantium?</p>
                
            </div>
        </div>
        <div class="card card-single">
                <img src="<?php echo get_template_directory_uri();?>/img/columna.jpg" alt="">
                <div class="contenido-single">
                    <h5>ES RESISTENTE Y PUEDE SER SATURADO O CORTADO SIN DESHIDRATARSE</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quia, natus provident animi pariatur earum nemo beatae! Eos voluptate magni facilis impedit, neque veniam perferendis voluptatum consequatur blanditiis! Aspernatur, laudantium?</p>
                
            </div>
        </div>
    
    </section>
</div>
<?php endwhile;?>
<?php get_footer();?>