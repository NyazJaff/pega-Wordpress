<?php
/**
 * The template for displaying archive pages
 *
 */


get_header(); ?>
<?php wp_link_pages( 'before=<ul class="page-links">&after=</ul>&link_before=<li class="page-link">&link_after=</li>' ); ?>
<div class="site-wrap">

    <main class="page-wrap">
        <div class="main-and-aside">
            <div>
 <div class="section-box">
                    <h1 class="box-title">زنجیره‌ وانه‌كان</h1>
                    <div class="section-options">
                        <a id="mushafs-section" class="no-gradient mushafs active" style="
                        background-image: url(<?php bloginfo('template_url') ?>/inc/images/audio.svg);
                        ">ڕاڤه‌كردن</a>
                        <a id="surahs-section" class="no-gradient recitations">                                       <?php $jobs = new WP_Query(array( 'post_type' => 'ktep' ));?>
                        <?php if ($jobs->have_posts()) { 

                            $count_posts = wp_count_posts('ktep')->publish; 
                            if ( $count_posts == "1" ) { 
                                echo "<h2>There is currently one vacancy...</h2>"; }
                                else { echo "<strong> $count_posts</strong>"; }

                            } else { ?>
                                <?php } ?> </a>
                            </div>
                 </div>
                <div class="series">
                        <?php $args = array(
                                'post_type' => 'ktep',
                                // 'tax_query' => array(
                                //     array(
                                //         'taxonomy' => 'ktep',
                                //         'field' => 'slug',
                                //         'terms' => 'ktep11'
                                //         )
                                // ),
                                'orderby' => 'date',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'posts_per_page' => -1
                            );
                        $the_query = new WP_Query( $args ); ?>
                        <?php if ( $the_query->have_posts() ) :  
                        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                            <div class="series-card">
                                <div class="series-main">
                                    <header>
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                    </header>
                                    <div class="series-content">
                                        <p>
                                            <a>
                                           <?php the_field('Mamosta_name') ;?>
                                         
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="video-cover list">
                                    <a href="<?php the_permalink(); ?>" class="no-gradient">
                                        <div class="view-playlist">
                                            <span class="vid-num"> 
                                                     <?php  // Zhmaray wanakan
                                                     $cat_id = 1; 
                                                     $args = array( 
                                                                  //  'post_type' => get_post_type('ktep','narimanpost'),
                                                        'post_type' => get_field('post_type'), 
                                                        'tax_query' => array ( 
                                                            array( 'taxonomy' => get_field('post_type') , 
                                                               'field' => 'slug', 
                                                               'terms' => $terms = get_field('category_mamosta') ) ),
                                                        'orderby' => 'date', 
                                                        'post_status' => 'publish', 
                                                        'order' => 'ASC', 
                                                        'posts_per_page' => -1 ); 

                                                     $count_posts = get_posts( $args ); 
                                                     $total_posts = count($count_posts); 
                                                     echo $total_posts; ?>
                                            </span>
                                        </div>
                                         <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/collections.svg" data-src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/collections.svg" alt="<?php the_title(); ?>" class="cover entry-img" />
                                        
                                    </a>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                </div>
<!--                 <div class="load-more">
                    <a class="load-more-btn" href="#">المزيد</a>
                </div> -->
            </div>

            <aside class="sidebar">
                <div class="sticky-side">
                    <div class="sidebar-box">
                        <div class="box-title"><a href="#">زۆرترین بینراو  </a></div>
                        <div class="box-content">
                            <ul>


                  <?php
                   $args = array(
                    'post_type' => 'ktep',
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'posts_per_page' => '10'

                    );
                    $the_query = new WP_Query( $args ); ?>
                    <?php if ( $the_query->have_posts() ) :  
                     while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                                        <li>
                                            <a href="<?php the_permalink(); ?>" class="item-title">
                                                <?php the_title(); ?>
                                            </a>

                                        </li>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                 <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
</div>
<?php get_footer(); ?>
