<?php
function surgery_d(){
    global $wpdb;
    global $surgery_dbversiones;
    $surgery_dbversiones = '1';
    $tabla = $wpdb->prefix.'contacto';
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabla (
        id mediumint(9) not null auto_increment,
        nombrecompleto varchar(50) not null,
        email varchar(50) NOT NULL,
        telefono varchar(11) not null, 
        fecha DATATIME not null,
        mensaje varchar(500) not null,
        primary key (id)) $charset; ";

    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    add_option('surgery_dbversiones', $surgery_dbversiones);
    //actualizar en caso de ser necesario

    $version_actual = get_option( 'surgery_dbversiones');
    if($surgery_dbversiones != $version_actual){
        $tabla = $wpdb->prefix.'contacto';

        $sql = "CREATE TABLE $tabla (
        id mediumint(9) not null auto_increment,
        nombrecompleto varchar(50) not null,
        email varchar(50) NOT NULL,
        telefono varchar(11) not null,
        fecha DATATIME not null,
        mensaje longtext(500) not null,
        primary key (id)) $charset; ";
        require_once(ABSPATH. 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        update_option( 'surgery_dbversiones', $surgery_dbversiones );
    }
}

add_action('after_setup_theme', 'surgery_d');




