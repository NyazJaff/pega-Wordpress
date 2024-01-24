<?php
/**
 * The template for displaying author pages
 *
 */
get_header(); ?>

<main class="page-wrap">
    <div class="preacher-box-title">
        <div>
            <h1><?php echo get_the_author() ; ?></h1>
            <div>
                شۆین
                <?php the_field('location_mamosta', 'user_'. get_queried_object_id()); ?>
            </div>
        </div>
    </div>
    <div class="scholar-about-content">
       <?php the_field('description_mamosta', 'user_'. get_queried_object_id()); ?></div>

       <header class="preacher-info-header">
        <ul class="social-actions inline">
            <li><a  href="<?php the_field('fb_url', 'user_'. get_queried_object_id()); ?>" class="facebook">مشاركة مع فيسبوك</a></li>
            <li><a  href="<?php the_field('yu_url', 'user_'. get_queried_object_id()); ?>" text="محمد آدم الإتيوبي" class="twitter">مشاركة مع تويتر</a></li>
        </ul>

    </header>
    <div class="main-and-aside">
        <div class="preacher-content">



<!----------------------------------------------  Ktep Section --------------------------------- -->
  <!-- loop name & nembar -->
<div class="main-section-tabs">
    <div class="tab-button active">
        <a href="#" class="no-gradient i-collections">
            وانه‌ |

            <?php  // Zhmaray wanakan
                $args = array(
                    'post_type' =>
            get_field('post_type_author', 'user_'. get_queried_object_id()), 'tax_query' => array( array( 'taxonomy' => get_field('post_type_author', 'user_'. get_queried_object_id()), 'field' => 'slug', 'terms' =>
            get_field('post_type_category', 'user_'. get_queried_object_id()) ) ), 'orderby' => 'date', 'post_status' => 'publish', 'order' => 'DESC', 'posts_per_page' => -1 ); $count_posts = get_posts( $args ); $total_posts =
            count($count_posts); echo $total_posts; ?>
        </a>
    </div>
    <div class="tab-button"></div>
    <div class="tab-item"></div>
</div>

 <!-- loop post ktep -->
<div class="series">
    <?php  // Ktep ----- wanakan
                           $args = array(
                              'post_type' =>
    get_field('post_type_author', 'user_'. get_queried_object_id()), 'tax_query' => array( array( 'taxonomy' => get_field('post_type_author', 'user_'. get_queried_object_id()), 'field' => 'slug', 'terms' => get_field('post_type_category',
    'user_'. get_queried_object_id()) ) ), 'orderby' => 'date', 'post_status' => 'publish', 'order' => 'DESC', 'posts_per_page' => -1 ); $the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <article class="series-card">
        <div class="series-main">
            <header>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
            </header>
            <small class="growth"><?php if(function_exists('subh_set_post_view')) { subh_set_post_view(get_the_ID()); } echo getPostViews(get_the_ID()); ?></small>
        </div>
        <div class="video-cover list">
            <a href="<?php the_permalink(); ?>" class="no-gradient">
                <div class="view-playlist">
                    <span class="vid-num"><?php the_field('zhmaray_wanakan'); ?></span>
                </div>
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/collections.jpg" data-src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/collections.jpg" alt="<?php the_title(); ?>" class="cover entry-img" />
            </a>
        </div>
    </article>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
<!---------------------------------------------- End Ktep Section --------------------------------- -->



</div>

<aside class="sidebar">
   <div class="sticky-side">
        <div class="sidebar-box">
            <div class="box-title">بانگخوازان</div>
            <div class="box-content">
                <ul>
                    <li>
                        <a href="#">دكتۆر نه‌ریمان</a>
                    </li>
                    <li>
                        <a href="#">مامۆستا ظابیر </a>
                    </li>
                    <li>
                        <a href="#">مامۆستا احمد</a>
                    </li>
                    <li>
                        <a href="#">مامۆستا محمد</a>
                    </li>
                    <li>
                        <a href="#">مامۆستا هاوڕێ</a>
                    </li>
                    <li>
                        <a href="#">مامۆستا ژیار</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>                                  
  </div>

</main>
<?php get_footer(); ?>
