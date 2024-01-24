<?php get_header(); ?>


            <main class="page-wrap">
                <div class="main-and-aside">
                    <div class="books-wrap">
                        <div class="books-section">
                            <div class="section-box with-see-all">
                                <div class="box-title">سیلسله‌ زانستیه‌كان</div>
                                <a href="<?php echo get_home_url(); ?>/ktep"></a>
                            </div>

                    <?php $args = array(
                    'post_type' => 'ktep',
                    'posts_per_page' => -1,
                    'order' => 'DESC', // ASC
                    // 'category_name' => 'muhammd'
                    // 'category_name' => $terms = get_field('name_category_mamosta'),
                    );
                    $the_query = new WP_Query( $args ); ?>
                    <?php if ( $the_query->have_posts() ) :  
                     while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                            <article class="article-card">
                                <div class="article-main">
                                    <header>
                                        <h2>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                    </header>
                                    <div class="article-content">
                                        <p class="scholars">
                                            <a href="https://midad.com/scholar/36355/%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2-%D8%A8%D9%86-%D9%86%D8%A7%D8%B5%D8%B1-%D8%A7%D9%84%D8%AC%D9%84%D9%8A%D9%84">
                                             
                                            </a>
                                        </p>
                                    </div>
                                    <span dir="auto" class="growth"><?php if(function_exists('subh_set_post_view')) { subh_set_post_view(get_the_ID()); } echo getPostViews(get_the_ID()); ?></span>
                                </div>

                                <div class="article-category">
                                    
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_field('Mamosta_name') ;?>
                                    </a>
                                </div>

                                <div class="article-photo">
                                    <a href="<?php the_permalink(); ?>" class="no-gradient">
                                        <div class="view-playlist">
                                            <span class="vid-num"><?php the_field('zhmaray_wanakan'); ?></span>
                                        </div>
                                        <img
                                            class="lazy cover entry-img"
                                            src="<?php the_post_thumbnail_url(); ?>"
                                            alt="وقفات تربوية"
                                        />
                                    </a>
                                </div>
                            </article>


                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                 <?php endif; ?>

                        </div>
