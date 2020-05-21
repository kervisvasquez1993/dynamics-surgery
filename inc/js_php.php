<?php 

function scripts_category()
{ 
    if(is_category()):
    wp_register_script('scripts_category',get_template_directory_uri().'/js/js_php.js',array('jquery'),'1.0.0', true);
    wp_enqueue_script('scripts_category');
    endif;
    // cargar informacion desde php a js en notacion de objeto
    wp_localize_script(
        'scripts_category', // el id conque se registro el script en wordpress
        'ajax', // nombre del objeto como se va a llamar desde el front end
        array('name' => 'modulo de comunicacion entre php y js','ajax_url' => admin_url('admin-ajax.php')) // parametros que les quisiera mandar
    );
}
add_action('wp_enqueue_scripts','scripts_category');