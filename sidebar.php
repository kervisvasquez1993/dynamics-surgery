<aside class="col background-sidebar s12 m12 l4">
    <?php 
        if(!is_active_sidebar( 'sidebar_widget' )){
            return;
        }
        dynamic_sidebar('sidebar_widget');
    ?>                
                
</aside>