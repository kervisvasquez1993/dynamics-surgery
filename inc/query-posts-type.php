<?php
function kervis_query_productos($cantidad = -1)
{
    $args = array(
        'post_type' => 'producto',
        'posts_per_page' => $cantidad

    );

    $productos = new WP_Query($args);
    while( $productos->have_posts()): $productos->the_post(); ?>
            
            <div class="col xl3 l4 m6 s12"> 
              <div class="card">
                  <?php the_post_thumbnail( 'mediano', array('class' => 'card-image') )?>
                  <div class="">
                     <img src="images/sample-1.jpg">
                  </div>
                  <div class="card-content">
                     <span class="card-title"><?php the_title();?></span>
                     <p><?php the_excerpt();?></p>
                  </div>
                </div>
            </div>
    <?php endwhile; wp_reset_postdata();
}