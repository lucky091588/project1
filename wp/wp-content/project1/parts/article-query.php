<?php if ( $custom_query->have_posts() ) : ?>
  <div class="article-query<?php echo !empty($modifier) ? ' article-query--'.$modifier : ''; ?>">
    <ul class="article-query__inner flex flex-wrap"<?php echo !empty($modifier) == 'pickup' ? ' id="js-'.$modifier.'-slider"' : ''; ?>>
      <?php
        $eyecatch_image     = !empty($image_eyecatch) ? $image_eyecatch : 'eyecatch_size';
        $string_limit       = !empty($string_limiter) ? $string_limiter : 43;
        $count_article      = 1;
        while($custom_query->have_posts()): $custom_query->the_post();
        $category           = get_the_terms( get_the_ID(), ARCHIVE_TAX_CAT );
        $main_category_name = $category[0]->name;
      ?>
      <li class="article-query__item">
        <article class="article-query__article">
          <a class="article-query__link" href="<?php the_permalink(); ?>">
            <?php if(!empty($rank)): ?>
              <em class="article-query__rank">
                <?php echo $count_article; $count_article++; ?>
              </em>
            <?php endif; ?>
            <div class="article-query__eyecatch-wrapper">
              <div class="article-query__eyecatch" style="background-image: url(<?php echo get_eyecatch_data( get_the_ID(), $eyecatch_image, resolve_image_uri('no-image.jpg')); ?>);"></div>
            </div>
            <div class="article-query__cat-date">
              <p class="article-query__cat"><?php echo strtoupper($main_category_name); ?></p>
              <time class="article-query__date" datetime="<?php the_time('Y-m-d'); ?>"><?php echo the_time('Y.m.d'); ?></time>
            </div>
            <?php $title = str_replace("　", "", get_the_title()); ?>
            <?php if(!empty($heading_tag)): ?>
              <<?php echo $heading_tag; ?> class="article-query__title js-title-ellipsis"><?php echo $title; ?></<?php echo $heading_tag; ?>>
            <?php else: ?>
              <h3 class="article-query__title js-title-ellipsis"><?php echo $title; ?></h3>
            <?php endif; ?>
          </a>
        </article>
      </li>
      <?php endwhile; wp_reset_query();?>
    </ul>
  </div>
<?php else:?>
    <p class="article-query__no-article">該当する記事がありません。</p>
<?php endif;?>
