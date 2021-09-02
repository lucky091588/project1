<?php
/**
 * ここはパーマリンク設定、リライトルールを変更する処理を記載するファイルです。
 */

add_action( "init", "lig_add_post_type_rules" );

function lig_add_post_type_rules() {

  function posts_link( $post_link, $post = 0 ) {
    if ( $post->post_type === ARCHIVE_POST_TYPE ) {
      return home_url( 'archive/' . $post->ID . '/' );
    } else {
      return $post_link;
    }
  }
  add_filter( 'post_type_link', 'posts_link', 1, 2 );

  // author link rewrite
  function custom_author_link($link, $author_id) {
    $link = home_url( 'author/' . $author_id );
    return $link;
  }
  add_filter( 'author_link', 'custom_author_link', 10, 2 );


  function rewrite_rules( $wp_rewrite ) {
    $rules = array(
      'archive/([0-9]+)?$'                           => 'index.php?post_type=archive&p=$matches[1]',
      'archive/([^/]+)/?$'                           => 'index.php?archive-category=$matches[1]',
      'archive/([^/]+)/page/?([0-9]{1,})/?$'         => 'index.php?archive-category=$matches[1]&paged=$matches[2]',
      'author/([^/]+)/page/([0-9]{1,})/?$'           => 'index.php?author=$matches[1]&paged=$matches[2]',
      'author/([^/]+)/?$'                            => 'index.php?author=$matches[1]',
    );

    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
  }
  add_action( 'generate_rewrite_rules', 'rewrite_rules' );

  // redirect media attachment to 404
  function cleanup_default_rewrite_rules( $rules ) {
      foreach ( $rules as $regex => $query ) {
          if ( strpos( $regex, 'attachment' ) || strpos( $query, 'attachment' ) ) {
              unset( $rules[ $regex ] );
          }
      }

      return $rules;
  }
  add_filter( 'rewrite_rules_array', 'cleanup_default_rewrite_rules' );

  function cleanup_attachment_link( $link ) {
      return;
  }
  add_filter( 'attachment_link', 'cleanup_attachment_link' );

}
