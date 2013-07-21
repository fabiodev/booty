<?php

function wp_infinitepaginate(){  
    $loopFile        = $_POST['loop_file'];  
    $paged           = $_POST['page_no'];  
    $posts_per_page  = get_option('posts_per_page');  
    # Load the posts  
    query_posts(array('paged' => $paged, 'post_status' => array('publish') ));  
    get_template_part( $loopFile );  
    exit;  
}  

add_action('wp_ajax_infinite_scroll', 'wp_infinitepaginate');           // for logged in user  
add_action('wp_ajax_nopriv_infinite_scroll', 'wp_infinitepaginate');    // if user not logged in

