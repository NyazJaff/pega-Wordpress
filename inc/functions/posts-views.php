<?php 
function subh_set_post_view($postID)
{

    $count_key = 'post_views_count';
    $count = (int) get_post_meta($postID, $count_key, true);

    if ($count == 0) {      
        $count++;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, $count++);
    } else {        
        $count++;
        update_post_meta($postID, $count_key, $count);
    }

}

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);    
    return $count.' ';
}

/**
 * Add a new column in the admin panel posts list
 *
 * @param $defaults
 *
 * @return mixed
 */
function subh_posts_column_views($defaults)
{
    $defaults['post_views'] = __('');

    return $defaults;
}

/**
 * Display the number of views for each posts on the admin panel
 *
 * @param $column_name
 * @param $id
 *
 * @return void simply echo out the number of views
 */
function subh_posts_custom_column_views($column_name, $id)
{
    if ($column_name === 'post_views') {
        echo getPostViews(get_the_ID());
    }
}

add_filter('manage_posts_columns', 'subh_posts_column_views');
add_action('manage_posts_custom_column', 'subh_posts_custom_column_views', 5, 2);

