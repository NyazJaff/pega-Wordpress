<?php get_header(); ?>

<?php
if (have_posts()) :
   while (have_posts()) : ?>
     <h3><?php the_post(); ?></h3>
 <?php  endwhile;
endif;

?>


<?php get_footer(); ?>