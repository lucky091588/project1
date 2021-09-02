<div class="sidebar js-sidebar">
  <div class="js-sidebar-wrapper">
    <div class="sidebar__content sidebar__ads">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- ZOOREL_sidebar_responsive -->
      <ins class="adsbygoogle sidebar__ads-main"
           style="display:block"
           data-ad-client="ca-pub-3789437173469051"
           data-ad-slot="3405987307"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>

    <section class="sidebar__content sidebar__content--query">
      <div class="sidebar__content-wrapper">
        <h3 class="sidebar__content-title">NEW POSTS</h3>
        <?php
          $article_query = array(
            'modifier'       => 'sidebar',
            'image_eyecatch' => 'eyecatch_size_small',
            'custom_query'   => recent_article_query(),
          );
          importPart('article-query', $article_query);
        ?>
      </div>
    </section>

    <section class="sidebar__content sidebar__content--tags">
      <div class="sidebar__content-wrapper">
        <h3 class="sidebar__content-title">TAGS</h3>
          <?php
          $terms_tag = sidebar_tag_query();
          if ( $terms_tag && !is_wp_error( $terms_tag ) ) :
        ?>
          <ul class="article-tag">
            <?php foreach($terms_tag as $tag): ?>
                <li class="article-tag__item">
                  <a class="article-tag__link " href="<?php echo get_term_link($tag->slug, $tag->taxonomy); ?>">
                    <span><?php echo $tag->name; ?></span>
                  </a>
                </li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <p class="sidebar__no-result">タグが見つかりません</p>
        <?php endif; ?>
      </div>
    </section>

    <section class="sidebar__content sidebar__content--query sidebar__content--most-viewed">
      <div class="sidebar__content-wrapper">
        <h3 class="sidebar__content-title">RANKING</h3>
        <?php
          $article_query = array(
            'modifier'       => 'sidebar article-query--most-viewed',
            'image_eyecatch' => 'eyecatch_size_small',
            'string_limiter' => 25,
            'rank'           => true,
            'custom_query'   => sidebar_most_viewed_article_query(),
          );
          importPart('article-query', $article_query);
        ?>
      </div>
    </section>

    <div class="sidebar__links">
      <a class="sidebar__links-content" href="http://bacter.elephantstone.net/" target="_blank">
        <span class="sidebar__links-bacter icon-bacter"></span>
        <p class="sidebar__links-description">
          エレファントストーンがお届けする<br>
          アウターブランディングサイト
        </p>
      </a>
      <a class="sidebar__links-content sidebar__links-content--contact" href="<?php echo resolve_url(CONTACT_SLUG); ?>">
        <p class="sidebar__links-title"><span>CONTACT</span> US</p>
        <p class="sidebar__links-description">動画制作・映像制作でお困りの方はこちら</p>
      </a>
    </div>

  </div>
</div>
