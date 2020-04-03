<!doctype html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Interwebsite">
    <!--link para imagen en apple-->
    <link rel="apple-touch-icon" href="<?php  echo get_template_directory_uri();?>/img/icono.png">
   <!--fin-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#003663">
    <meta name="application-name" content="Interwebsite">
    <!--link para imagen en el head-->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/icono.png" sizes="200x200">

    <title><?php bloginfo('title');?></title>

    <!--fin-->
<?php wp_head();?>


</head>
<body>

<?php
 /*$args = array(
'menu_class' => 'nav kervis-menu nav-justified flex-column flex-md-row text-center  ',
'container_id' => 'nav_principal',
'container_class' => 'collapse   navbar-collapse justify-content-center  justify-content-lg-end text-uppercase',
'theme_location' => 'header_menu'
             );
                              wp_nav_menu($args);
                         */?>
                         
                         <!--
                             maquetacion de menu con materialize
// inicio, productos, quines somos, eventos, conactanos

                    -->
                    
                    
<nav class="menu-principal">
      <div class="content-menu">
          <div class="menu-grande">
            <a href="<?php echo esc_url(home_url('/'));?>" class="">Logo</a>
          
            <ul id="" class="menus-dinamico responsive">
               <li><a href="sass.html">Inicio</a></li>
               <li><a href="badges.html">Productos</a></li>
               <li><a href="collapsible.html">Quienes Somos</a></li>
               <li><a href="collapsible.html">Eventos</a></li>
               <li><a href="collapsible.html">Contactanos</a></li>
            </ul>
          </div>
          
      
          <div class="content-menu2 responsive input-field">
             <div class="search">
                <i class="material-icons">search</i>
             </div>  
            <?php get_search_form();?>
          </div>
     </div>
     <a href="#" data-target="slide-out" class="sidenav-trigger mostrar">
         <i class="material-icons">menu</i>
     </a>
</nav>


  <ul id="slide-out" class="sidenav">
     <li><a href="sass.html">Inicio</a></li>
     <li><a href="badges.html">Productos</a></li>
     <li><a href="collapsible.html">Quienes Somos</a></li>
     <li><a href="collapsible.html">Eventos</a></li>
     <li><a href="collapsible.html">Contactanos</a></li>
     <div class="content-menu2  input-field">
        <div class="search">
          <i class="material-icons">search</i>
        </div>  
         <?php get_search_form();?>
     </div>
  </ul>
  


            

       