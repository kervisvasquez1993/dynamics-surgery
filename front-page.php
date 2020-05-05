<?php
 get_header();
?>
<div class="imagen-destacada">
    <?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
           
                <h2 class="center color-font-header">Titulo Dynamics surgery </h2>
                
        </div>

    <?php endwhile;?>
</div>
</header>
<div class="container">
    <div class="row">
        <h1 class="center">Este es el titulo de nuestra web</h1>
    </div>
</div>
<?php get_template_part('template-parts/icono','front');?>
<br><br>


<section class="section  background-principal texto-important no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis laboriosam qui repudiandae cumque tenetur dolor odit fugit. Ratione praesentium ex molestias nesciunt odio. Sunt eius eum architecto voluptatem recusandae error!</h5>
        </div>
      </div>
</section>
<section class="section container no-pad-bot ">
      
        <div class="row producto-principal ">
             <?php producto_destacado(1);?>
        </div>
        
</section>



      
  <section >
       <h3 class="center titulo color-titilo-secundario">Eventos</h3>
       <div class="eventos-front">
                    
                <div class="card-dynamics">
                     <div class="card">
                       <div class="card-image">
                         <img src="<?php echo get_template_directory_uri();?>/img/test.jpg">
                       </div>
                       <div class="card-content">
                          <span class="card-title">Card Title</span>
                           <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                       </div>
                     </div>
                </div>

               <div class="card-dynamics ">
                     <div class="card">
                       <div class="card-image">
                         <img src="<?php echo get_template_directory_uri();?>/img/test.jpg">
                       </div>
                       <div class="card-content">
                          <span class="card-title">Card Title</span>
                           <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                       </div>
                     </div>
               </div>
                  
        </div> 
        <h3 class="center titulo"> <a href="#" class="btn background-boton">Ver mas</a></h3>
   
  </section>

                          

<?php get_footer();?>