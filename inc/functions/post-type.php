<?php 
function cptui_register_my_cpts() {
    $labels = [
        "name" => esc_html__( "قورئــانی پیرۆز", "muslim" ),
        "singular_name" => esc_html__( "quran", "muslim" ),

    ];

    $args = [
       // "taxonomies" => [ "category" ],
        "label" => esc_html__( "qurans", "muslim" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "can_export" => false,
        "rewrite" => [ "slug" => "quran", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-format-audio",
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
     //  'supports'     => array( 'title', 'editor', 'thumbnail' , 'post-formats' )

    ];
    register_post_type( "quran", $args );
}
// register taxonomy
    register_taxonomy('quran_category', 'quran', array('hierarchical' => true, 'label' => 'Categore quran', 'query_var' => true, 'rewrite' => array( 'slug' => 'quran-category' )));
add_action( 'init', 'cptui_register_my_cpts' );
/*Custom Post type end*/

 













