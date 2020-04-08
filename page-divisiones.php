<?php 
  /* Template Name: divisiones*/
  get_header();
  $query = new WP_Query( array( 'post_type' => 'divisiones','posts_per_page' => -1 ) );
?>

    <img src="<?php echo get_the_post_thumbnail_url();?>" class="img-fluid" alt="">


<?php get_footer();?>