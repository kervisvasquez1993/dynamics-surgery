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
