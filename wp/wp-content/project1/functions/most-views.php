<?php
function set_views($post_ID) {
    $key = 'views';
    $count = get_post_meta($post_ID, $key, true); //retrieves the count

    if($count == ''){ //check if the post has ever been seen

        //set count to 0
        $count = 0;

        //just in case
        delete_post_meta($post_ID, $key);

        //set number of views to zero
        add_post_meta($post_ID, $key, '0');

    } else{ //increment number of views
        $count++;
        update_post_meta($post_ID, $key, $count);
    }
}

//keeps the count accurate by removing prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function track_custom_post_watch ($post_ID) {
    //you can use is_single here, to track all your posts. Here, we're traking custom post 'watch'
    if ( !is_singular( ARCHIVE_POST_TYPE ) ) return;

    if ( empty ( $post_ID) ) {

        //gets the global post
        global $post;

        //extracts the ID
        $post_ID = $post->ID;
    }

    //calls our previously defined methos
    set_views($post_ID);
}
//adds the tracker to wp_head.
add_action( 'wp_head', 'track_custom_post_watch');
