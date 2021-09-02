<?php
// show custom post type in rss feed
function feed_request($qv) {
    if (isset($qv['feed']))
        $qv['post_type'] = ARCHIVE_POST_TYPE;
    return $qv;
}
add_filter('request', 'feed_request');
