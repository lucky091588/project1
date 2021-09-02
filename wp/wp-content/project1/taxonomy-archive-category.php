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
      $term = get_queried_object();
      $bread_crumbs = array(
        'bread_crumbs' => array (
          array(
            'title' => strtoupper(single_cat_title("", false)),
            'link'  => resolve_url(ARCHIVE_POST_TYPE . '/' . $term->slug),
          ),
        )
      );
      importPart('breadcrumbs', $bread_crumbs);

      $heading_args = array(
        'heading_title'       => single_cat_title("", false),
        'heading_description' => get_field('archive_category_title_jp', $term). 'の記事一覧',
      );
      importPart('heading', $heading_args);

      importTemplate('modules/archive-archive');
    ?>

  </main>

<?php
get_footer();
