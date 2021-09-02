<div class="article-main">
  <div class="l-container l-container--bg">
    <div class="article-main__wrapper flex">
      <div class="article-main__content">
        <div class="article-main__content-wrapper js-article-index">
          <?php
            $article_query = array(
              'modifier'       => 'index',
              'custom_query'   => index_article_query(),
            );
            importPart('article-query', $article_query);
          ?>
          <div class="article-main__button">
            <a class="button button__index" href="<?php echo resolve_url(ARCHIVE_POST_TYPE); ?>">
              <span>VIEW MORE</span>
            </a>
          </div>
        </div>
      </div>
      <div class="article-main__sidebar">
        <?php importPart('sidebar'); ?>
      </div>
    </div>
  </div>
</div>
