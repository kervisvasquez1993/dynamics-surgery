<?php 
// Cargar los estilos y los script de la pagina


    function style(){
     
        wp_enqueue_style('materialize','https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(),'1.0.0'.'all');
       // wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.css',array(),'4','all');
        wp_enqueue_style('style',get_stylesheet_uri());
        //wp_enqueue_script('sc6',get_template_directory_uri().'/js/es6.js',array(),'1.0.0',true);

        
        wp_enqueue_script('materialize-js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.jshttps://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('jquery'),'4.2.3',true);
        wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js',array(),'1.0.0', true);

    }

    add_action('wp_enqueue_scripts','style');