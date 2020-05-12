<?php
function kervis_query_productos($cantidad = -1)
{
    $args = array(
        'post_type' => 'productos',
        'posts_per_page' => $cantidad

    );

    $productos = new WP_Query($args);
    while( $productos->have_posts()): $productos->the_post(); 
    $link = get_field('link');
    $avatar = get_field('img_category', 'category_'. $link .''); 
    $small_description = get_field('small_description', 'category_'. $link .''); 
    ?>  


            
            <div class="col xl3 l4 m6 s12"> 
              <div class="card">
                  <div class="card-image">
                  <img src="<?php echo $avatar;?>" alt="imagen de la categoría">
                  </div>
                  <div class="card-content">
                     <a href="<?php echo get_category_link($link)?>">
                            <span class="card-title">
                                <?php the_title();?>
                            </span>
                     </a>
                     <p>
                         <?php echo $small_description;?>
                     </p>
                     
                  </div>
                </div>
            </div>
    <?php endwhile; wp_reset_postdata();
}


function kervis_query_eventos($cantidad = -1)
{
    $args = array(
        'post_type' => 'eventos',
        'posts_per_page' => $cantidad

    );
    $eventos = new WP_Query($args);
    while( $eventos->have_posts()): $eventos->the_post();
        ?>

         <div class="card-padre">
            <div class="card-header">
                <h6><?php the_title();?></h6>
                <div class="flex">
                    <div class="flex">
                        <p>Fecha:</p> <p><?php the_field('fecha');?></p>
                    </div>
                    <div class="flex">
                        <p>Lugar:</p> <p><?php the_field('lugar');?></p>
                    </div>
                </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
              <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') )?>
              </div>
            </div>
            <div>
                <p>
                    <?php the_excerpt();?>
                </p>
                <a href="<?php the_permalink();?>" class="btn">Ver Más</a>
            </div>
         </div>
<?php endwhile;

}

function eventos_front($cantidad = -1)
{
    $args = array(
        'post_type' => 'eventos',
        'posts_per_page' => $cantidad
    );

    $eventos_front_page = new WP_Query($args);

    while( $eventos_front_page->have_posts()): $eventos_front_page->the_post();?>
         <div class="card-dynamics">
                     <div class="card">
                       <div class="card-image">
                         <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') );?>
                       </div>
                       <div class="card-content">
                          <span class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></span>
                           <p><?php the_excerpt();?></p>
                       </div>
                     </div>
                </div>
    <?php endwhile;



}

function producto_destacado($cantidad)
{
    $args = array( 'post_type' => 'post', 'posts_per_page' => $cantidad);
    $q = new WP_Query( $args );
    while( $q->have_posts()): $q->the_post();
            ?>
            <div class="wrappers ">
              
                <h3 class="center color-titulos"><?php the_title();?></h3>
                <p>
                    <?php the_excerpt();?>
                </p>
                <a href="<?php the_permalink();?>" class="btn background-boton">LEER MAS</a>

            </div>
            <div class= "product-destacado">
                <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') );?>
        
            </div>
    <?php
    endwhile;
    wp_reset_postdata();
  
 
}



function carousel($cantidad){
    $args= array(
        'post_type' => 'productos',
        'posts_per_page' => $cantidad
    );
    $carousel = new WP_Query( $args );
    while( $carousel->have_posts()): $carousel->the_post();
    $link = get_field('link');
    $avatar = get_field('img_category', 'category_'. $link .''); 
    $small_description = get_field('small_description', 'category_'. $link .''); 
    ?>
        <div class="carousel-item">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo $avatar;?>">
            </div>
            <div class="card-content">
            <span class="card-title"><?php the_title();?></span>
              <p><?php echo $small_description;?></p>
            </div>
            
          </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
  

}
?>


      