        <?php get_header(); ?>

        <div class="header-container"></div>
        <div class="site-wrap">
            <nav aria-label="breadcrumbs">
                <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="<?php echo get_home_url(); ?>/ktep" class="" itemprop="item">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/home.svg" alt="عودة إلى الصفحة الرئيسية" />
                            <span hidden itemprop="name">home</span>
                            <meta itemprop="position" content="1" />
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="" itemprop="item">
                            <span itemprop="name">ڕاڤه‌كردن </span>
                            <meta itemprop="position" content="1" />
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="" itemprop="item">
                            <span itemprop="name"><?php the_field('mamosta_name_single_wana'); ?></span>
                            <meta itemprop="position" content="1" />
                        </a>
                        <meta itemprop="position" content="3" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="" class="is-active" itemprop="item">
                            <span itemprop="name"><?php the_field('ktep_name'); ?>  </span>
                            <meta itemprop="position" content="1" />
                        </a>
                        <meta itemprop="position" content="4" />
                    </li>
                </ul>
            </nav>


            <main class="page-wrap">
                <div class="main-and-aside">
                    <div class="audio-series-wrap">
                        <div class="audio-header">
                            <div class="audio-title">
                                <h1><?php  the_title(); ?></h1>
                                <p class="scholars">
                                    <a href="#">
                                        <?php //the_field('mamosta_name_single_wana');?>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="midad-player-main-container">
                            <div class="midad-player-container">
                                <div
                                id="player-937116"
                                data-playerid="937116"
                                class="audioplayer-tobe button-aspect-noir--filled is-single-player"
                                data-type="audio"
                                data-source="<?php the_field('mp3_url'); ?>"
                                data-fakeplayer="#footer-player"
                                >
                                <div class="meta-artist" hidden>
                                    <span class="the-name" hidden><?php  the_title(); ?></span>
                                </div>
                                <div class="feed-dzsap extra-html-extra">
                                    <a
                                    href="<?php the_field('mp3_url'); ?>"
                                    aria-label="داگرتن"
                                    class="btn-zoomsounds btn-download"
                                    download
                                    >
                                    <span class="the-icon"><i class="player-download"></i></span>
                                </a>
                                <span class="the-label"><?php // the_title(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="midad-player-footer-container">
                    <section class="dzsap-sticktobottom dzsap-sticktobottom-for-skin-wave inited">
                        <div class="sticktobottom-close-con">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/close.svg" class="svg-icon icon-hide" x="0px" y="0px" width="144.883px" height="145.055px" alt="close" />
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/play.svg" class="svg-icon icon-show" x="0px" y="0px" width="144.883px" height="145.055px" alt="play" />
                        </div>
                        <div id="footer-player" class="audioplayer-tobe dzsap_footer button-aspect-noir button-aspect-noir--filled" data-type="fake" data-source="fake">
                            <div class="meta-artist">
                                <span class="the-name"></span>
                            </div>
                        </div>
                    </section>
                </div>

                <br />

                <div class="video-header video-title-wrap">
                    <div>
                        <h2></h2>
                        <small class="growth"><?php if(function_exists('subh_set_post_view')) { subh_set_post_view(get_the_ID()); } echo getPostViews(get_the_ID()); ?></small>
                    </div>

                </div>
                <hr />

                <div class="audio-series-list" id="audio-series-list">
                    <div class="audio-list-controller">
                        <div class="series-prev">
                            <il>


<?php the_post_navigation( array(
 'prev_text'  => __( 'Previous Article: %title' ),
 'next_text'  => __( 'Next Article: %title' ),
 ) );
?>

                                <div class="title">وانه‌ی پێشوو</div>
                                <div class="audio-name"><?php previous_post_link( '%link &raquo;', '%title', true ); ?>
                            </div>
                        </il>
                    </div>

                    <div class="series-next">
                        <il>
                            <div class="title"> وانه‌ی دواتر </div>
                            <div class="audio-name"> <?php next_post_link('%link', 'Newer entry &gt;', true); ?>
                        </div>
                    </il>
                </div>
            </div>







            <ul class="series-listing" id="series-listing">
                <div class="content-wana">
                    <?php the_content();?>
                </div>

            </ul>
        </div>




    </div>
    <aside class="sidebar">
        <div class="sticky-side">




            <div class="sidebar-box">


                <aside class="sidebar">
                    <div class="sticky-side">
                        <div class="sidebar-box">
                            <div class="box-title"><a>هاوشێوه‌كان</a></div>
                            <div class="box-content">
                                <ul>

                                    <?php
                                    global $post;
                                    $current_post_type = get_post_type( $post );
                                    $post_id = get_the_ID();
                                    $post_categories = wp_get_post_categories( $post_id );
                                    $query_args = array(
                                        'post_type' => $current_post_type,
                                        'posts_per_page' => 5,
                                        'order' => 'ASC',
                                        'post_status' => 'publish',
                                        'category__in' => $post_categories,

                                    );
                                    $query_res = new WP_Query($query_args); if ( $query_res->have_posts() ) { while ( $query_res->have_posts() ) { $query_res->the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>" class="item-title">
                                                <?php the_title(); ?>
                                            </a>

                                        </li>
                                    <?php } } else {  echo 'Nothing to show!';  }  wp_reset_postdata(); ?>


                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>


            </div>
        </div>
    </aside>
</div>
</main>


<?php get_footer(); ?>
