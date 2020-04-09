<?php 
  /* Template Name: divisiones*/
  get_header();
  $query = new WP_Query( array( 'post_type' => 'divisiones','posts_per_page' => -1 ) );
 
?>
<?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
           <h2 class="center">Titulo Dynamics surgery </h2>
        </div>
         <?php endwhile;
          /*while($query->have_posts()):$query->the_post(); */
         ?>

   <div class="container">
        <div class="menu-interno">
           <a href="#">Inicio</a>
           <a href="#">Productos</a>
        </div>
        <section class="header-productos">
          <header class="center">
              <h3>Conoce nuestras lineas</h3>
              <p>lorem ipsup lorem ipsuplorem ipsup lorem ipsuplorem ipsuplorem ipsuplorem ipsup</p>
          </header>
        </section>

        <section class="row wrapper-card">
          <div class="col xl3 l4 m6 s12"> 
            <div class="card">
              <div class="card-image">
                 <img src="images/sample-1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
           </div>
           </div>
           <div class="col xl3 l4 m6 s12"> 
            <div class="card">
              <div class="card-image">
                 <img src="images/sample-1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
           </div>
           </div>
           <div class="col xl3 l4 m6 s12"> 
            <div class="card">
              <div class="card-image">
                 <img src="images/sample-1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
           </div>
           </div>
           <div class="col xl3 l4 m6 s12"> 
            <div class="card">
              <div class="card-image">
                 <img src="images/sample-1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
           </div>
           </div>
           <div class="col xl3 l4 m6 s12"> 
            <div class="card">
              <div class="card-image">
                 <img src="images/sample-1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
           </div>
           </div>
           <div class="col xl3 l4 m6 s12"> 
            <div class="card">
              <div class="card-image">
                 <img src="images/sample-1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
           </div>
           </div>
           <div class="col xl3 l4 m6 s12"> 
            <div class="card">
              <div class="card-image">
                 <img src="images/sample-1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
           </div>
           </div>
           <div class="col xl3 l4 m6 s12"> 
            <div class="card">
              <div class="card-image">
                 <img src="images/sample-1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title">Card Title</span>
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
           </div>
           </div>
          
         </section>

   
   
   
   </div>


<?php
  /*endwhile;*/
get_footer();?>