<?php 
add_action('init', 'contact_form_save');
function contact_form_save(){
    if($_SAVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_contact_form'])):
        global $wpdb;
        $name = sanitize_text_field($_POST['nombrecompleto']);
        $email = sanitize_text_field($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $mensaje = sanitize_text_field($_POST['mensaje']);

        $table = $wpdb->prefix.'contact_form';
        $form_data = array();
        $wpdb->insert($table, $form_data, $form_formats);
    endif;

}