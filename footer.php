<?php
/**
 * The template for displaying the footer
 *
 */
?>
</main>
</div>
<button class="go-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
    <img src="https://midad.com/assets/images/icons/left-arrow-white.svg" alt="عودة للأعلى" />
</button>
<style type="text/css">
    .footer-text {
        background-color: var(--sidebox-bg-color, #f7f7f7);
        display: block;
        grid-template-columns: repeat(7, 1fr) 2fr;
        padding: 2rem;
        border-top: 3px solid var(--main-color, #38854f);
        margin-top: -94px;
        text-align: center;
        margin:auto;
    }
</style>
<div class="footer-text">
    ماڵپه‌ری پێگه‌ی سه‌له‌ف بۆ ته‌نها زانستی شه‌رعی و تایبه‌ت نیه‌ به‌ تاك و هه‌واڵه‌كان وه‌ تابیعی هیچ لایه‌نێكی دیاری كراو نیه‌ هه‌ر بانگخوازێكی ئه‌هلی سوونه‌ ئه‌توانی بانگخوازی خۆی بكات له‌ رێگای پێگه‌ی سه‌له‌فه‌وه‌
</div>
</div>

<script>
    $(document).ready(function () {
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            rtl: true,
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            dots: false,
        });
    });
</script>
<script src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver" async></script>
<script src="https://unpkg.com/yall-js@3.1.7/dist/yall.min.js" async></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        window.setTimeout(function () {
            yall({ lazyClass: "lazy" });
        }, 99);
    });
</script>
<script>
    jQuery.event.special.touchstart = {
        setup: function (_, ns, handle) {
            this.addEventListener("touchstart", handle, { passive: true });
        },
    };
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    jQuery(document).ready(function ($) {
        $("#player-937116").audioplayer(settings);
    });
</script>

<script>
    let settings = {
        disable_volume: "on",
        autoplay: "off",
        cue: "on",
        disable_scrub: "default",
        design_skin: "skin-wave",
        skinwave_dynamicwaves: "on",
        skinwave_enableSpectrum: "off",
        settings_backup_type: "full",
        settings_useflashplayer: "auto",
        skinwave_spectrummultiplier: "4",
                            skinwave_mode: "normal", //alternate, normal, small
                            pcm_data_try_to_generate: "on",
                            design_color_bg: "888888,ffffff", // --  light or full
                            design_wave_color_progress: "38854f,ffffff", // -- light or full
                        };

                        jQuery(document).ready(function ($) {
                            let settings_ap = {
                                disable_volume: "off",
                                autoplay: "off",
                                cue: "off",
                                disable_scrub: "default",
                                design_skin: "skin-wave",
                                skinwave_dynamicwaves: "on",
                                skinwave_enableSpectrum: "off",
                                settings_backup_type: "full",
                                settings_useflashplayer: "auto",
                                skinwave_spectrummultiplier: "4",
                                skinwave_mode: "small",
                                design_color_bg: "888888,ffffff", // --  light or full
                                design_wave_color_progress: "38854f,ffffff", // -- light or full
                            };
                            dzsap_init("#footer-player", settings_ap);
                        });
                    </script>
                    <script>

                        jQuery(document).ready(function($) {
                            const search_input = document.getElementById('search_input');
                            search_input.addEventListener('input', load_more_search);
        search_input.addEventListener('propertychange', load_more_search); // for IE8
    });

                        function load_more_search(event){
                            let search_text = event.target.value;
                            let category_name = event.currentTarget.dataset.categoryName
                            let link = event.currentTarget.dataset.link
                            let post_type = event.currentTarget.dataset.postType
                            let category_in = event.currentTarget.dataset.categoryIn
                            console.log(event.currentTarget.dataset)

                            jQuery.ajax({
                                type: 'POST',
                                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                                dataType: 'html',
                                data: {
                                    action: link,
                                    post_type: post_type,
                                    category_name: category_name,
                                    category_in: category_in,
                                    search_text: search_text
                                },
                                success: function (response) {
                                    jQuery('#babats_table').empty()
                                    const res_obj = JSON.parse(response);
                                    for (const key in res_obj.html) {
                                        var new_item = jQuery('<lesson class="article-card" data-serial-number=""><div class="article-main"><header><h2><a href="<?php echo home_url();?>/'+ post_type + '/' + key +'">' + res_obj.html[key] + '</a></h2></header></div></lesson>').hide()
                                        jQuery('#babats_table').append(new_item);
                                        new_item.show('normal');
                                    }
                post_type = '' // make sure next call doesn't use the same type
            }
        });
                        }
                        function load_more(event){
                            let element =  event.target
                            let category_name = event.currentTarget.dataset.categoryName
                            let link = event.currentTarget.dataset.link
                            let post_type = event.currentTarget.dataset.postType
                            let posts_per_page = event.currentTarget.dataset.postsPerPage
                            let category_in = event.currentTarget.dataset.categoryIn


        event.currentTarget.dataset.currentPage++; // Do currentPage + 1, because we want to load the next page
        let currentPage = event.currentTarget.dataset.currentPage

        jQuery.ajax({
            type: 'POST',
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            dataType: 'html',
            data: {
                action: link,
                paged: currentPage,
                post_type: post_type,
                category_name: category_name,
                posts_per_page: posts_per_page,
                category_in: category_in
            },
            success: function (response) {
                const res_obj = JSON.parse(response);
                for (const key in res_obj.html) {
                    var new_item = jQuery('<lesson class="article-card" data-serial-number=""><div class="article-main"><header><h2><a href="<?php echo home_url();?>/'+ post_type + '/' + key +'">' + res_obj.html[key] + '</a></h2></header></div></lesson>').hide()
                    jQuery('#babats_table').append(new_item);
                    new_item.show('normal');
                }
                post_type = '' // make sure next call doesn't use the same type
                
                if(res_obj.html.length == 0){
                    event.target.style.display = "none"
                }
            }
        });
    }
</script>
<?php wp_footer(); ?>
</body>
</html>
