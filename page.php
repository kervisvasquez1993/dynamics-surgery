<?php get_header();?>
<?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
           <h2 class="center"><?php the_field('contenido_cabecera');?></h2>
        </div>
        
<?php get_template_part( 'template-parts/menu', 'interno' );
        t
?>
<div class="container">
            <h4 class="titulo-nosotros"><?php the_field('sub_titulo');?></h4>
        
        <section class="parent-quienes-somos">
            <div>
                <?php the_content();?>
            </div>
            <div class="iconos-nosotros">
            <?php $iconos = get_post_meta( get_the_ID(), 'blog_group', true );
                     foreach($iconos as $icono):?>
                <div class="iconos-nosotros-hijos">
                   <img class="iconos-nosotros" src="<?php echo $icono[image]?>" >
                   <div class="description-icon">
                       <h6><?php echo $icono[title];?></h6>
                       <p><?php echo $icono[description];?></p>
                    </div>
                </div>
                   <?php
                    endforeach;
                    ?>
            </div>
            <div>
                <img src="<?php the_field('imgen_evento');?>" alt="">
            </div>
            <div class="content-adicional-nosotros">
                
                <?php the_field('contenido_eventos');?>
                <a href="" class="btn btn-leer-mas">LEER MAS SOBRE </a>
             
            </div>

        </section>

</div>
<?php 
    $enlaces = get_permalink( 11,true);
    echo($enlaces);
    ?>
    <a href="<?php $enlaces?>"> hola</a>

<?php endwhile;?>

<?php get_footer()?>