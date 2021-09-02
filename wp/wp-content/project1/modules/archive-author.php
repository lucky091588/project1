<div class="article-main article-main--archive">
  <div class="l-container l-container--bg">
    <div class="article-main__wrapper flex">
      <div class="article-main__content">
        <?php
          global $wp_query;
          $article_query = array(
            'modifier'       => 'index',
            'custom_query'   => $wp_query,
          );
          importPart('article-query', $article_query);
        ?>
        <?php importTemplate('modules/pagination'); ?>
      </div>
      <div class="article-main__sidebar">
        <?php importPart('sidebar'); ?>
      </div>
    </div>
  </div>
</div>
