<?php
/**
 * The template for displaying search results pages
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package Sample_Theme
 */

get_header(); ?>
<main class="l-main l-main--page">

    <?php
      $bread_crumbs = array(
        'bread_crumbs' => array (
          array(
            'title' => 'SEARCH',
          ),
        )
      );
    ?>
    <?php importPart('breadcrumbs', $bread_crumbs); ?>

    <?php
      $heading_args = array(
        'heading_title'       => 'SEARCH: ' . get_search_query() ,
        'heading_description' => '記事の検索リスト',
      );
    ?>
    <?php importPart('heading', $heading_args); ?>

    <?php importTemplate('modules/archive-archive'); ?>

  </main>
<?php
get_footer();
