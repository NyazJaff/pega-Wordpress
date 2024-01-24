<?php 
// Java scripts & style.css File -------------------
 function peg_add_styles()
  {
   // wp_enqueue_style('style-css', get_template_directory_uri() . '/inc/css/name.css');

   wp_enqueue_style('1', get_template_directory_uri() . '/inc/css/main.css');
   wp_enqueue_style('2', get_template_directory_uri() . '/inc/css/midad-audio-player-custom.css');
   wp_enqueue_style('3', get_template_directory_uri() . '/inc/css/midad-audio-player.css');  
   wp_enqueue_style('4', get_template_directory_uri() . '/inc/css/owl.css');
   wp_enqueue_style('5', get_template_directory_uri() . '/inc/css/photoswipe.css');
   wp_enqueue_style('6', get_template_directory_uri() . '/inc/css/photoswipe-skin.css');
   wp_enqueue_style('7', get_template_directory_uri() . '/inc/css/player.css');
   wp_enqueue_style('8', get_template_directory_uri() . '/inc/css/site-numbers.css');
   wp_enqueue_style('99', get_template_directory_uri() . '/inc/fonts/pega-font.css');
   wp_enqueue_style('style', get_template_directory_uri() . '/inc/fonts/style.css');


   } add_action('wp_enqueue_scripts', 'peg_add_styles');





 // js link -------------------
 function peg_add_scripts() 
    {
   // wp_enqueue_script('1', get_template_directory_uri() . '/inc/css/name.js' , array(), false, true);
   wp_enqueue_script('1q', get_template_directory_uri() . '/inc/js/0.js' , array(),   false, true);
   wp_enqueue_script('2ee', get_template_directory_uri() . '/inc/js/book-single.js' , array(),   false, true);
   wp_enqueue_script('3sd', get_template_directory_uri() . '/inc/js/collection-play.js' , array(),   false, true);
   wp_enqueue_script('4xc', get_template_directory_uri() . '/inc/js/coqmment.js' , array(),   false, true);
   wp_enqueue_script('5xc', get_template_directory_uri() . '/inc/js/contact-us.js' , array(),   false, true);
   wp_enqueue_script('6vf', get_template_directory_uri() . '/inc/js/jquery.js' , array(),   false, true);

   wp_enqueue_script('7c', get_template_directory_uri() . '/inc/js/midad-audio-player.js' , array(),   false, true);
   wp_enqueue_script('8ee', get_template_directory_uri() . '/inc/js/owl-carousel.js' , array(),   false, true);
   wp_enqueue_script('9fs', get_template_directory_uri() . '/inc/js/photoswipe-m.js' , array(),   false, true);

   wp_enqueue_script('10sc', get_template_directory_uri() . '/inc/js/recitation.js' , array(),   false, true);
   wp_enqueue_script('11se', get_template_directory_uri() . '/inc/js/report-error-data-form.js' , false, true);
   wp_enqueue_script('12scs', get_template_directory_uri() . '/inc/js/runtime.js' , array(),   false, true);
   wp_enqueue_script('13t', get_template_directory_uri() . '/inc/js/scholar.js' , array(),   false, true);
   wp_enqueue_script('14g', get_template_directory_uri() . '/inc/js/scholar-data-form.js' , array(), false, true);
   wp_enqueue_script('14df', get_template_directory_uri() . '/inc/js/socialShare.js' , array(),   false, true);
   wp_enqueue_script('14vxv', get_template_directory_uri() . '/inc/js/socialShareBookReader.js' , array(),   false, true);

   wp_enqueue_script('14v1xv', get_template_directory_uri() . '/inc/js/0.5d3a10c2.js' , array(),   false, true);
   wp_enqueue_script('3123', get_template_directory_uri() . '/inc/js/jquery.3ac48935.js' , array(),   false, true);
   wp_enqueue_script('434', get_template_directory_uri() . '/inc/js/runtime.b82e9a70.js' , array(),  false, true);



    } add_action('wp_enqueue_scripts', 'peg_add_scripts');
