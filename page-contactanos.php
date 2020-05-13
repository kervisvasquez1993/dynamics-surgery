<?php get_header();?>
<?php while(have_posts()): the_post();?>
        <div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
           <h2 class="center">Titulo Dynamics surgery </h2>
        </div>
<?php endwhile;?>
<div class="container">
        <div class="row contactanos-header">
            <div class="w-50">
               
                <h5>Email-Telefono-redes sociales</h5>
                <div class="iconos-internos-wrapper">
                    <div class="align-icon">
                         <i class="material-icons p-0-5 color-principal">mail</i> <span class="nombres-contact">info@gmail.com</span>
                    </div>
                    <div class="align-icon">
                         <i class="material-icons p-0-5 color-principal">call</i> <span class="nombres-contact">+584244444161</span>
                    </div>
                    <div class="align-icon">
                         <i class="material-icons p-0-5 color-principal">search</i> <span class="nombres-contact">@dynamicssurgery</span>
                    </div>
                </div>
              
            </div>
            <div class="w-50  b-r">
                 <h5 class="p-0-50 ">Dirección</h5>
                 <div class="contact-iconos">
                    <i class="material-icons p-0-5 color-principal">place</i>
                    <p>Lorem ipsum, dolor sit ametoluptates reiciendis exercitationem dolores culpa, dignissimos laudantium voluptatum! Id, velit.</p>
                 </div> 
            </div>
        </div>
        <div class="row comunicate">
            <h3>COMUNÍCATE CON NOSOTROS</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis quaerat modi saepe ipsum sed vitae quibusdam, unde voluptatum dolore veritatis, repudiandae provident ab. Placeat amet libero, et molestiae incidunt consectetur?</p>
        </div>
        <form class="row  formulario">
            <div class="col s12 ">
              <div class="row">
                <div class="input-field col s12 m4">
                  <i class="material-icons prefix">perm_identity</i>
                  <input type="text" id="autocomplete-input" class="autocomplete">
                  <label for="autocomplete-input">Nombre Completo</label>
                </div>
                <div class="input-field col s12 m4">
                  <i class="material-icons prefix">email</i>
                  <input type="text" id="autocomplete-input" class="autocomplete">
                  <label for="autocomplete-input">Email</label>
                </div>
                <div class="input-field col s12 m4">
                  <i class="material-icons prefix">phone</i>
                  <input type="text" id="autocomplete-input" class="autocomplete">
                  <label for="autocomplete-input">Teléfono</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">textsms</i>
                  <textarea id="textarea1" class="materialize-textarea"></textarea>
                  <label for="textarea1">Mensaje</label>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-form">
        </form>
        
</div>
<?php get_footer()?>