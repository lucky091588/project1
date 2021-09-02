<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

    <?php importPart('footer-contact'); ?>
    <?php importPart('footer'); ?>
  </div> <!-- JS WRAPPER END -->
  <?php wp_footer(); ?>
  <script src="<?php echo resolve_js_uri('app.js'); ?>" async></script>
  <?php if(is_front_page()) : ?>
    <script src="<?php echo resolve_js_uri('index.js'); ?>"></script>
  <?php endif; ?>
  <?php if(is_singular( ARCHIVE_POST_TYPE )): ?>
    <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
  <?php endif; ?>
<!-- Twitter universal website tag code -->
<script>
  !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
  },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
    a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
  // Insert Twitter Pixel ID and Standard Event data below
  twq('init','o25hn');
  twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->
</body>
</html>
