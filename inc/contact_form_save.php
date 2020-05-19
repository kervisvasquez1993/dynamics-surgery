<?php 
add_action('init', 'contact_form_save');
function contact_form_save(){
    
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_contact_form'])):
        global $wpdb;
        $name = sanitize_text_field($_POST['nombrecompleto']);
        $email = sanitize_text_field($_POST['email']);
        $phone = sanitize_text_field($_POST['telefono']);
        $mensaje = sanitize_text_field($_POST['mensaje']);

        $table = $wpdb->prefix.'contacto';
        
        $form_data = array(
            'nombrecompleto' => $name,
            'email' => $email,
            'telefono' => $phone,
            'mensaje' => $mensaje
        );
        $form_formats =array('%s','%s','%s','%s','%s');
        $wpdb->insert($table, $form_data, $form_formats);
        $url = get_page_by_title('gracias'); // obtener la pagina por el titulo
        wp_redirect(get_permalink($url->ID));
        exit();
    endif;

}