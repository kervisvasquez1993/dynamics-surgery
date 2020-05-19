<?php 
function scripts_admin()
{ 
    wp_register_script('scripts_admin',get_template_directory_uri().'/js/contact_form_admin.js',array('jquery'),'1.0.0', true);
    wp_enqueue_script('scripts_admin');

    // cargar informacion desde php a js
    wp_localize_script(
        'scripts_admin',
        'contact_form',
        array('name' => 'Modulo de Comentario de Contacto','ajax_url' => admin_url('admin-ajax.php'))
    );
}
add_action('admin_enqueue_scripts','scripts_admin');


/*
    todo lo que tiene que ver con las opciones estan en el archivos 
    http://dynamics.surgery.ve/wp-admin/options.php
*/
