<?php if(get_field('pick_up_4_article','option')): ?>
<section class="pickup">
  <div class="l-container l-container--bg">
    <div class="pickup__wrapper">
      <p class="pickup__title">PICK UP <span>ARTICLES</span></p>
      <h2 class="pickup__title-label"><span>PICK</span> UP ARTICLES</h2>
      <div class="pickup__articles">
        <?php
          $article_query = array(
            'modifier'       => 'pickup',
            'image_eyecatch' => 'eyecatch_size_medium',
            'custom_query'   => pick_up_article_query( get_field('pick_up_4_article','option') ),
          );
          importPart('article-query', $article_query);
        ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
