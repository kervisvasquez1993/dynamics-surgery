<?php

function biodynamics_ajuste(){
    add_menu_page('Contactos', 'contacto','administrator','biodynamics_ajuste','contacto_icono','dashicons-id-alt',20);
    
}

add_action('admin_menu','biodynamics_ajuste');

function contacto_icono()
{
    ?>
    <div class="wrap">
        <h1>Contacto</h1>
        <table class="wp-list-table widefat striped">
            <thead>
            <tr>
                <th class="manage-column">ID</th>
                <th class="manage-column">Nombre Completo</th>
                <th class="manage-column">email</th>
                <th class="manage-column">Telefono</th>
                <th class="manage-column">Mensaje</th>
            </tr>

            </thead>

            <tbody>

            <?php
            global $wpdb;
            $contacto = $wpdb->prefix.'contacto';
            $registros = $wpdb->get_results("SELECT * FROM $contacto", ARRAY_A);
            foreach ($registros as $registro){

                ?>

                <tr>
                    <td><?php echo $registro['id'];?></td>
                    <td><?php echo $registro['nombrecompleto'];?></td>
                    <td><?php echo $registro['email'];?></td>
                    <td><?php echo $registro['telefono'];?></td>
                    <td><?php echo $registro['mensaje'];?></td>
                </tr>

            <?php }?>
            </tbody>

        </table>
    </div>
    <?php

}

