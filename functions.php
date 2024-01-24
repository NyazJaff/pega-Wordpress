<?php
// My style functions
get_template_part( '/inc/functions/js-css', 'Style-java' );
get_template_part( '/inc/functions/post-type', 'post-type' );
get_template_part( '/inc/functions/get-more', 'get-more' );
get_template_part( '/inc/functions/posts-views', 'posts-views' );
get_template_part( '/inc/functions/custom-field', 'custom-field' );


function wpb_posts_nav(){
    $next_post = get_next_post();
    $prev_post = get_previous_post();
      
    if ( $next_post || $prev_post ) : ?>
      
        <div class="wpb-posts-nav">
            <div>
                <?php if ( ! empty( $prev_post ) ) : ?>
                    <a href="<?php echo get_permalink( $prev_post ); ?>">
                        <div>
                            <div class="wpb-posts-nav__thumbnail wpb-posts-nav__prev">
                                <?php echo get_the_post_thumbnail( $prev_post, [ 100, 100 ] ); ?>
                            </div>
                        </div>
                        <div>
                            <strong>
                                <svg viewBox="0 0 24 24" width="24" height="24"><path d="M13.775,18.707,8.482,13.414a2,2,0,0,1,0-2.828l5.293-5.293,1.414,1.414L9.9,12l5.293,5.293Z"/></svg>
                                <?php _e( 'Previous article', 'textdomain' ) ?>
                            </strong>
                            <h4><?php echo get_the_title( $prev_post ); ?></h4>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
            <div>
                <?php if ( ! empty( $next_post ) ) : ?>
                    <a href="<?php echo get_permalink( $next_post ); ?>">
                        <div>
                            <strong>
                                <?php _e( 'Next article', 'textdomain' ) ?>
                                <svg viewBox="0 0 24 24" width="24" height="24"><path d="M10.811,18.707,9.4,17.293,14.689,12,9.4,6.707l1.415-1.414L16.1,10.586a2,2,0,0,1,0,2.828Z"/></svg>
                            </strong>
                            <h4><?php echo get_the_title( $next_post ); ?></h4>
                        </div>
                        <div>
                            <div class="wpb-posts-nav__thumbnail wpb-posts-nav__next">
                                <?php echo get_the_post_thumbnail( $next_post, [ 100, 100 ] ); ?>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div> <!-- .wpb-posts-nav -->
      
    <?php endif;
}

// widget custom
function wpb_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Front page sidebar', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'footer', 'wpb'),
        'id' => 'sidebar-3',
        'description' => __( 'footer sidebar', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


    
}

add_action( 'widgets_init', 'wpb_widgets_init' );





add_filter('manage_edit-article_columns', 'my_columns');
function my_columns($columns) {
    $columns['article_category'] = 'Category';
    return $columns;
}

add_action( 'manage_article_posts_custom_column', 'my_manage_article_columns', 10, 2 );

function my_manage_article_columns( $column, $post_id ) {
    global $post;

    switch( $column ) {

        /* If displaying the 'article_category' column. */
        case 'article_category' :

        /* Get the genres for the post. */
        $terms = get_the_terms( $post_id, 'article_category' );

        /* If terms were found. */
        if ( !empty( $terms ) ) {

            $out = array();

            /* Loop through each term, linking to the 'edit posts' page for the specific term. */
            foreach ( $terms as $term ) {
                $out[] = sprintf( '<a href="%s">%s</a>',
                    esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'article_category' => $term->slug ), 'edit.php' ) ),
                    esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'article_category', 'display' ) )
                );
            }

            /* Join the terms, separating them with a comma. */
            echo join( ', ', $out );
        }

        /* If no terms were found, output a default message. */
        else {
            _e( 'No Articles' );
        }

        break;

        /* Just break out of the switch statement for everything else. */
        default :
        break;
    }
}

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}






/*Changes the main Login page url link ------------------------------ */
function wp_login_page_URL( $url ) {
    $url = home_url( '/' );
    return $url; }
add_filter( 'login_headerurl', 'wp_login_page_URL' );
/*Replaces the default WordPress Logo*/
function add_logo_Login_page() {
    echo '<style>.login h1 a {
        background-repeat: no-repeat;
        background-image: url(https://midad.com/assets/images/midad/midad-logo.png);
        background-position: center center;
        background-size: contain !important;
        width: 100% !important;
    }
    </style>';
}
add_action( 'login_head', 'add_logo_Login_page' );




// // 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat', 
// function add_post_formats() {
//     add_theme_support( 'post-formats', array( 'video', 'audio','quote', ) );
// }
// add_action( 'after_setup_theme', 'add_post_formats', 20 );
// add_filter( 'gettext_with_context', 'rename_post_formats', 10, 4 );

// function rename_post_formats( $translation, $text, $context, $domain ) {

//     $names = array(
//         'Video'  => 'Custom Name',
//         'Audio' => 'وانه‌كان',
//         'Quote' => 'وتاری ده‌نگی',
//     );
    
//     if ( $context == 'Post format' ) {
//         $translation = str_replace( array_keys( $names ), array_values( $names ), $text );
//     }
    
//     return $translation;
// }