<!--                         <div class="load-more">
                            <a class="load-more-btn" href="https://midad.com/books/new/collections">المزيد</a>
                        </div> -->
                    </div>

                    <aside class="sidebar">
                        <div class="sticky-side">
                            <link rel="stylesheet" href="https://midad.com/build/css/site-numbers.f7dd2718.css" />
                            <link rel="stylesheet" href="https://midad.com/build/css/owl.6715204f.css" />

                            <div class="sidebar-title">
                                <div class="statistics-follow">
                                    <div class="owl-carousel">
                                        <div class="number-container">
                                            <div class="number-description">المصاحف الكاملة</div>
                                            <div class="number-detail">966</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">السلاسل العلمية</div>
                                            <div class="number-detail">4,409</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">سلاسل المقالات</div>
                                            <div class="number-detail">713</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">سلاسل المرئيات</div>
                                            <div class="number-detail">215</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">الكتب</div>
                                            <div class="number-detail">6,867</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">العلماء والدعاة</div>
                                            <div class="number-detail">9,949</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">اليوتيوب</div>
                                            <div class="number-detail">3,590</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">التلاوات</div>
                                            <div class="number-detail">149,923</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">المحاضرات</div>
                                            <div class="number-detail">156,726</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">المقالات</div>
                                            <div class="number-detail">25,863</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">المرئيات</div>
                                            <div class="number-detail">16,556</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">الكتب المسموعة</div>
                                            <div class="number-detail">1,270</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">التصنيفات</div>
                                            <div class="number-detail">1,304</div>
                                        </div>
                                        <div class="number-container">
                                            <div class="number-description">الصور</div>
                                            <div class="number-detail">2,888</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script src="https://midad.com/build/owl-carousel.17eb42a8.js"></script>
                            <script>
                                $(document).ready(function () {
                                    var owl = $(".owl-carousel");
                                    owl.owlCarousel({
                                        rtl: true,
                                        items: 2,
                                        loop: true,
                                        margin: 10,
                                        autoplay: true,
                                        autoplayTimeout: 2000,
                                        autoplayHoverPause: true,
                                        dots: false,
                                    });
                                });
                            </script>
                            <div class="sidebar-box">
                                <div class="box-title">الأكثر قراءة هذا الأسبوع</div>
                                <div class="box-content">
                                    <ul>
                                        <li>
                                            <a
                                                href="https://midad.com/book/187867/%D9%85%D8%A7-%D9%84%D8%A7-%D9%8A%D8%B3%D8%B9-%D8%A3%D8%B7%D9%81%D8%A7%D9%84-%D8%A7%D9%84%D9%85%D8%B3%D9%84%D9%85%D9%8A%D9%86-%D8%AC%D9%87%D9%84%D9%87"
                                                class="item-title"
                                            >
                                                ما لا يسع أطفال المسلمين جهله
                                            </a>
                                            <div class="item-author scholars-list">
                                                <a href="https://midad.com/scholar/42323/%D9%8A%D8%B2%D9%86-%D8%A7%D9%84%D8%BA%D8%A7%D9%86%D9%85">
                                                    يزن الغانم
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a
                                                href="https://midad.com/book/189782/%D8%A7%D9%84%D9%85%D8%A8%D8%A7%D8%AF%D8%A6-%D9%88%D8%A7%D9%84%D9%82%D8%B1%D8%A7%D8%B1%D8%A7%D8%AA-%D8%A7%D9%84%D8%B5%D8%A7%D8%AF%D8%B1%D8%A9-%D9%85%D9%86-%D8%A7%D9%84%D9%84%D8%AC%D9%86%D8%A9-%D8%A7%D9%84%D9%82%D8%B6%D8%A7%D8%A6%D9%8A%D8%A9-%D8%A7%D9%84%D8%B9%D9%84%D9%8A%D8%A7"
                                                class="item-title"
                                            >
                                                المبادئ والقرارات الصادرة من اللجنة القضائية العليا
                                            </a>
                                            <div class="item-author scholars-list">
                                                <a href="https://midad.com/scholar/50968/%D9%88%D9%84%D9%8A%D8%AF-%D8%A8%D9%86-%D9%85%D8%AD%D9%85%D8%AF-%D8%A8%D9%86-%D8%B5%D8%A7%D9%84%D8%AD-%D8%A7%D9%84%D8%B5%D9%85%D8%B9%D8%A7%D9%86%D9%8A">
                                                    وليد بن محمد بن صالح الصمعاني
                                                </a>
                                                <a href="https://midad.com/scholar/50970/%D8%BA%D9%8A%D9%87%D8%A8-%D8%A8%D9%86-%D9%85%D8%AD%D9%85%D8%AF-%D8%A7%D9%84%D8%BA%D9%8A%D9%87%D8%A8">
                                                    غيهب بن محمد الغيهب
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a
                                                href="https://midad.com/book/191243/%D8%AD%D8%B5%D9%86-%D8%A7%D9%84%D9%85%D8%B3%D9%84%D9%85-%D8%A8%D8%A7%D9%84%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%A5%D9%86%D8%AC%D9%84%D9%8A%D8%B2%D9%8A%D8%A9"
                                                class="item-title"
                                            >
                                                حصن المسلم باللغة الإنجليزية
                                            </a>
                                            <div class="item-author scholars-list">
                                                <a href="https://midad.com/scholar/41247/%D8%B3%D8%B9%D9%8A%D8%AF-%D8%A8%D9%86-%D8%B9%D9%84%D9%8A-%D8%A8%D9%86-%D9%88%D9%87%D9%81-%D8%A7%D9%84%D9%82%D8%AD%D8%B7%D8%A7%D9%86%D9%8A">
                                                    سعيد بن علي بن وهف القحطاني
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a
                                                href="https://midad.com/book/193110/%D9%81%D8%AA%D8%AD-%D8%A7%D9%84%D8%A8%D8%A7%D8%B1%D9%8A-%D8%A8%D8%B4%D8%B1%D8%AD-%D8%B5%D8%AD%D9%8A%D8%AD-%D8%A7%D9%84%D8%A8%D8%AE%D8%A7%D8%B1%D9%8A-%D8%A7%D9%84%D8%AC%D8%B2%D8%A1-%D8%A7%D9%84%D8%A3%D9%88%D9%84"
                                                class="item-title"
                                            >
                                                فتح الباري بشرح صحيح البخاري: الجزء الأول
                                            </a>
                                            <div class="item-author scholars-list">
                                                <a href="https://midad.com/scholar/42265/%D8%A7%D9%84%D8%AD%D8%A7%D9%81%D8%B8-%D8%A7%D8%A8%D9%86-%D8%AD%D8%AC%D8%B1-%D8%A7%D9%84%D8%B9%D8%B3%D9%82%D9%84%D8%A7%D9%86%D9%8A">
                                                    الحافظ ابن حجر العسقلاني
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="https://midad.com/book/193726/%D8%A7%D9%84%D9%85%D9%85%D8%AA%D8%B9-%D9%81%D9%8A-%D8%A7%D9%84%D9%82%D9%88%D8%A7%D8%B9%D8%AF-%D8%A7%D9%84%D9%81%D9%82%D9%87%D9%8A%D8%A9" class="item-title">
                                                الممتع في القواعد الفقهية
                                            </a>
                                            <div class="item-author scholars-list">
                                                <a href="https://midad.com/scholar/45097/%D9%85%D8%B3%D9%84%D9%85-%D8%A7%D9%84%D8%AF%D9%88%D8%B3%D8%B1%D9%8A">
                                                    مسلم الدوسري
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a
                                                href="https://midad.com/book/194662/%D9%88%D9%84%D9%84%D9%87-%D8%A7%D9%84%D8%A3%D8%B3%D9%85%D8%A7%D8%A1-%D8%A7%D9%84%D8%AD%D8%B3%D9%86%D9%89-%D9%81%D8%A7%D8%AF%D8%B9%D9%88%D9%87-%D8%A8%D9%87%D8%A7"
                                                class="item-title"
                                            >
                                                ولله الأسماء الحسنى فادعوه بها
                                            </a>
                                            <div class="item-author scholars-list">
                                                <a href="https://midad.com/scholar/36355/%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2-%D8%A8%D9%86-%D9%86%D8%A7%D8%B5%D8%B1-%D8%A7%D9%84%D8%AC%D9%84%D9%8A%D9%84">
                                                    عبدالعزيز بن ناصر الجليل
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-box">
                                <div class="box-title"><a href="https://midad.com/books/new/collections">سلاسل الكتب</a></div>
                                <div class="box-content">
                                    <ul>
                                        <li>
                                            <a href="https://midad.com/collection/461552/%D8%A7%D9%84%D9%88%D8%B5%D8%A7%D9%8A%D8%A7-%D8%A7%D9%84%D9%85%D9%86%D8%A8%D8%B1%D9%8A%D8%A9" class="item-title">الوصايا المنبرية</a>
                                            <div class="item-author scholars-list">
                                                <a href="https://midad.com/scholar/39233/%D9%85%D8%AD%D9%85%D8%AF-%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%A7%D8%B7%D9%8A-%D8%A8%D8%AD%D9%8A%D8%B1%D9%8A">
                                                    محمد عبدالعاطي بحيري
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a
                                                href="https://midad.com/collection/459820/%D8%B5%D8%AD%D9%8A%D8%AD-%D9%85%D8%B3%D9%84%D9%85-%D8%A5%D9%83%D9%85%D8%A7%D9%84-%D8%A5%D9%83%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D9%85%D8%B9%D9%84%D9%85-%D9%88%D9%85%D9%83%D9%85%D9%84-%D8%A5%D9%83%D9%85%D8%A7%D9%84-%D8%A7%D9%84%D8%A3%D9%83%D9%85%D8%A7%D9%84"
                                                class="item-title"
                                            >
                                                صحيح مسلم: إكمال إكمال المعلم ومكمل إكمال الأكمال
                                            </a>
                                            <div class="item-author scholars-list">
                                                <a href="https://midad.com/scholar/48798/%D8%A7%D9%84%D8%A3%D8%A8%D9%8A-%D8%A7%D9%84%D9%85%D8%A7%D9%84%D9%83%D9%8A">
                                                    الأبي المالكي
                                                </a>
                                                <a
                                                    href="https://midad.com/scholar/48800/%D8%A3%D8%A8%D9%88-%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D9%84%D9%87-%D9%85%D8%AD%D9%85%D8%AF-%D8%A8%D9%86-%D9%8A%D9%88%D8%B3%D9%81-%D8%A7%D9%84%D8%B3%D9%86%D9%88%D8%B3%D9%8A"
                                                >
                                                    أبو عبدالله محمد بن يوسف السنوسي
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="https://midad.com/collection/53698/%D8%A8%D8%AD%D9%88%D8%AB-%D9%88%D9%85%D8%B3%D8%A7%D8%A6%D9%84-%D8%B9%D9%84%D9%85%D9%8A%D8%A9" class="item-title"> بحوث ومسائل علمية</a>
                                            <div class="item-author scholars-list">
                                                <a href="https://midad.com/scholar/490/%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2-%D8%A8%D9%86-%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D9%84%D9%87-%D8%A8%D9%86-%D8%A8%D8%A7%D8%B2">
                                                    عبدالعزيز بن عبدالله بن باز
                                                </a>
                                                <a
                                                    href="https://midad.com/scholar/913/%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B1%D8%AD%D9%85%D9%86-%D8%A8%D9%86-%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D8%B9%D8%B2%D9%8A%D8%B2-%D8%A7%D9%84%D8%B3%D8%AF%D9%8A%D8%B3"
                                                >
                                                    عبدالرحمن بن عبدالعزيز السديس
                                                </a>
                                                <a href="https://midad.com/scholar/36056/%D8%B9%D8%A8%D8%AF%D8%A7%D9%84%D9%84%D9%87-%D8%A8%D9%86-%D9%85%D8%AD%D9%85%D8%AF-%D8%B2%D9%82%D9%8A%D9%84">
                                                    عبدالله بن محمد زقيل
                                                </a>
                                                ...
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </main>
        </div>

        
<?php get_footer(); ?>
