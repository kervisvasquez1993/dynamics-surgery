<?php get_header();
  
  echo get_post_meta( get_the_ID(), 'test',true );
  echo "hola";
?>


<div class="container">
    <section class="row producto-principal-single">
                <div class="wrappers-single ">
                  
                    <h3>Titulo del producto</h3>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus incidunt ullam, repellendus mollitia veniam modi id assumenda saepe harum, quo non repudiandae tenetur omnis, dolor iure magnam laboriosam inventore at.
                    </p>
                    <a href="#" class="btn ">Descargar Brochure</a>
    
                </div>
                <div class= "product-destacado-single">
                    <img src="<?php echo get_template_directory_uri();?>/img/test.jpg" alt="">
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
<?php get_footer();?>