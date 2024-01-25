            <?php
            /**
            * Template Name: Home page
            *
            */
            get_header(); ?>

            <div class="quran-series">
                <div class="section-box">
                    <h1 class="box-title">سیلسله‌ وانه‌كان</h1>
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
                        <div id="mushafs">
                            <div class="series">
                                <?php $args = array(
                                    'post_type' => 'ktep',
                                    'posts_per_page' => 6,
                                         'order' => 'DESC', // ASC
                                     );
                                     $the_query = new WP_Query( $args ); ?>
                                     <?php if ( $the_query->have_posts() ) :  
                                         while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="" style=" background: #f7f7f7; padding: 9px; border-radius: 10px; ">
                    <div class="series-main">
                        <header>
                            <h3>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </header>
                        <div class="series-content">
                            <p>
                                <?php the_field('Mamosta_name'); ?>
                            </p>
                        </div>
                        <div>
                            <h2></h2>
                            <small class="growth"><?php echo getPostViews(get_the_ID()); ?></small>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>


        <div class="load-more">
            <a class="load-more-btn" href="<?php echo get_home_url(); ?>/ktep">زیاتر</a>
        </div>
</div>

<!-- Quran Section -->
<div class="quran-series">
    <div class="section-box">
        <h1 class="box-title">قورئانی پیرۆز</h1>
        <div class="section-options">
            <a href="#" id="mushafs-section" class="no-gradient mushafs active">قورئان خۆێنان</a>
            <a href="#" id="surahs-section" class="no-gradient recitations">                                        <?php $jobs = new WP_Query(array( 'post_type' => 'quran' ));?>
            <?php if ($jobs->have_posts()) { 

                $count_posts = wp_count_posts('quran')->publish; 
                if ( $count_posts == "1" ) { 
                    echo "<h2>There is currently one vacancy...</h2>"; }
                    else { echo "<strong> $count_posts</strong>"; }

                } else { ?>
                    <?php } ?>  </a>
                </div>
            </div>
            <div class="series">
                <?php $args = array(
                    'post_type' => 'quran',
                    'posts_per_page' => 6,
                    'order' => 'ASC',
            // 'category_name' => 'muhammd'
            // 'category_name' => $terms = get_field('name_category_mamosta'),
                );
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) :  
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="series-card active">
                            <div class="series-main">
                                <header>
                                    <h3>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </header>
                                <div class="series-content">
                                    <p>
                                        <a>
                                            قورئانی پرۆز
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="mushaf-cover list">
                                <a href="<?php the_permalink(); ?>" class="no-gradient">
                                    <div class="view-playlist">
                                        <span class="vid-num"><?php the_field('quran_nembar'); ?> سوره‌ت</span>
                                    </div>
                                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/quran.jpg"  class="cover" />
                                </a>
                            </div>
                            </div>                                                   <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="load-more">
                        <a class="load-more-btn" href="<?php echo get_home_url(); ?>/quran">زیاتر</a>
                    </div>
                </div>
                <br />
                <!-- End Quran -->











                <!--        <!-- WatsApp - Telgram -->
            <!--                  <div class="embed-section">
            <?php get_template_part('templates/loops/wats-telg'); ?>
            </div>
            <!-- End section -->


            <!-- Ftawa section -->
            <!--                  <div class="embed-section articles">
            <div class="section-box with-see-all">
            <div class="box-title">
            <h2 class="home-section-title"><a href="https://midad.com/articles">المقالات</a></h2>
            </div>
            <a href="https://midad.com/articles/new">مشاهدة الكل</a>
            </div>
            <?php //get_template_part('templates/loops/fatawa') ?>
        </div>  -->
        <!-- End section -->





        <!-- Muhazara  -->
            <!--                 <div class="embed-section articles">
            <div class="section-box with-see-all">
            <div class="box-title">
            <h2 class="home-section-title"><a href="https://midad.com/lessons">المحاضرات</a></h2>
            </div>
            <a href="https://midad.com/lessons/new">مشاهدة الكل</a>
            </div>
            <?php //get_template_part('templates/loops/muhazara'); ?> 

        </div> -->
        <!-- END Muhazara  -->




        <!-- Maryat-Video -->
        <?php //get_template_part('templates/loops/maryat-video'); ?> 
        <!-- The End Code -->



        <!-- Maryat-Video -->
        <?php //get_template_part('templates/loops/section-youtube'); ?> 
        <!-- The End Code -->









        <?php get_footer(); ?>