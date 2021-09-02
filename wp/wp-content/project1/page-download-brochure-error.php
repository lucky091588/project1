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
            'title' => DOWNLOAD_BROCHURE_TITLE,
            'link'  => resolve_url(DOWNLOAD_BROCHURE_SLUG),
          ),
        )
      );
    ?>
    <?php importPart('breadcrumbs', $bread_crumbs); ?>

    <div class="page-content page-content--contact page-content--brochure">
      <div class="l-container l-container--bg l-container--content">
        <div class="page-content__wrapper page-content__wrapper--center">
          <h1 class="page-content__title">DOWNLOAD BROCHURE <em>資料請求</em></h1>
          <p class="page-content__paragraph">エレファントストーンが培ってきた動画制作のノウハウをまとめた資料を限定公開中です。<br>無料でダウンロードすることができます。</p>
        </div>
      </div>
    </div>

    <div class="form-steps form-steps--brochure">
      <div class="l-container l-container--bg">
        <div class="form-steps__wrapper">
          <ol class="form-steps__inner clearfix">
            <li class="form-steps__item is-current">
              <span class="form-steps__order">01</span>
              <span class="form-steps__label">入力画面</span>
            </li>
            <li class="form-steps__item">
              <span class="form-steps__order">02</span>
              <span class="form-steps__label">入力内容の確認</span>
            </li>
            <li class="form-steps__item">
              <span class="form-steps__order">03</span>
              <span class="form-steps__label">送信画面</span>
            </li>
          </ol>
        </div>
      </div>
    </div>

    <div class="page-contact  page-contact--brochure">
      <div class="l-container l-container--bg">
        <div class="form-main form-main--contact form">
          <div class="form-main__inner">
            <?php echo do_shortcode('[mwform_formkey key="473"]');?>
          </div>
        </div>
      </div>
    </div>

  </main>
<?php
get_footer();
