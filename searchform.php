<form role="search" method="get" class="flex-seach ocultar" action="<?php echo home_url( '/' ); ?>">
       <input   type="search" class=" autocomplete"  placeholder="<?php echo esc_attr_x( 'buscar', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</form>
