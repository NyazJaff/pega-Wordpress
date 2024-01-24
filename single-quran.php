<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

<div class="site-wrap">
    <nav aria-label="breadcrumbs">
        <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/" class="" itemprop="item">
                    <img src="https://midad.com/assets/components/images/icons/home.svg" alt="عودة إلى الصفحة الرئيسية" />
                    <span hidden="" itemprop="name">home</span>
                    <meta itemprop="position" content="1" />
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="<?php echo get_home_url(); ?>/quran" class="" itemprop="item">
                    <span itemprop="name">القرآن الكريم</span>
                    <meta itemprop="position" content="1" />
                </a>
                <meta itemprop="position" content="2" />
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="" class="is-active" itemprop="item">
                    <span itemprop="name"><?php the_title(); ?></span>
                    <meta itemprop="position" content="1" />
                </a>
                <meta itemprop="position" content="3" />
            </li>
        </ul>
    </nav>

    <main class="page-wrap">
        <div class="main-and-aside">
            <div class="audio-series-wrap">
                <div class="audio-header">
                    <div class="audio-title">
                        <h1><?php the_title(); ?></h1>
                        <p class="scholars">
                            <a>
                                قورئانی پیرۆز
                            </a>
                        </p>
                    </div>
                    <div class="count">
                        <p>
                            <span>
                                <?php the_field('quran_nembar');?>
                                سوره‌ت
                            </span>
                        </p>
                    </div>
                </div>

                <div class="align-left">
                    <time datetime="<?php the_time('1,  F Y') ?>"><?php the_time('1,  F Y'); ?></time>
                </div>
                <div id="socialEntriesDiv" class="video-header video-title-wrap">
                    <div>
                        <h2></h2>
                        <small class="growth"><?php if(function_exists('subh_set_post_view')) { subh_set_post_view(get_the_ID()); } echo getPostViews(get_the_ID()); ?></small>
                    </div>
                </div>
                <hr />
                <div class="quran-style">
                 <?php the_content(); ?>
                </div>
            </div>
            <aside class="sidebar">
                <div class="sticky-side">
                    <div class="sidebar-box">
                        <div class="box-title"><a href="<?php echo get_home_url();?>/quran">زۆرترین بینراو </a></div>
                        <div class="box-content">
                            <ul>
                            <?php $args = array(
                    'post_type' => 'quranسوره‌ت',
                    'posts_per_page' => 6,
                    'order' => 'ASC',
                    // 'category_name' => 'muhammd'
                    // 'category_name' => $terms = get_field('name_category_mamosta'),
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
