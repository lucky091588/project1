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
            'title' => ABOUT_TITLE,
            'link'  => resolve_url(ABOUT_SLUG),
          ),
        )
      );
    ?>
    <?php importPart('breadcrumbs', $bread_crumbs); ?>

    <div class="page-content page-content--about">
      <div class="l-container l-container--bg l-container--content">
        <div class="page-content__wrapper page-content__wrapper--center">
          <h1 class="page-content__title u-sp-hidden">ABOUT ZOOREL <em>このサイトについて</em></h1>
          <p class="page-content__title u-pc-hidden">ABOUT US <em>お問い合わせ</em></p>
          <p class="page-content__paragraph">あらゆる想いを象るエレファントストーンが、<br>
          お届けする先見的オウンドメディアです。</p>
          <p class="page-content__paragraph">いろんな角度から想いに触れることで <br>
          新たな映像のカタチが生まれるのではないかと考え、<br>
          私たちが大切にしている「象る」を <br>
          音読みという側面からのぞいてみたら、</p>
          <p class="page-content__paragraph">ぞうれる？ゾーれる？</p>
          <p class="page-content__paragraph">ZOOREL が誕生しました。</p>
          <p class="page-content__paragraph">たくさんの「象」が集まってきたらいいな、<br>
          と願いを込めて象は敢えて ZOO（動物園）にしました。<br>
          ズーレルではなく、ゾーレルです。</p>
          <p class="page-content__paragraph">
            <img class="page-content__image" src="<?php echo resolve_image_uri('image-about.jpg'); ?>" alt="" />
          </p>
        </div>
      </div>
    </div>

    <section class="page-about">
      <div class="l-container l-container--bg">
        <div class="page-about__wrapper">
          <p class="page-about__background-title">About Us</p>
          <div class="page-about__content">
            <h2 class="page-about__title">運営会社情報</h2>
            <table class="page-about__table">
              <tbody class="page-about__body">
                <tr class="page-about__row">
                  <td class="page-about__column page-about__column-title">会社名</td>
                  <td class="page-about__column page-about__column-description">株式会社エレファントストーン(ELEPHANTSTONE Co.,Ltd.)</td>
                </tr>
                <tr class="page-about__row">
                  <td class="page-about__column page-about__column-title">設立</td>
                  <td class="page-about__column page-about__column-description">2011年4月</td>
                </tr>
                <?php if(get_field('company_info')): ?>
                  <?php while(has_sub_field('company_info')): ?>
                    <tr class="page-about__row">
                      <td class="page-about__column page-about__column-title"><?php the_sub_field('title'); ?></td>
                      <td class="page-about__column page-about__column-description">
                        <?php if(get_sub_field('description_type') == 'wysiwyg'): ?>
                          <?php the_sub_field('description_content'); ?>
                        <?php else: ?>
                          <?php the_sub_field('description_text'); ?>
                        <?php endif; ?>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php
get_footer();
