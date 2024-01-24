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
                            <a class="" itemprop="item" href="<?php echo get_home_url(); ?> ">
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/home.svg" alt="" />
                                <span hidden="" itemprop="name">سه‌ره‌كی</span>
                                <meta itemprop="position" content="1" />
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a class="" itemprop="item" href="<?php echo get_home_url(); ?>/ktep">
                                <span itemprop="name">كتێبه‌كان </span>
                                <meta itemprop="position" content="1" />
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a class="" itemprop="item">
                                <span itemprop="name"><?php the_field('Mamosta_name');?> </span>
                                <meta itemprop="position" content="1" />
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>

                    </ul>
                </nav>


                <main class="page-wrap">
                    <div class="main-and-aside">
                        <div class="articles-series">
                            <div>
                                <div class="lessons-series-box">
                                    <div class="box-head">
                                        <h1> <?php the_title(); ?> </h1>
                                        <span class="growth"><?php if(function_exists('subh_set_post_view')) { subh_set_post_view(get_the_ID()); } echo getPostViews(get_the_ID()); ?></span>
                                    </div>
                                    <div class="box-section">
                                        <p> ڕافه‌كردنی كتێپ
                                            <a>
                                                <?php the_field('Mamosta_name'); ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="-box-section-two">
                                        <div>
                                            <div><strong>ده‌باره‌ی كتێپ</strong></div>
                                            <p class="categories-container">
                                               <?php the_content() ; ?>
                                           </p>
                                       </div>
                                   </div>
                                   <div>
                                    <a class="box-cta no-gradient">
                                        كۆیی وانه‌كان
                                        <span> <?php  // Zhmaray wanakan
                                        $cat_id = 1; 
                                        $args = array( 
                                            'post_type' => get_post_type('ktep','narimanpost'),
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
                                                echo $total_posts; ?>     وانه‌</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="collection-entries-container" >
                            <input id="search_input" data-post-type="<?php echo get_field('post_type');?>" data-current-page="1" data-posts-per-page="4" data-link="load_more_search" data-category-name="<?php echo get_field('category_mamosta') ?>">
                            <button id="search-submit" type="submit">
                                <span class="tie-icon-search tie-search-icon" aria-hidden="true"></span>
                                <span class="screen-reader-text">گه&zwnj;ڕان له&zwnj;</span>
                            </button>
                            <div class="articles-from-the-series" id='babats_table'>
        
                             <?php
                             $args = array(
                                'post_type' => get_field('post_type'),
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => get_field('post_type') ,
                                        'field' => 'slug',
                                        'terms' => $terms = get_field('category_mamosta')
                                    )
                                ),
                                'orderby' => 'date',
                                'post_status' => 'publish',
                                'order' => 'ASC',
                                'posts_per_page' => 4
                            );
                            $the_query = new WP_Query( $args ); ?>
                            <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <lesson class="article-card" data-serial-number>
                                        <div class="article-main">
                                            <header>
                                                <h2>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h2>
                                            </header>
                                        </div>
                                    </lesson>

                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php endif; ?>
                        </div>
                        <div class="load-more">
                            <a href="#!" class="btn load-more-btn" onclick="load_more(event)" id="load-more" data-post-type="<?php echo get_field('post_type') ?>" data-current-page="1" data-posts-per-page="4" data-link="wana_load_more" data-category-name="<?php echo get_field('category_mamosta') ?>">بابه‌تی زیاتر</a>
                        </div>
                    </div>
                </div>

                <aside class="sidebar">
                    <div class="sticky-side">
                        <div class="sidebar-box">
                            <div class="box-title"><a>زۆرترین بینراو  </a></div>
                            <div class="box-content">
                                <ul>
                                  <?php      $args = array(
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
<div id="report_error" class="modal">
    <form action="" id="report_error-data-form">
        <div class="modal-dialog">
            <div id="close_modal">×</div>
            <div class="modal-content" id="add-report_error-data-form">
                <h3 class="modal-tile">الإبلاغ عن خطأ !</h3>
                <input type="text" name="username" id="report_error-data-name" placeholder="الاسم (اختياري)" />
                <input type="email" name="email" id="report_error-data-email" placeholder="البريد الإلكتروني (اختياري)" />
                <textarea name="text" id="report_error-data-text" cols="10" rows="3" placeholder="الخطأ" required=""></textarea>
                <input type="hidden" name="token" id="report_error-data-token" />
                <div class="g-recaptcha" data-sitekey="6LdWW_cbAAAAAGtXedek1oKDpOpkEAdtcmbliGeq" data-callback="onCompleted" data-size="invisible">
                    <div
                    class="grecaptcha-badge"
                    data-style="bottomright"
                    style="
                    width: 256px;
                    height: 60px;
                    position: fixed;
                    visibility: hidden;
                    display: block;
                    transition: right 0.3s ease 0s;
                    bottom: 14px;
                    right: -186px;
                    box-shadow: gray 0px 0px 5px;
                    border-radius: 2px;
                    overflow: hidden;
                    "
                    >
                    <div class="grecaptcha-logo">
                        <iframe
                        title="reCAPTCHA"
                        width="256"
                        height="60"
                        role="presentation"
                        name="a-7r8cde3b3mwg"
                        frameborder="0"
                        scrolling="no"
                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdWW_cbAAAAAGtXedek1oKDpOpkEAdtcmbliGeq&amp;co=aHR0cHM6Ly9taWRhZC5jb206NDQz&amp;hl=ar&amp;v=u-xcq3POCWFlCr3x8_IPxgPu&amp;size=invisible&amp;cb=oxz1qqr74gzm"
                        ></iframe>
                    </div>
                    <div class="grecaptcha-error"></div>
                    <textarea
                    id="g-recaptcha-response"
                    name="g-recaptcha-response"
                    class="g-recaptcha-response"
                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"
                    ></textarea>
                </div>
                <iframe style="display: none;"></iframe>
            </div>
            <footer class="modal-footer">
                <input type="submit" value="إرسال" />
            </footer>
        </div>
        <div id="report_error-data-sent" class="modal-content" style="display: none;">
            <div class="add-comment">
                <div class="successfully-sent">
                    <h2>تم الإرسال</h2>
                    <p>شكراً لكم للإبلاغ عن الخطأ.</p>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>


<?php get_footer(); ?>
