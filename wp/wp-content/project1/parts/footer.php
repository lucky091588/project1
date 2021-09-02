<footer class="l-footer footer">
  <div class="footer-sites">
    <div class="l-container flex flex-align-center">
      <h2 class="footer-sites__label">OTHER SITES</h2>
      <div class="footer-sites__nav">
        <ul class="footer-sites__nav-inner">
          <li class="footer-sites__nav-item footer-sites__nav-item--estones">
            <a class="footer-sites__nav-link" href="<?php echo ELEPHANT_STONE_URL; ?>" target="_blank">
              <img src="<?php echo resolve_image_uri('logo-elephant-stone.png'); ?>" alt=""/>
            </a>
          </li>
          <li class="footer-sites__nav-item footer-sites__nav-item--bacter">
            <a class="footer-sites__nav-link" href="<?php echo BACTER_URL; ?>" target="_blank">
              <span class="icon-bacter"></span>
            </a>
          </li>
          <li class="footer-sites__nav-item footer-sites__nav-item--kanko">
            <a class="footer-sites__nav-link" href="<?php echo KANKO_MOVIE_URL; ?>" target="_blank">
              <span>KANKO-MOVIE.com</span>
            </a>
          </li>
          <li class="footer-sites__nav-item footer-sites__nav-item--mansion">
            <a class="footer-sites__nav-link" href="<?php echo MANSION_MOVIE_URL; ?>" target="_blank">
              <span class="icon-mansion"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-main">
    <div class="l-container flex flex-align-center">
      <div class="footer-main__wrapper footer-left">
        <div class="footer-logo">
          <a class="footer-logo__link" href="<?php echo get_top_url(); ?>">
            <svg role="img" class="footer-logo__svg">
                <use xlink:href="#footer-logo__svg-symbol"></use>
            </svg>
          </a>
        </div>
        <div class="footer-nav">
          <ul class="footer-nav__inner">
            <li class="footer-nav__item">
              <a class="footer-nav__link" href="<?php echo get_top_url(); ?>">
                <span>TOP</span>
              </a>
            </li>
            <li class="footer-nav__item">
              <a class="footer-nav__link" href="<?php echo resolve_url('about'); ?>">
                <span>ABOUT</span>
              </a>
            </li>
            <li class="footer-nav__item">
              <a class="footer-nav__link" href="<?php echo resolve_url(CONTACT_SLUG); ?>">
                <span>CONTACT</span>
              </a>
            </li>
            <li class="footer-nav__item">
              <a class="footer-nav__link" href="https://elephantstone.net/privacy" target="_blank">
                <span>PRIVACY POLICY</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-main__wrapper footer-right">
        <div class="social-media">
          <ul class="social-media__inner">
            <li class="social-media__item">
              <a class="social-media__link" href="https://twitter.com/ZOOREL_com" target="_blank">
                <span class="icon-twitter"></span>
              </a>
            </li>
            <li class="social-media__item">
              <a class="social-media__link" href="https://www.facebook.com/ZOORELfromES" target="_blank">
                <span class="icon-facebook"></span>
              </a>
            </li>
            <li class="social-media__item">
              <a class="social-media__link" href="<?php echo resolve_url('feed'); ?>">
                <span class="icon-rss"></span>
              </a>
            </li>
          </ul>
        </div>
        <p class="copyright"><small><?php echo COPYRIGHT; ?></small></p>
      </div>
    </div>
  </div>
</footer>
