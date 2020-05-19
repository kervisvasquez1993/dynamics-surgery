<?php get_header();?>
<?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
        <h2 class="center color-font-header texto-center"><?php the_field('titulo_cabecera');?></h2>
        </div>
<?php endwhile;?>
<div class="container">
        <div class="row contactanos-header">
            <div class="w-50">
               
                <h5 class="color-principal"><?php the_field('titulo_informacion_contacto');?></h5>
                <div class="iconos-internos-wrapper ">
                    <div class="align-icon">
                         <i class="material-icons p-0-5 color-principal">mail</i> <span class=" color-secundario nombres-contact"><?php the_field('correo');?></span>
                    </div>
                    <div class="align-icon">
                         <i class="material-icons p-0-5 color-principal">call</i> <span class="color-secundario nombres-contact"><?php the_field('numero');?></span>
                    </div>
                    <div class="align-icon">
                         <i class="material-icons p-0-5 color-principal">search</i> <span class="color-secundario nombres-contact"><?php the_field('redes_sociales');?></span>
                    </div>
                </div>
              
            </div>
            <div class="b-r"></div>
            <div class="w-50">
                 <h5 class="p-0-50 color-principal"><?php the_field('titulo_direccion');?></h5>
                 <div class="contact-iconos ">
                    <i class="material-icons p-0-5 color-principal">place</i>
                    <p class="color-secundario"><?php the_field('descripcion_direccion');?></p>
                 </div> 
            </div>
        </div>
        <div class="row comunicate">
            <h3 class="color-principal"><?php the_field('eslogan_titulo');?></h3>
            <p class="color-secundario"><?php the_field('eslogan_descripcion');?></p>
        </div>
        <form method="POST" class="row  formulario">
            <div class="col s12 ">
              <div class="row">
                <div class="input-field col s12 m4">
                  <i class="material-icons prefix">perm_identity</i>
                  <input type="text" id="nombre_completo" class="autocomplete" name="nombrecompleto">
                  <label for="nombre_completo">Nombre Completo</label>
                </div>
                <div class="input-field col s12 m4">
                  <i class="material-icons prefix">email</i>
                  <input type="text" id="email" class="autocomplete" name="email">
                  <label for="email">Email</label>
                </div>
                <div class="input-field col s12 m4">
                  <i class="material-icons prefix">phone</i>
                  <input type="text" id="phone_number" class="autocomplete" name="phone">
                  <label for="phone_number">Teléfono</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">textsms</i>
                  <textarea id="textarea1" class="materialize-textarea" name="mensaje"></textarea>
                  <label for="textarea1">Mensaje</label>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-form background-boton" value="enviar">
            <input type="hidden" name="send_contact_form" value="1 ">
        </form>
        
</div>
<?php get_footer()?>