<?php 
  /* Template Name: divisiones*/
  get_header();
   
?>
<div class="img-hero" style="background:url('<?php echo get_the_post_thumbnail_url();?>');">
   <h2 class="center">Titulo Dynamics surgery </h2>
</div>
<?php get_template_part( 'template-parts/menu', 'interno' );
   
?>
<?php echo get_term_meta( get_the_ID(), 'yourprefix_term_avatar',true )?>
<section class="container">
   <div class="flex-category">
       <?php require_once dirname( __FILE__ ).'/template-parts/list-category-padre.php';?>
   </div>
</section>

<?php get_footer();?>