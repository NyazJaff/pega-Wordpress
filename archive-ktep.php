<?php
/**
 * The template for displaying archive pages
 *
 */


get_header(); ?>
<?php wp_link_pages( 'before=<ul class="page-links">&after=</ul>&link_before=<li class="page-link">&link_after=</li>' ); ?>
<div class="site-wrap">
    <nav aria-label="breadcrumbs">
        <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="<?php echo get_home_url(); ?>" class="" itemprop="item">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/home.svg" alt="عودة إلى الصفحة الرئيسية" />
                    <span hidden="" itemprop="name">home</span>
                    <meta itemprop="position" content="1" />
                </a>
                <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a class="is-active" itemprop="item">
                    <span itemprop="name"> سيلسله زانستيةكان</span>
                    <meta itemprop="position" content="1" />
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ul>
    </nav>
    <script>
        var breadcrumbTree = null;
        var breadcrumb = null;
        document.addEventListener("DOMContentLoaded", function (event) {
            breadcrumbTree = document.getElementById("breadcrumb-tree");
            breadcrumb = document.getElementById("breadcrumb");
        });
        function showBreadcrumbTree() {
            breadcrumbTree.classList.remove("is-hidden");
            breadcrumb.classList.add("is-hidden");
        }
        function hideBreadcrumbTree() {
            breadcrumbTree.classList.add("is-hidden");
            breadcrumb.classList.remove("is-hidden");
        }
    </script>

    <main class="page-wrap">
        <div class="main-and-aside">
            <div>
                <div class="section-box with-see-all">
                    <h1 class="box-title"> وانه‌كان</h1>
                    <a> ته‌واوی بابه‌ته‌كان</a>
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
                                            <span class="vid-num"> <?php the_field('zhmaray_wanakan'); ?></span>
                                        </div>
                                         <?php the_post_thumbnail( array() ); ?>
                                        
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
