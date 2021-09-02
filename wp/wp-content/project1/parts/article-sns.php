<ul class="article-single__sns<?php echo !empty($modifier) ? ' article-single__sns--'.$modifier : ''; ?>">
  <li class="article-single__sns-item">
    <a class="article-single__sns-link article-single__sns-link--facebook" data-type="facebook" href="http://www.facebook.com/share.php?u=<?php echo urlencode(get_the_permalink()); ?>" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">
      <span class="article-single__sns-icon icon-facebook-sns"></span>
      <span class="article-single__sns-icon-sp icon-facebook"></span>
    </a>
  </li>
  <li class="article-single__sns-item">
    <a class="article-single__sns-link article-single__sns-link--twitter" data-type="twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_the_permalink()); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>">
      <span class="article-single__sns-icon icon-twitter-sns"></span>
      <span class="article-single__sns-icon-sp icon-twitter"></span>
    </a>
  </li>
  <li class="article-single__sns-item">
    <a class="article-single__sns-link article-single__sns-link--bookmark hatena-bookmark-button" data-hatena-bookmark-width="<?php echo !empty($hetena_height) ? $hetena_width : 123; ?>" data-hatena-bookmark-height="<?php echo !empty($hetena_height) ? $hetena_height : 28; ?>" href="http://b.hatena.ne.jp/entry/" data-hatena-bookmark-layout="basic-label" data-hatena-bookmark-lang="ja" title="<?php the_title(); ?>">
      <span class="article-single__sns-icon icon-bookmark-sns"></span>
    </a>
    <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button article-single__sns-link article-single__sns-link--bookmark-sp" data-hatena-bookmark-layout="touch" data-hatena-bookmark-width="44" data-hatena-bookmark-height="44" title="<?php the_title(); ?>">
      <span class="article-single__sns-icon-sp icon-bookmark"></span>
    </a>
  </li>
  <li class="article-single__sns-item">
    <a class="article-single__sns-link article-single__sns-link--line" target="_blank" href="http://line.me/R/msg/text/?<?php echo urlencode(get_the_permalink()); ?>">
      <span class="article-single__sns-icon icon-line-sns"></span>
      <span class="article-single__sns-icon-sp icon-line"></span>
    </a>
  </li>
</ul>
