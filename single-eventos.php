    <?php 
        get_header();
        while(have_posts()): the_post();
    ?>
   
    <div class="container">
    <h3>Eventos</h3>
        <div class="single-eventos">
           <div class="content-single">
                <h4><?php the_title();?></h4>
                <p><?php  the_field('extracto_header');?></p>
                <div class= "product-destacado-single">
                   <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') )?>
                </div>
                <?php 
                        $content = get_the_content();
                        echo $content;
                ?>
           <hr>
           <!-- agregamos seccion de widget -->
           <aside class="col">
             <?php if(!is_active_sidebar( 'post_relations' )){return;}
                 dynamic_sidebar('post_relations');
              ?>                
           </aside>
           
       
           </div>
           <div class="sidebar_single">
        <?php get_sidebar();?>
        </div>
    
    
    
    </div></div>

    <?php 
    endwhile;
    get_footer();
    ?>