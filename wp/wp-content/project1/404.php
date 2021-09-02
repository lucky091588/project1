<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
  <main class="l-main l-main--page">

    <?php
      $bread_crumbs = array(
        'bread_crumbs' => array (
          array(
            'title' => 'NOT FOUND',
          ),
        )
      );
    ?>
    <?php importPart('breadcrumbs', $bread_crumbs); ?>

    <div class="page-content page-content--404">
      <div class="l-container l-container--bg l-container--content">
        <div class="page-content__wrapper page-content__wrapper--center">
          <h1 class="page-content__title">NOT FOUND <em>404</em></h1>
          <p class="page-content__paragraph">お探しのページは見つかりませんでした。<br>URLが間違っていないか、ご確認ください。</p>
        </div>
      </div>
    </div>

    <section class="article-related article-related--new-posts">
      <div class="l-container l-container--bg">
        <div class="article-related__wrapper">
          <h2 class="article-related__heading">NEW POSTS <span>新着記事</span></h2>
          <?php
            $article_query = array(
              'modifier'       => 'new-posts',
              'custom_query'   => recent_article_query(),
            );
            importPart('article-query', $article_query);
          ?>
        </div>
      </div>
    </section>

  </main>
<?php
get_footer();
