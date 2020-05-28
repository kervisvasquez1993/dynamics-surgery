<?php get_header();?>
<?php while(have_posts()): the_post();?>
        <div class="img-hero2" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
        <h2 class="center color-font-header texto-center Bold"><?php the_field('titulo_cabecera');?></h2>
        </div>
        
<?php get_template_part( 'template-parts/menu', 'interno' );
        t
?>
<div class="container">
            <div class="centrar-titulo"> 
                 <h4 class="titulo-nosotros semi-bold titulo-2"><?php the_field('sub_titulo');?></h4>
                 <div class="
                 "></div>
            </div>
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
                <img src="<?php the_field('imgen_evento');
                    $evento = get_page_by_title('Eventos');
                ?>" alt="">
            </div>
            <div class="content-adicional-nosotros">
                
                
                <?php the_field('contenido_eventos');?>
                <a href="<?php the_permalink($evento->ID);?>" class="btn btn-leer-mas">LEER MÁS SOBRE NUESTROS EVENTOS </a>
             
            </div>

        </section>

</div>
<?php endwhile;?>
<?php get_footer()?>