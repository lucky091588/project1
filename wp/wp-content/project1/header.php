<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title('|'); ?></title>
  <base href="/">
  <link rel="shortcut icon" href="<?php echo resolve_image_uri('favicon/favicon.ico'); ?>">
  <link rel="apple-touch-icon-precomposed" href="<?php echo resolve_image_uri('favicon/apple-icon.png'); ?>">
  <link rel="stylesheet" href="<?php echo resolve_asset_uri('css/style.css'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">

  <?php if(!is_single() || is_archive()): ?>
    <meta property="og:image" content="<?php echo resolve_image_uri('ogp.jpg'); ?>">
  <?php elseif(is_single() && !get_the_post_thumbnail()): ?>
    <meta property="og:image" content="<?php echo resolve_image_uri('ogp.jpg'); ?>">
  <?php endif; ?>

  <?php if(is_single() && !$post->post_content): ?>
    <meta name="description" content="<?php the_title(); ?>"/>
    <meta name="og:description" content="<?php the_title(); ?>"/>
  <?php elseif(is_404()): ?>
    <meta name="description" content="<?php echo ERROR_DESCRIPTION_TAG; ?>"/>
    <meta name="og:description" content="<?php echo ERROR_DESCRIPTION_TAG; ?>"/>
  <?php endif; ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126907431-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126907431-1');
  </script>

  <?php wp_head(); ?>
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '902661326467941');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
                 src="https://www.facebook.com/tr?id=902661326467941&ev=PageView&noscript=1"
    /></noscript>
  <!-- End Facebook Pixel Code -->
  <!-- Global site tag (gtag.js) - Google Ads: 726704776 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-726704776"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-726704776');
  </script>
  <?php
  if ( is_page('thank-you') ) :
    ?>
    <!-- Event snippet for お問い合わせ conversion page -->
    <script>
      gtag('event', 'conversion', {
        'send_to': 'AW-726704776/0nyZCLy1qqUBEIjFwtoC',
        'transaction_id': ''
      });
    </script>
  <?php
  endif;
  ?>
</head>
<body <?php body_class(); ?> id="js-body">
  <div class="body-background"></div>
  <div class="l-wrapper js-wrapper"> <!-- JS WRAPPER START -->
  <?php importTemplate('svg-icon/svg-icon');?>

  <?php
    $header_args = array();
    if(is_front_page()) {
      $header_args = array(
        'modifier' => 'home',
      );
    }
  ?>
  <?php importPart('header', $header_args);?>
