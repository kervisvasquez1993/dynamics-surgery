<?php 
// cargar cmb2 
require_once dirname( __FILE__ ).'/cmb2.php';
// Cargar los estilos y los script de la pagina
function style(){

    wp_enqueue_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(),'1.0.0'.'all');
    // wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.css',array(),'4','all');
    wp_enqueue_style('style',get_stylesheet_uri());
    // cargar los script de materialize y scripts
    wp_enqueue_script('materialize-js','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(),'1.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js',array(),'1.0.0', true);
    
    }
    
    add_action('wp_enqueue_scripts','style');

    // agregamos soporte al theme 

    function menus(){
        register_nav_menus( array(
            'header_menu' => __('header_menu', 'surgery'),
            'iconos_menu' => __('icono_menu', 'surgery')

        ));
    }
    add_action( 'init', 'menus' );