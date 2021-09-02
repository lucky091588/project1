<?php
  $category         = get_the_terms( get_the_ID(), ARCHIVE_TAX_CAT );
  $mainCategorySlug = $category[0]->slug;
?>
<section class="article-related">
  <h2 class="article-related__heading">RELATED ARTICLES <span>関連記事</span></h2>
  <?php
    $article_query = array(
      'modifier'       => 'single',
      'custom_query'   => related_article_query($mainCategorySlug , get_the_ID()),
    );
    importPart('article-query', $article_query);
  ?>
</section>
