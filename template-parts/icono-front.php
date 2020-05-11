<?php
 /**
     * Template Name: eventos
    
     */
    $iconos = get_post_meta( get_the_ID(), 'blog_group', true );
?>

<!--   Icon Section   -->
<div class="container">
    <div class="section">
<!--   Icon Section   -->
       <div class="row">
       <?php foreach($iconos as $icono):?>
         <div class="col s12 m4 ">
           <div class="icon-block">
             <img class="icono-imagen" src="<?php echo $icono[image]?>">
             <h5 class="center color-titulos"><?php echo $icono[title]?></h5>
             <p class="light center"><?php echo $icono[description] ?></p>
           </div>
         </div>
         <?php endforeach;?>
       </div>
     </div>
</div>