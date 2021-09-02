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
        )
      );
    ?>
    <?php importPart('breadcrumbs', $bread_crumbs); ?>

    <div class="page-content page-content--contact">
      <div class="l-container l-container--bg l-container--content">
        <div class="page-content__wrapper page-content__wrapper--center">
          <h1 class="page-content__title">CONTACT <em>お問い合わせ</em></h1>
          <p class="page-content__paragraph">ご相談、料金のお見積りなど、お気軽にお問い合わせください。<br>お問い合わせ内容の確認後、担当者よりご連絡させていただきます。</p>
        </div>
      </div>
    </div>

    <div class="form-steps">
      <div class="l-container l-container--bg">
        <div class="form-steps__wrapper">
          <ol class="form-steps__inner clearfix">
            <li class="form-steps__item">
              <span class="form-steps__order">01</span>
              <span class="form-steps__label">入力画面</span>
            </li>
            <li class="form-steps__item is-current">
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

    <div class="page-contact">
      <div class="l-container l-container--bg">
        <div class="form-main form-main--confirm form-main--contact form">
          <div class="form-main__inner">
            <?php echo do_shortcode('[mwform_formkey key="287"]');?>
          </div>
        </div>
      </div>
    </div>

  </main>
<?php
get_footer();
