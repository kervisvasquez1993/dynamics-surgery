    <?php 
        get_header();
        while(have_posts()): the_post();
    ?>
    <h1 class="center">Eventos</h1>
    <div class="container single-eventos">
    <div class="content-single">
        <h4><?php the_title();?></h4>
        <p><?php  the_field('extracto_header');?></p>
        <div class= "product-destacado-single">
            <?php the_post_thumbnail( 'mediano', array('class' => 'card-img-top') )?>
        </div>
        <?php the_content();?>
        <hr>
    
    </div>
    <div class="sidebar_single">
      <?php get_sidebar();?>
    </div>
    </div>

    <?php 
    endwhile;
    get_footer();
    ?>