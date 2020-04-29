<?php
function kervis_query_productos($cantidad = -1)
{
    $args = array(
        'post_type' => 'productos',
        'posts_per_page' => $cantidad

    );

    $productos = new WP_Query($args);
    while( $productos->have_posts()): $productos->the_post(); ?>
            
            <div class="col xl3 l4 m6 s12"> 
              <div class="card">
                  
                  <div class="card-image">
                     <?php the_post_thumbnail( 'mediano', array('class' => 'card-image') )?>
                  </div>
                  <div class="card-content">
                     <span class="card-title"><?php the_title();?></span>
                     <p><?php echo excerpt('15'); ?></p>
                  </div>
                </div>
            </div>
    <?php endwhile; wp_reset_postdata();
}
