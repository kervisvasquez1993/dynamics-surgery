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

<header class="header">

                         
                         <!--
                             maquetacion de menu con materialize
// inicio, productos, quines somos, eventos, conactanos

                    -->
                    
<div>          
<nav class="menu-principal white">
      <div class="content-menu">
          <div class="menu-grande nav-wrapper">
            <a href="<?php echo esc_url(home_url('/'));?>" class="logo">
                <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="">
            </a>
          
            <?php
                $args = array('theme_location' => 'header_menu','container' => 'ul','menu_class'=> 'menus-dinamico responsive',);
                wp_nav_menu($args);     
            ?>
          </div>
          
      
          <div class="content-menu2 responsive input-field">
             <div class="search">
                <i class="material-icons align-items">search</i>
             </div>  
            <?php get_search_form();?>
          </div>
     </div>
     <div class="form-mobile ocultar-2">
          <span class="material-icons blue-content boton-cerrar black-color">
              arrow_back
          </span>
          <form role="search" method="get" class="" action="<?php echo home_url( '/' ); ?>">
                <input   type="search" class=" autocomplete"  placeholder="<?php echo esc_attr_x( 'buscar', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
           </form>

            
     </div>
     
     <div class="flex-icono-mobile">
         <a href="#" data-target="slide-out" class="sidenav-trigger mostrar">
             <i class="material-icons black-color">menu</i>
         </a>
         <div class="search-2 align-items">
                <i class="material-icons  black-color">search</i>
         </div>
     </div>
</nav>


  <ul id="slide-out" class="sidenav">
    <?php $args = array('theme_location' => 'header_menu','container' => 'ul','menu_class'=> 'kervis-nav',);  wp_nav_menu($args);         ?>
    
     </div>
  </ul>
  
  </div>


  
                
            


       