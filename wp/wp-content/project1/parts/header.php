<header class="l-header header<?php echo !empty($modifier) ? ' l-header--'.$modifier.' header--'.$modifier : ''; echo is_front_page() ? ' js-header-home' : ''; ?>">
  <div class="header__pc">
    <div class="l-container <?php echo is_front_page() ? 'l-container--bg' : 'l-container--max'; ?>">
      <div class="header__wrapper clearfix">
        <div class="logo<?php echo !empty($modifier) ? ' logo--'.$modifier : '';?>">
          <a class="logo__link" href="<?php echo get_top_url(); ?>">
            <?php if(is_front_page()): ?>
              <h1>
                <svg role="img" class="logo__svg">
                    <title>Zoorel</title>
                    <use xlink:href="#logo__svg-symbol"/>
                </svg>
              </h1>
            <?php else: ?>
              <svg role="img" class="logo__svg">
                  <title>Zoorel</title>
                  <use xlink:href="#logo__svg-symbol"/>
              </svg>
            <?php endif; ?>
          </a>
        </div>
        <?php
          $term_slug = '';
          if(is_singular( ARCHIVE_POST_TYPE )){
            $term = get_the_terms( get_the_ID(), ARCHIVE_TAX_CAT );
            $term_slug = !empty($term[0]->slug) ? $term[0]->slug : '';
          }
        ?>
        <div class="nav<?php echo !empty($modifier) ? ' nav--'.$modifier : '';?>">
          <ul class="nav__inner">
            <li class="nav__item">
              <a class="nav__link<?php echo (is_tax( ARCHIVE_CATEGORY_SLUG, 'news' ) || $term_slug == 'news' )  ? ' is-current' : '' ?>" href="<?php echo resolve_url(ARCHIVE_POST_TYPE . '/news'); ?>">
                <span class="nav__lang nav__lang--en">NEWS</span>
                <span class="nav__lang nav__lang--jp">ニュース</span>
              </a>
            </li>
            <li class="nav__item">
              <a class="nav__link<?php echo (is_tax( ARCHIVE_CATEGORY_SLUG, 'how-to-tips' ) || $term_slug == 'how-to-tips' )  ? ' is-current' : '' ?>" href="<?php echo resolve_url(ARCHIVE_POST_TYPE . '/how-to-tips'); ?>">
                <span class="nav__lang nav__lang--en">HOW TO・TIPS</span>
                <span class="nav__lang nav__lang--jp">ノウハウ/コツ</span>
              </a>
            </li>
            <li class="nav__item">
              <a class="nav__link<?php echo (is_tax( ARCHIVE_CATEGORY_SLUG, 'marketing' ) || $term_slug == 'marketing' )  ? ' is-current' : '' ?>" href="<?php echo resolve_url(ARCHIVE_POST_TYPE . '/marketing'); ?>">
                <span class="nav__lang nav__lang--en">MARKETING</span>
                <span class="nav__lang nav__lang--jp">マーケティング</span>
              </a>
            </li>
            <li class="nav__item">
              <a class="nav__link<?php echo (is_tax( ARCHIVE_CATEGORY_SLUG, 'special' ) || $term_slug == 'special' )  ? ' is-current' : '' ?>" href="<?php echo resolve_url(ARCHIVE_POST_TYPE . '/special'); ?>">
                <span class="nav__lang nav__lang--en">SPECIAL</span>
                <span class="nav__lang nav__lang--jp">スペシャル</span>
              </a>
            </li>
            <li class="nav__item nav__item--icon">
              <a class="nav__link" href="http://bacter.elephantstone.net/" target="_blank">
                <span class="icon-menu"></span>
              </a>
            </li>
            <li class="nav__item nav__item--search">
              <form role="search" method="get" class="search-form search-form--pc js-search" action="<?php echo home_url( '/' ); ?>">
                <input type="hidden" name="post_type" value="archive" />
                <input type="search" class="search-form__field js-search-input" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" name="s" />
              </form>
              <a class="nav__link js-nav-search" href="#">
                <span class="icon-search nav__icon-search"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header-sp<?php echo is_front_page() ? ' header-sp--home' : ''; ?>">
    <div class="l-container">
      <div class="nav__hamburger clearfix">
        <div class="logo<?php echo !empty($modifier) ? ' logo--'.$modifier : '';?>">
          <a class="logo__link" href="<?php echo get_top_url(); ?>">
            <svg role="img" class="logo__svg">
                <title>Zoorel</title>
                <use xlink:href="#logo__svg-symbol"/>
            </svg>
          </a>
        </div>
        <button class="nav__button u-notap" type="button" id="js-nav-button">
          <span class="nav__button-icon"></span>
          <span class="nav__button-icon"></span>
          <span class="nav__button-icon"></span>
        </button>
      </div>
      <div class="nav js-nav-sp nav--sp">
        <div class="nav-sp__wrapper">
          <form role="search" method="get" class="search-form search-form--sp" action="<?php echo home_url( '/' ); ?>">
            <input type="hidden" name="post_type" value="archive" />
            <input type="search" class="search-form__field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"  name="s" />
            <span class="icon-search"></span>
            <input class="search-form__submit" type="submit" id="searchsubmit" />
          </form>
          <ul class="nav__inner">
            <li class="nav__item">
              <a class="nav__link<?php echo (is_tax( ARCHIVE_CATEGORY_SLUG, 'news' ) || $term_slug == 'news' )  ? ' is-current' : '' ?>" href="<?php echo resolve_url(ARCHIVE_POST_TYPE . '/news'); ?>">
                <span class="nav__lang nav__lang--en">NEWS</span>
                <span class="nav__lang nav__lang--jp">ニュース</span>
              </a>
            </li>
            <li class="nav__item">
              <a class="nav__link<?php echo (is_tax( ARCHIVE_CATEGORY_SLUG, 'how-to-tips' ) || $term_slug == 'how-to-tips' )  ? ' is-current' : '' ?>" href="<?php echo resolve_url(ARCHIVE_POST_TYPE . '/how-to-tips'); ?>">
                <span class="nav__lang nav__lang--en">HOW TO・TIPS</span>
                <span class="nav__lang nav__lang--jp">ノウハウ/コツ</span>
              </a>
            </li>
            <li class="nav__item">
              <a class="nav__link<?php echo (is_tax( ARCHIVE_CATEGORY_SLUG, 'marketing' ) || $term_slug == 'marketing' )  ? ' is-current' : '' ?>" href="<?php echo resolve_url(ARCHIVE_POST_TYPE . '/marketing'); ?>">
                <span class="nav__lang nav__lang--en">MARKETING</span>
                <span class="nav__lang nav__lang--jp">マーケティング</span>
              </a>
            </li>
            <li class="nav__item">
              <a class="nav__link<?php echo (is_tax( ARCHIVE_CATEGORY_SLUG, 'special' ) || $term_slug == 'special' )  ? ' is-current' : '' ?>" href="<?php echo resolve_url(ARCHIVE_POST_TYPE . '/special'); ?>">
                <span class="nav__lang nav__lang--en">SPECIAL</span>
                <span class="nav__lang nav__lang--jp">スペシャル</span>
              </a>
            </li>
          </ul>
          <div class="nav__sp-button">
            <a class="button nav__sp-button-link" href="<?php echo resolve_url(CONTACT_SLUG); ?>">
              <span>お問い合わせ</span>
            </a>
            <a class="button nav__sp-button-link" href="<?php echo resolve_url(DOWNLOAD_BROCHURE_SLUG); ?>">
              <span>資料請求</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
