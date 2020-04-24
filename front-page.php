<?php
 get_header();
?>
<div class="imagen-destacada">
    <?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
           
                <h2 class="center">Titulo Dynamics surgery </h2>
           
        </div>

    <?php endwhile;?>
</div>
</header>
<div class="container">
    <div class="row">
        <h1 class="center">Este es el titulo de nuestra web</h1>
    </div>
</div>
<div class="container">
    <div class="section">

<!--   Icon Section   -->
<div class="row">
  <div class="col s12 m4">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
      <h5 class="center">Speeds up development</h5>

      <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
    </div>
  </div>

  <div class="col s12 m4">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
      <h5 class="center">User Experience Focused</h5>

      <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
    </div>
  </div>

  <div class="col s12 m4">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
      <h5 class="center">Easy to work with</h5>

      <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
    </div>
  </div>
</div>

</div>
</div>
<br><br>


<section class="section  blue texto-important no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis laboriosam qui repudiandae cumque tenetur dolor odit fugit. Ratione praesentium ex molestias nesciunt odio. Sunt eius eum architecto voluptatem recusandae error!</h5>
        </div>
      </div>
</section>
<section class="section container no-pad-bot ">
      
        <div class="row producto-principal ">
            <div class="wrappers ">
              
                <h3 class="center">Titulo del producto</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus incidunt ullam, repellendus mollitia veniam modi id assumenda saepe harum, quo non repudiandae tenetur omnis, dolor iure magnam laboriosam inventore at.
                </p>
                <a href="#" class="btn ">LLER MAS</a>

            </div>
            <div class= "product-destacado">
                <img src="<?php echo get_template_directory_uri();?>/img/test.jpg" alt="">
        
            </div>
        </div>
        
</section>
<img src="<?php echo get_template_directory_uri();?>/img/prueba1.jpeg">
<div class="carousel">
    <a class="carousel-item" href="#one!"></a>
    <a class="carousel-item" href="#two!"><img src="<?php echo get_template_directory_uri();?>/img/prueba1.jpeg"></a>
    <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/350/230/"></a>
    <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/350/230/"></a>
    <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/350/230/"></a>
  </div>
      
  <section >
       <h3 class="center titulo">Eventos</h3>
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
        <h3 class="center titulo"> <a href="#" class="btn">Ver mas</a></h3>
   
  </section>

                          

<?php get_footer();?>