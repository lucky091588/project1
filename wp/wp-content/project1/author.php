<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
  <main class="l-main l-main--page">

    <?php
      $curauth = $wp_query->get_queried_object();
      $bread_crumbs = array(
        'bread_crumbs' => array (
          array(
            //'title' => strtoupper($curauth->first_name),
            'title' => 'AUTHOR',
            'link'  => get_author_posts_url( $curauth->ID, $curauth->user_nicename),
          ),
        )
      );
    ?>
    <?php importPart('breadcrumbs', $bread_crumbs); ?>

    <?php
      $heading_args = array(
        'heading_title'       => $curauth->last_name.' '. $curauth->first_name .' の記事',
        'heading_description' => $curauth->last_name.' '. $curauth->first_name .'の記事一覧',
      );
    ?>
    <?php importPart('heading', $heading_args); ?>

    <?php importTemplate('modules/archive-author'); ?>

  </main>
<?php
get_footer();
