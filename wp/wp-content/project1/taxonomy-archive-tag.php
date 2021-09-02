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
            'title' => strtoupper(single_tag_title("", false)),
            'link'  => resolve_url(ARCHIVE_TAX_TAG . '/' . $term->slug),
          ),
        )
      );
      importPart('breadcrumbs', $bread_crumbs);

      $heading_args = array(
        'heading_title'       => single_tag_title("", false),
        'heading_description' => single_tag_title("", false) . 'の記事一覧',
      );
      importPart('heading', $heading_args);

      importTemplate('modules/archive-archive');
    ?>

  </main>

<?php
get_footer();
