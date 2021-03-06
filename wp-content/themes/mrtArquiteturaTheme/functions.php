<?php
/* WIDGETS */

add_theme_support( 'post-thumbnails' );

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '',
        'after_widget'	=> '',
		'before_title'	=> '',
		'after_title'	=> '',
    ));
	
	register_sidebar(array(
		'name'			=> 'Novidades',
        'before_widget'	=> '',
        'after_widget'	=> '',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
	
	register_sidebar(array(
		'name'			=> 'BannerHeader',
        'before_widget'	=> '',
        'after_widget'	=> '',
		'before_title'	=> '',
		'after_title'	=> '',
    ));
}

// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.'';
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Views');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}

/* Desabilitar Admin Bar. */
add_filter( ‘show_admin_bar’, ‘__return_true’ );


?>