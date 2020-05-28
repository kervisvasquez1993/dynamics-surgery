<div class="container">
        <?php if(!is_page('quienes-somos')):?>

        <div class="menu-interno">
           <a href="<?php echo esc_url(home_url('/'));?>" class="medium black-color">INICIO</a>
           <span class="black-color font-mayor">></span>
           <a href="" class="black-color medium"><?php the_title();?></a>
        </div>

        <?php else: ?>
            <div class="menu-interno2">
               <a href="<?php echo esc_url(home_url('/'));?>" class="black-color medium">INICIO</a>
               <span class="black-color font-mayor">></span>
               <a href="" class="black-color medium"><?php the_title();?></a>
            </div>
                
        <?php endif;?> 
</div>