<?php get_header();?>
<?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
           <h2 class="center"><?php the_field('contenido_cabecera');?></h2>
        </div>
        
<?php get_template_part( 'template-parts/menu', 'interno' );
        t
?>
<div class="container">
            <h1 class="titulo-nosotros"><?php the_field('sub_titulo');?></h1>
        
        <section class="parent-quienes-somos">
            <div>
                <?php the_content();?>
            </div>
            <div class="iconos-nosotros">
                <div class="iconos-nosotros-hijos">
                    <div class="icono">
                      <i class="material-icons">menu</i>
                    </div>
                    <div class="description-icon center">
                            <h6>titulo prueba</h6>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos</p>
                    </div>
                </div>
                <div class="iconos-nosotros-hijos">
                    <div class="icono">
                      <i class="material-icons">menu</i>
                    </div>
                    <div class="description-icon center">
                            <h6>titulo prueba</h6>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos</p>
                    </div>
                </div>
                <div class="iconos-nosotros-hijos">
                    <div class="icono">
                      <i class="material-icons">menu</i>
                    </div>
                    <div class="description-icon center">
                            <h6>titulo prueba</h6>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos</p>
                    </div>
                </div>
                <div class="iconos-nosotros-hijos">
                    <div class="icono">
                      <i class="material-icons">menu</i>
                    </div>
                    <div class="description-icon center">
                            <h6>titulo prueba</h6>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos</p>
                    </div>
                </div>
            </div>
            <div>
                <img src="<?php the_field('imgen_evento');?>" alt="">
            </div>
            <div>
                <?php the_field('contenido_eventos');?>
             
            </div>

        </section>

</div>
<?php endwhile;?>

<?php get_footer()?>