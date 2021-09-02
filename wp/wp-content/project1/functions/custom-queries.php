<?php

  function recent_article_query() {
    $args = array(
      'post_type'      => ARCHIVE_POST_TYPE,
      'posts_per_page' => 3,
      'order'          => 'DESC',
      'post_status'    => 'publish',
    );

    return new WP_Query( $args );
  }

  function pick_up_article_query($posts) {
    $args = array(
      'post_type'      => ARCHIVE_POST_TYPE,
      'post__in'       => $posts,
      'posts_per_page' => 4,
      'orderby'        => 'post__in',
      'order'          => 'DESC',
      'post_status'    => 'publish',
    );

    return new WP_Query( $args );
  }

  function index_article_query() {
    $args = array(
      'post_type'      => ARCHIVE_POST_TYPE,
      'posts_per_page' => 10,
      'offset'         => 3,
      'order'          => 'DESC',
      'post_status'    => 'publish',
    );

    return new WP_Query( $args );
  }

  function sidebar_tag_query() {
    $args = array(
      'orderby'    => 'count',
      'order'      => 'DESC',
      'hide_empty' => false,
      'number'     => 10,
    );

    return get_terms(ARCHIVE_TAX_TAG, $args);
  }

  function sidebar_most_viewed_article_query() {
    // Base on https://github.com/cabrerahector/wordpress-popular-posts/issues/110
    // Getting only the id of the popular posts to not destroy the current markup
    $args_popular_posts = array(
      'post_type' => ARCHIVE_POST_TYPE,
      'limit'     => 5,
      'range'     => 'last30days',
      'order_by'  => 'views',
    );

    $get_popular_posts = new WPP_query( $args_popular_posts );
    $popular_posts     = $get_popular_posts->get_posts();
    $ranked_post       = array();

    if(!empty($popular_posts)) {
      for ($i = 0; $i < count($popular_posts); $i++) {
        $ranked_post[$i] = $popular_posts[$i]->id;
      }
    } else {
      $ranked_post[0] = 0; // add dummy post to prevent error on debug.log if there is no post
    }

    $args = array(
      'post_type'      => ARCHIVE_POST_TYPE,
      'post__in'       => $ranked_post,
      'orderby'        => 'post__in'
    );

    return new WP_Query( $args );
  }

  function related_article_query($post_category, $post_ID) {
    $args = array(
      'post_type'      => ARCHIVE_POST_TYPE,
      'posts_per_page' => 2,
      'post__not_in'   => array($post_ID),
      'orderby'        => 'rand',
      'tax_query'      => array(
          array(
            'taxonomy' => ARCHIVE_TAX_CAT,
            'field'    => 'slug',
            'terms'    => $post_category,
          ),
      ),
    );

    return new WP_Query( $args );
  }
