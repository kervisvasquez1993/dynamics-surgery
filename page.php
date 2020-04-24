<?php get_header();?>
<?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
           <h2 class="center">Titulo Dynamics surgery </h2>
        </div>
<?php endwhile;?>
<div class="container">
        <div class="menu-interno">
           <a href="#">Inicio</a>
           <a href="#">Productos</a>
        </div>

        <h1 class="titulo-nosotros">SOBRE NOSOTROS</h1>
        
        <section class="parent-quienes-somos">
            <div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, ea deleniti? Rerum temporibus quisquam nesciunt nemo porro unde ad, perspiciatis suscipit numquam consectetur doloremque, ut repellendus quae atque ipsa odio!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, ea deleniti? Rerum temporibus quisquam nesciunt nemo porro unde ad, perspiciatis suscipit numquam consectetur doloremque, ut repellendus quae atque ipsa odio!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, ea deleniti? Rerum temporibus quisquam nesciunt nemo porro unde ad, perspiciatis suscipit numquam consectetur doloremque, ut repellendus quae atque ipsa odio!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, ea deleniti? Rerum temporibus quisquam nesciunt nemo porro unde ad, perspiciatis suscipit numquam consectetur doloremque, ut repellendus quae atque ipsa odio!</p>
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
                <img src="<?php echo get_template_directory_uri();?>/img/columna.jpg" alt="">
            </div>
            <div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, ea deleniti? Rerum temporibus quisquam nesciunt nemo porro unde ad, perspiciatis suscipit numquam consectetur doloremque, ut repellendus quae atque ipsa odio!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, ea deleniti? Rerum temporibus quisquam nesciunt nemo porro unde ad, perspiciatis suscipit numquam consectetur doloremque, ut repellendus quae atque ipsa odio!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, ea deleniti? Rerum temporibus quisquam nesciunt nemo porro unde ad, perspiciatis suscipit numquam consectetur doloremque, ut repellendus quae atque ipsa odio!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, ea deleniti? Rerum temporibus quisquam nesciunt nemo porro unde ad, perspiciatis suscipit numquam consectetur doloremque, ut repellendus quae atque ipsa odio!</p>
             
            </div>

        </section>

</div>

<?php get_footer()?>