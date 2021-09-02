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
      $bread_crumbs = array(
        'bread_crumbs' => array (
          array(
            'title' => ARCHIVE_TITLE,
            'link'  => resolve_url(ARCHIVE_POST_TYPE),
          ),
        )
      );
    ?>
    <?php importPart('breadcrumbs', $bread_crumbs); ?>

    <?php
      $heading_args = array(
        'heading_title'       => ARCHIVE_POST_TYPE_LABEL,
        'heading_description' => '記事一覧',
      );
    ?>
    <?php importPart('heading', $heading_args); ?>

    <?php importTemplate('modules/archive-archive'); ?>

  </main>
<?php
get_footer();
