<?php

function wana_load_more() {
 $array_qury = [
  'post_type' => $_POST['post_type'],
  'posts_per_page' => $_POST['posts_per_page'],
  'orderby' => 'date',
  'order' => 'ASC',
  'paged' => $_POST['paged'],
];

if($_POST['category_name']){
  $array_qury = $array_qury + ['tax_query' => array(
    array(
      'taxonomy' => $_POST['post_type'] ,
      'field' => 'slug',
      'terms' => $_POST['category_name']
    )
  )];
}

if($_POST['category_in']){
 $array_qury = $array_qury + ['post_status' => 'publish'];
 $array_qury = $array_qury + ['category__in' => $_POST['category_in']];
}

$ajaxposts = new WP_Query($array_qury); 

$max_pages = $ajaxposts->max_num_pages;
$post_ids = wp_list_pluck( $ajaxposts->posts, 'post_title', 'post_name' );
$result = [
  'max' => $max_pages,
  'html' => $post_ids,
];

echo json_encode($result);

exit;
}
add_action('wp_ajax_wana_load_more', 'wana_load_more');
add_action('wp_ajax_nopriv_wana_load_more', 'wana_load_more');


function load_more_search() {
   $array_qury = [
    'post_type' => $_POST['post_type'],
    'post_title_like' => $_POST['search_text'],
    'suppress_filters' => FALSE,
    'orderby' => 'date',
    'order' => 'ASC',

  ];

  if($_POST['category_name']){
   $array_qury = $array_qury + ['tax_query' => array(
                                    array(
                                        'taxonomy' => $_POST['post_type'],
                                        'field' => 'slug',
                                        'terms' => $_POST['category_name']
                                    )
                                )];
  }

  if($_POST['category_in']){
   $array_qury = $array_qury + ['post_status' => 'publish'];
   $array_qury = $array_qury + ['category__in' => $_POST['category_in']];
  }

  $ajaxposts = new WP_Query($array_qury); 

  $max_pages = $ajaxposts->max_num_pages;
  $post_ids = wp_list_pluck( $ajaxposts->posts, 'post_title', 'post_name' );
  $result = [
    'max' => $max_pages,
    'html' => $post_ids,
  ];

  echo json_encode($result);

  exit;
}

add_filter( 'posts_where', 'title_like_posts_where', 10, 2 );
function title_like_posts_where( $where, $wp_query ) {
  global $wpdb;
  if ( $post_title_like = $wp_query->get( 'post_title_like' ) ) {
    $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $post_title_like ) ) . '%\'';
  }
  return $where;
}

add_action('wp_ajax_load_more_search', 'load_more_search');
add_action('wp_ajax_nopriv_load_more_search', 'load_more_search');
