<?php 
    /**
     * Template Name: eventos
    */
    get_header();
?>
<?php while(have_posts()): the_post();?>
    <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
       <h2 class="center">Titulo Dynamics surgery </h2>
    </div>
<?php endwhile;?>
<?php get_template_part( 'template-parts/menu', 'interno' ); ?>

  
    <div class="container">
    <h2>Eventos</h2>
    <div class="row">

       <section class=" col s12 m8 ">
        
         <div class="card-padre">
            <div class="card-header">
                <h6> II JORNADA NACIONALES: GINECOLOGIA ONCOLÓGICA</h6>
                <div class="flex">
                    <div class="flex">
                        <p>Fecha:</p> <p>Agosto 2019</p>
                    </div>
                    <div class="flex">
                        <p>Lugar:</p> <p>Hospital kervis vasquez</p>
                    </div>
                </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator"  src="<?php echo get_template_directory_uri();?>/img/test.jpg">
              </div>
            </div>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nemo totam praesentium esse, harum cumque quis facere! Maxime necessitatibus quibusdam nesciunt aspernatur voluptas neque ipsum consequuntur, error nostrum quo rem.
                </p>
                <button class="btn">Ver Más</button>
            </div>
         </div>
         <div class="card-padre">
            <div class="card-header">
                <h6> II JORNADA NACIONALES: GINECOLOGIA ONCOLÓGICA</h6>
                <div class="flex">
                    <div class="flex">
                        <p>Fecha:</p> <p>Agosto 2019</p>
                    </div>
                    <div class="flex">
                        <p>Lugar:</p> <p>Hospital kervis vasquez</p>
                    </div>
                </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator"  src="<?php echo get_template_directory_uri();?>/img/test.jpg">
              </div>
            </div>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nemo totam praesentium esse, harum cumque quis facere! Maxime necessitatibus quibusdam nesciunt aspernatur voluptas neque ipsum consequuntur, error nostrum quo rem.
                </p>
                <button class="btn">Ver Más</button>
            </div>
         </div>
       </section>
    <?php get_sidebar()?>
</div>

</div>
</div>
        
<?php get_footer();?>