<?php
 get_header() ;
 $category = get_category( get_query_var( 'cat' ) );
?>
<div class="img-hero2

" style="background:url('<?php the_field('imagen_cabecera_producto');?>');">
   <h2 class="center">Titulo Dynamics surgery </h2>
</div>
<div class="container">
        <div class="menu-interno">
           <a href="<?php echo esc_url(home_url('/'));?>">Inicio </a>
           <span>></span>
           <?php  $producto = get_page_by_title('Productos');
            $enlace_producto = $producto->ID;
           ?>
           <a href="<?php ($enlace_producto);?>">
              Productos
            </a>
        </div>
</div>
<?php echo get_term_meta( get_the_ID(), 'yourprefix_term_avatar',true )?>
<section class="container">
   <div class="flex-category">
       <div class="category_list">
          <?php require_once dirname( __FILE__ ).'/template-parts/list-category.php';?>
       </div>
        <div class="category_content">
            
             <div class="titulo-wrapper2 color-titilo-secundario">
                <div class="hijo-wrapper">
                  <h5 id="title_Category" data-title="<?php echo $cat2 ?>">
                      <?php echo get_cat_name($cat2);?>
                  </h5>
                  <div class="titulo-border2"></div>
                </div>
             </div>
                <div class="img-category">
                    <?php   //$avatar = get_term_meta( get_queried_object_id(), 'img_category', true );
                           $avatar = get_field('img_category', 'category_'. $cat .''); 
                    ?>
                    <img src="<?php echo $avatar?>" alt="">

                    
                </div>
                <div class="description">
                       <?php echo category_description($cat); ?>
                </div>
                <div>
                   <?php
                     ?>
                </div>
                
                <section class="paddin-vertical">
                    <div class="conatiner-slider">
                        <div class="swiper-container">
                          <div class="swiper-wrapper">
                          <?php while( $the_query->have_posts()): $the_query->the_post();?>
                                <div class="swiper-slide">
                                   <div class="card-personalizado2">
                                       <div class="">
                                           <div class="card-image">
                                           <?php the_post_thumbnail( 'small', array('class' => 'card-img-top') );?>
                                          </div>
                                       </div>
                                 
                                      <a href="<?php the_permalink();?>">
                                        <span class="card-title-flex2">
                                            <p class="titulo-product2"><?php the_title();?></p>
                                        </span>
                                      </a>
                                      
                                   </div>
                                </div>
                               <?php
                               endwhile;
                               wp_reset_postdata();?>
                          </div>
                          <!-- Add Pagination -->
                          
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                        </div>
                      </div>
                   
                 
               </section>
                <!--FIN-->
         </div>
    </div>
</section>

<?php get_footer();?>

