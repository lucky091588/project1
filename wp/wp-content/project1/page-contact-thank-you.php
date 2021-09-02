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
            'title' => CONTACT_TITLE,
            'link'  => resolve_url(CONTACT_SLUG),
          ),
          array(
            'title' => 'THANK YOU',
          ),
        )
      );
    ?>
    <?php importPart('breadcrumbs', $bread_crumbs); ?>

    <div class="page-content page-content--thank-you">
      <div class="l-container l-container--bg l-container--content">
        <div class="page-content__wrapper page-content__wrapper--center">
          <h1 class="page-content__title">THANK YOU <em>ご応募ありがとうございました。</em></h1>
          <p class="page-content__paragraph">折り返し、確認メール（自動送信）を送信させていただいております。<br>その他、何かご不明な点がございましたら、お気軽にお問い合わせください。</p>
          <div class="page-content__button">
            <a class="button button--submit button--thank-you" href="<?php echo get_top_url(); ?>">TOPへ戻る</a>
          </div>
        </div>
      </div>
    </div>

  </main>
<?php
get_footer();
