<aside class="col s12 m4 red">
    <?php 
        if(!is_active_sidebar( 'sidebar_widget' )){
            return;
        }
        dynamic_sidebar('sidebar_widget');
    ?>                
                
</aside>