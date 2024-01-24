<?php
/**
 * The template for displaying pages
 *
 */
get_header(); ?>

<h4 style=" margin: auto; display: contents; " >Home page</h4> 

<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;

?>


<?php get_footer(); ?>