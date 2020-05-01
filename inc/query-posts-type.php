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
    $productos = new WP_Query($args);
    while( $productos->have_posts()): $productos->the_post(); 
    ?>
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
              <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') )?>
              </div>
            </div>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nemo totam praesentium esse, harum cumque quis facere! Maxime necessitatibus quibusdam nesciunt aspernatur voluptas neque ipsum consequuntur, error nostrum quo rem.
                </p>
                <button class="btn">Ver Más</button>
            </div>
         </div>
<?php endwhile;
}