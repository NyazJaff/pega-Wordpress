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
                                <h2>هیچ بابه‌تی بونی نیه‌</h2>
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
                                <?php the_author_posts_link(); ?>
                            </p>
                        </div>
                        <div>
                            <h2></h2>
                            <small class="growth"><?php if(function_exists('subh_set_post_view')) { subh_set_post_view(get_the_ID()); } echo getPostViews(get_the_ID()); ?></small>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>

<div id="surahs" style="display: none;">
    <div class="quran-surahs">
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/001/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%81%D8%A7%D8%AA%D8%AD%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1940 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/001.jpg" alt="سورة الفاتحة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/002/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A8%D9%82%D8%B1%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1166 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/002.jpg" alt="سورة البقرة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/003/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A2%D9%84-%D8%B9%D9%85%D8%B1%D8%A7%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1136 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/003.jpg" alt="سورة آل عمران">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/004/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%86%D8%B3%D8%A7%D8%A1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1104 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/004.jpg" alt="سورة النساء">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/005/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%A7%D8%A6%D8%AF%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1108 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/005.jpg" alt="سورة المائدة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/006/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A3%D9%86%D8%B9%D8%A7%D9%85" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1119 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/006.jpg" alt="سورة الأنعام">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/007/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A3%D8%B9%D8%B1%D8%A7%D9%81" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1107 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/007.jpg" alt="سورة الأعراف">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/008/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A3%D9%86%D9%81%D8%A7%D9%84" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1144 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/008.jpg" alt="سورة الأنفال">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/009/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AA%D9%88%D8%A8%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1098 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/009.jpg" alt="سورة التوبة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/010/%D8%B3%D9%88%D8%B1%D8%A9-%D9%8A%D9%88%D9%86%D8%B3" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1112 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/010.jpg" alt="سورة يونس">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/011/%D8%B3%D9%88%D8%B1%D8%A9-%D9%87%D9%88%D8%AF" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1129 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/011.jpg" alt="سورة هود">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/012/%D8%B3%D9%88%D8%B1%D8%A9-%D9%8A%D9%88%D8%B3%D9%81" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1262 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/012.jpg" alt="سورة يوسف">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/013/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B1%D8%B9%D8%AF" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1184 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/013.jpg" alt="سورة الرعد">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/014/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A5%D8%A8%D8%B1%D8%A7%D9%87%D9%8A%D9%85" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1226 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/014.jpg" alt="سورة إبراهيم">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/015/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%AC%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1188 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/015.jpg" alt="سورة الحجر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/016/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%86%D8%AD%D9%84" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1101 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/016.jpg" alt="سورة النحل">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/017/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A5%D8%B3%D8%B1%D8%A7%D8%A1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1171 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/017.jpg" alt="سورة الإسراء">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/018/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%83%D9%87%D9%81" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1296 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/018.jpg" alt="سورة الكهف">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/019/%D8%B3%D9%88%D8%B1%D8%A9-%D9%85%D8%B1%D9%8A%D9%85" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1294 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/019.jpg" alt="سورة مريم">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/020/%D8%B3%D9%88%D8%B1%D8%A9-%D8%B7%D9%87" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1209 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/020.jpg" alt="سورة طه">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/021/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A3%D9%86%D8%A8%D9%8A%D8%A7%D8%A1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1159 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/021.jpg" alt="سورة الأنبياء">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/022/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%AC" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1131 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/022.jpg" alt="سورة الحج">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/023/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%A4%D9%85%D9%86%D9%88%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1147 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/023.jpg" alt="سورة المؤمنون">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/024/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%86%D9%88%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1117 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/024.jpg" alt="سورة النور">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/025/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%81%D8%B1%D9%82%D8%A7%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1186 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/025.jpg" alt="سورة الفرقان">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/026/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B4%D8%B9%D8%B1%D8%A7%D8%A1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1119 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/026.jpg" alt="سورة الشعراء">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/027/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%86%D9%85%D9%84" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1131 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/027.jpg" alt="سورة النمل">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/028/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%82%D8%B5%D8%B5" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1097 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/028.jpg" alt="سورة القصص">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/029/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B9%D9%86%D9%83%D8%A8%D9%88%D8%AA" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1104 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/029.jpg" alt="سورة العنكبوت">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/030/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B1%D9%88%D9%85" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1144 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/030.jpg" alt="سورة الروم">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/031/%D8%B3%D9%88%D8%B1%D8%A9-%D9%84%D9%82%D9%85%D8%A7%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1188 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/031.jpg" alt="سورة لقمان">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/032/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D8%AC%D8%AF%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1218 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/032.jpg" alt="سورة السجدة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/033/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A3%D8%AD%D8%B2%D8%A7%D8%A8" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1102 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/033.jpg" alt="سورة الأحزاب">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/034/%D8%B3%D9%88%D8%B1%D8%A9-%D8%B3%D8%A8%D8%A3" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1103 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/034.jpg" alt="سورة سبأ">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/035/%D8%B3%D9%88%D8%B1%D8%A9-%D9%81%D8%A7%D8%B7%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1160 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/035.jpg" alt="سورة فاطر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/036/%D8%B3%D9%88%D8%B1%D8%A9-%D9%8A%D8%B3" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1235 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/036.jpg" alt="سورة يس">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/037/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B5%D8%A7%D9%81%D8%A7%D8%AA" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1157 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/037.jpg" alt="سورة الصافات">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/038/%D8%B3%D9%88%D8%B1%D8%A9-%D8%B5" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1149 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/038.jpg" alt="سورة ص">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/039/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B2%D9%85%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1147 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/039.jpg" alt="سورة الزمر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/040/%D8%B3%D9%88%D8%B1%D8%A9-%D8%BA%D8%A7%D9%81%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1143 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/040.jpg" alt="سورة غافر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/041/%D8%B3%D9%88%D8%B1%D8%A9-%D9%81%D8%B5%D9%84%D8%AA" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1118 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/041.jpg" alt="سورة فصلت">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/042/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B4%D9%88%D8%B1%D9%89" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1111 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/042.jpg" alt="سورة الشورى">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/043/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B2%D8%AE%D8%B1%D9%81" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1111 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/043.jpg" alt="سورة الزخرف">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/044/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AF%D8%AE%D8%A7%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1186 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/044.jpg" alt="سورة الدخان">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/045/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AC%D8%A7%D8%AB%D9%8A%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1123 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/045.jpg" alt="سورة الجاثية">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/046/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A3%D8%AD%D9%82%D8%A7%D9%81" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1135 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/046.jpg" alt="سورة الأحقاف">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/047/%D8%B3%D9%88%D8%B1%D8%A9-%D9%85%D8%AD%D9%85%D8%AF" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1138 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/047.jpg" alt="سورة محمد">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/048/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%81%D8%AA%D8%AD" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1143 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/048.jpg" alt="سورة الفتح">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/049/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%AC%D8%B1%D8%A7%D8%AA" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1207 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/049.jpg" alt="سورة الحجرات">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/050/%D8%B3%D9%88%D8%B1%D8%A9-%D9%82" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1329 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/050.jpg" alt="سورة ق">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/051/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B0%D8%A7%D8%B1%D9%8A%D8%A7%D8%AA" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1232 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/051.jpg" alt="سورة الذاريات">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/052/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B7%D9%88%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1233 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/052.jpg" alt="سورة الطور">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/053/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%86%D8%AC%D9%85" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1265 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/053.jpg" alt="سورة النجم">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/054/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%82%D9%85%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1224 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/054.jpg" alt="سورة القمر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/055/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B1%D8%AD%D9%85%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1360 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/055.jpg" alt="سورة الرحمن">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/056/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%88%D8%A7%D9%82%D8%B9%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1314 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/056.jpg" alt="سورة الواقعة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/057/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%AF%D9%8A%D8%AF" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1205 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/057.jpg" alt="سورة الحديد">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/058/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%AC%D8%A7%D8%AF%D9%84%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1178 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/058.jpg" alt="سورة المجادلة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/059/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%B4%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1191 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/059.jpg" alt="سورة الحشر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/060/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D9%85%D8%AA%D8%AD%D9%86%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1171 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/060.jpg" alt="سورة الممتحنة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/061/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B5%D9%81" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1210 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/061.jpg" alt="سورة الصف">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/062/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AC%D9%85%D8%B9%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1235 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/062.jpg" alt="سورة الجمعة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/063/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D9%86%D8%A7%D9%81%D9%82%D9%88%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1229 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/063.jpg" alt="سورة المنافقون">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/064/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AA%D8%BA%D8%A7%D8%A8%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1184 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/064.jpg" alt="سورة التغابن">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/065/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B7%D9%84%D8%A7%D9%82" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1169 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/065.jpg" alt="سورة الطلاق">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/066/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AA%D8%AD%D8%B1%D9%8A%D9%85" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1217 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/066.jpg" alt="سورة التحريم">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/067/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D9%84%D9%83" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1397 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/067.jpg" alt="سورة الملك">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/068/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%82%D9%84%D9%85" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1278 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/068.jpg" alt="سورة القلم">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/069/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%A7%D9%82%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1342 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/069.jpg" alt="سورة الحاقة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/070/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%B9%D8%A7%D8%B1%D8%AC" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1297 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/070.jpg" alt="سورة المعارج">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/071/%D8%B3%D9%88%D8%B1%D8%A9-%D9%86%D9%88%D8%AD" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1285 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/071.jpg" alt="سورة نوح">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/072/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AC%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1254 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/072.jpg" alt="سورة الجن">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/073/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%B2%D9%85%D9%84" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1307 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/073.jpg" alt="سورة المزمل">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/074/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%AF%D8%AB%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1239 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/074.jpg" alt="سورة المدثر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/075/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%82%D9%8A%D8%A7%D9%85%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1391 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/075.jpg" alt="سورة القيامة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/076/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A5%D9%86%D8%B3%D8%A7%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1339 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/076.jpg" alt="سورة الإنسان">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/077/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%B1%D8%B3%D9%84%D8%A7%D8%AA" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1245 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/077.jpg" alt="سورة المرسلات">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/078/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%86%D8%A8%D8%A3" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1455 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/078.jpg" alt="سورة النبأ">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/079/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%86%D8%A7%D8%B2%D8%B9%D8%A7%D8%AA" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1405 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/079.jpg" alt="سورة النازعات">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/080/%D8%B3%D9%88%D8%B1%D8%A9-%D8%B9%D8%A8%D8%B3" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1391 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/080.jpg" alt="سورة عبس">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/081/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AA%D9%83%D9%88%D9%8A%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1379 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/081.jpg" alt="سورة التكوير">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/082/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A7%D9%86%D9%81%D8%B7%D8%A7%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1422 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/082.jpg" alt="سورة الانفطار">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/083/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%B7%D9%81%D9%81%D9%8A%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1386 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/083.jpg" alt="سورة المطففين">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/084/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A7%D9%86%D8%B4%D9%82%D8%A7%D9%82" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1356 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/084.jpg" alt="سورة الانشقاق">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/085/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A8%D8%B1%D9%88%D8%AC" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1412 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/085.jpg" alt="سورة البروج">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/086/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B7%D8%A7%D8%B1%D9%82" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1407 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/086.jpg" alt="سورة الطارق">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/087/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A3%D8%B9%D9%84%D9%89" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1494 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/087.jpg" alt="سورة الأعلى">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/088/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%BA%D8%A7%D8%B4%D9%8A%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1402 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/088.jpg" alt="سورة الغاشية">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/089/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%81%D8%AC%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1410 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/089.jpg" alt="سورة الفجر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/090/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A8%D9%84%D8%AF" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1404 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/090.jpg" alt="سورة البلد">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/091/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B4%D9%85%D8%B3" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1414 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/091.jpg" alt="سورة الشمس">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/092/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%84%D9%8A%D9%84" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1379 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/092.jpg" alt="سورة الليل">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/093/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B6%D8%AD%D9%89" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1410 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/093.jpg" alt="سورة الضحى">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/094/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B4%D8%B1%D8%AD" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1397 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/094.jpg" alt="سورة الشرح">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/095/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AA%D9%8A%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1394 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/095.jpg" alt="سورة التين">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/096/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B9%D9%84%D9%82" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1363 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/096.jpg" alt="سورة العلق">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/097/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%82%D8%AF%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1394 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/097.jpg" alt="سورة القدر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/098/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A8%D9%8A%D9%86%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1370 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/098.jpg" alt="سورة البينة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/099/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B2%D9%84%D8%B2%D9%84%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1400 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/099.jpg" alt="سورة الزلزلة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/100/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B9%D8%A7%D8%AF%D9%8A%D8%A7%D8%AA" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1386 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/100.jpg" alt="سورة العاديات">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/101/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%82%D8%A7%D8%B1%D8%B9%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1390 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/101.jpg" alt="سورة القارعة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/102/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%AA%D9%83%D8%A7%D8%AB%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1374 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/102.jpg" alt="سورة التكاثر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/103/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%B9%D8%B5%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1371 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/103.jpg" alt="سورة العصر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/104/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%87%D9%85%D8%B2%D8%A9" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1371 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/104.jpg" alt="سورة الهمزة">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/105/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%81%D9%8A%D9%84" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1379 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/105.jpg" alt="سورة الفيل">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/106/%D8%B3%D9%88%D8%B1%D8%A9-%D9%82%D8%B1%D9%8A%D8%B4" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1379 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/106.jpg" alt="سورة قريش">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/107/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%A7%D8%B9%D9%88%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1387 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/107.jpg" alt="سورة الماعون">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/108/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%83%D9%88%D8%AB%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1390 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/108.jpg" alt="سورة الكوثر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/109/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%83%D8%A7%D9%81%D8%B1%D9%88%D9%86" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1441 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/109.jpg" alt="سورة الكافرون">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/110/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%86%D8%B5%D8%B1" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1403 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/110.jpg" alt="سورة النصر">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/111/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%85%D8%B3%D8%AF" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1371 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/111.jpg" alt="سورة المسد">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/112/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D8%A5%D8%AE%D9%84%D8%A7%D8%B5" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1473 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/112.jpg" alt="سورة الإخلاص">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/113/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%81%D9%84%D9%82" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1424 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/113.jpg" alt="سورة الفلق">
            </a>
        </div>
        <div class="surah-listing">
            <a href="https://midad.com/recitations/chapter/114/%D8%B3%D9%88%D8%B1%D8%A9-%D8%A7%D9%84%D9%86%D8%A7%D8%B3" class="surah-cover no-gradient">
                <div class="view-playlist">
                    <span class="vid-num">1433 تلاوة</span>
                </div>
                <img class="lazy entry-img" src="https://midad.com/assets/images/default_image/recitations.jpg" data-src="http://media.midad.com/resources/ar/uploads/quran-img/114.jpg" alt="سورة الناس">
            </a>
        </div>
    </div>
    <br>
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
                    <h2>There are currently no vacancies.</h2>
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
                                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/inc/images/quran.jpg" alt="مصحف علي الحذيفي - شعبة - مرتل" class="cover" />
                                </a>
                            </div>
                            </div>                                                   <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
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