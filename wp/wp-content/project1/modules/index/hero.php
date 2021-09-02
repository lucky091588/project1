<?php
  $hero_slider_query = recent_article_query();
  if($hero_slider_query->have_posts()):
?>
<div class="hero">
  <div class="hero__slider-tagline-wrapper">
    <p class="hero__slider-tagline">
      <span>From</span><br>
      <span>Sarugaku-cho</span><br>
      <span>to Everywhere</span>
    </p>
  </div>
  <div class="l-container l-container--bg">
    <div class="hero__wrapper">
      <p class="hero__slider-info">Video production industry media<br> from elephant stone.</p>
      <div class="hero__slider-counter js-hero-slider-counter">
        <span class="hero__slider-counter-active js-slide-current">01</span>
        <span class="hero__slider-counter-sep"></span>
        <span class="hero__slider-counter-total js-slide-total">03</span>
      </div>
      <ul class="hero__slider" id="js-hero-slider">
        <?php
          while($hero_slider_query->have_posts()): $hero_slider_query->the_post();

          $category           = get_the_terms( get_the_ID(), ARCHIVE_TAX_CAT );
          $main_category_name = $category[0]->name;
        ?>
          <li class="hero__slider-item">
            <article class="hero__slider-article">
              <a class="hero__slider-link" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo get_eyecatch_data( get_the_ID(), 'hero_slide_size', resolve_image_uri('no-image.jpg')); ?>);">
                <div class="hero__slider-details">
                  <div class="hero__slider-cat-date">
                    <p class="hero__slider-cat"><?php echo strtoupper($main_category_name); ?></p>
                    <time class="hero__slider-date" datetime="<?php the_time('Y-m-d'); ?>"><?php echo the_time('Y.m.d'); ?></time>
                  </div>
                  <div class="hero__slider-title-wrapper">
                    <?php
                      $title_pieces = explode("　", get_the_title());
                      $count_pieces = 0;
                    ?>
                      <h2 class="hero__slider-title">
                        <?php foreach($title_pieces as $title): $count_pieces++; ?>
                          <span class="<?php echo $count_pieces == 1 ? 'hero__slider-title-top' : 'hero__slider-title-bottom'; ?>"><?php echo $title; ?></span><br>
                        <?php endforeach; ?>
                      </h2>
                  </div>
                </div>
              </a>
            </article>
          </li>
        <?php endwhile; wp_reset_query();?>
      </ul>
    </div>
  </div>
</div>
<?php endif; ?>
