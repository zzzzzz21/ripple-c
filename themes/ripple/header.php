<!DOCTYPE HTML>
<!--[if lt IE 8]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ja"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="ja"><![endif]-->
<!--[if IE 9 ]><html class="no-js ie9" lang="ja"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="ja">
<!--<![endif]--><head>
<meta charset="utf-8">

<!-- [TDK] -->
<title><?php
  if (!is_front_page()) {
    wp_title('|', true, 'right');
  }
  bloginfo('name');
?></title>
<meta name="description" content="<?php description(); ?>">
<meta name="keywords" content="<?php keyword(); ?>">
<!-- /[TDK] -->

<!-- [page info] -->
<link rel="canonical" href="<?php if (is_front_page()) { echo home_url('/'); } else { the_permalink(); } ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Ripple co.,ltd.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
<!-- /[page info] -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NG86XQL');</script>
<!-- End Google Tag Manager -->

<!-- [shortcut icons] -->
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="48x48" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/favicon-48x48.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/favicon-160x160.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/favicon-196x196.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/favicon-32x32.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/share/img/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#2d88ef">
<meta name="msapplication-TileImage" content="/share/img/favicons/mstile-144x144.png">
<!-- /[shortcut icons] -->

<!-- [og] -->
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="<?php
  if (is_front_page()) {
    echo 'website';
  } else {
    echo 'article';
  }
?>">
<meta property="og:site_name" content="<?php bloginfo('nmae'); ?>">
<meta property="og:title" content="<?php
  if (!is_front_page()) {
    wp_title('|', true, 'right');
  }
  bloginfo('name');
?>">
<meta property="og:image" content="http://bkh.jp/share/img/common/img_og.jpg">
<meta property="og:url" content="<?php
  if (is_front_page()) {
    echo home_url('/');
  } else {
    the_permalink();
  }
?>">
<meta property="og:description" content="<?php description(); ?>">
<!-- [og] -->

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/share/js/modernizr/modernizr.js">
<script src="<?php echo get_template_directory_uri(); ?>/share/js/selectivizr/selectivizr.js"></script>
<![endif]-->

<!-- [css] -->
<link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/share/css/style.css" media="all">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/share/css/slick.css" media="all">
<!-- /[css] -->

<?php
  wp_deregister_script('jquery');
  wp_head();
?>
</head>
<!-- /[head] -->
<body class="<?php body_class_plus(); ?>" id="data-page">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG86XQL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- [javascript error] -->
<noscript>
  <div id="error-javascript" class="error">
    <div class="error__body">
      <p class="error__element">ブラウザでJavascriptの設定を有効にしてご利用ください。無効の場合、ウェブサイトを正常に閲覧できないことがあります。</p>
    </div>
  </div>
</noscript>
<!-- /[javascript error] -->

<!--[if lte IE 8]>
<div id="error-version" class="error">
  <div class="wrapper error__body">
    <div class="error__element">
      <p>旧式のブラウザでご利用になっています。<br>最新のブラウザにアップデートしてご覧ください。</p>
    </div>
  </div>
  <div class="error__footer">
    <p class="btn-close">閉じる</p>
  </div>
</div>
<![endif]-->

<!-- [.page] -->
<div class="page">
  <div id="top" class="skip-nav">
    <p><a href="#data-header">目次へジャンプ</a></p>
    <p><a href="#data-contents">本文へジャンプ</a></p>
  </div>
  <div class="siteTitle">
    <div class="siteTitle__inner">
      <h1 class="siteLogo"><a href="<?php echo home_url('/'); ?>"><span><img src="<?php echo get_template_directory_uri(); ?>/share/img/logo.png" alt="株式会社リップル"></span></a></h1>
      <div class="siteTitle__shoulder">
        <div class="siteTitle__shoulder__body">
          <p class="siteTitle__shoulder__title">あたりまえに笑顔で過ごせる日々を大切に</p>
          <p>埼玉県越谷市を中心に介護事業を展開する 株式会社礎グループ</p>
        </div>
        <p class="siteTitle__shoulder__img"><a href="http://www.ishizue-c.jp/" target="_blank"><img class="data-switch" src="<?php echo get_template_directory_uri(); ?>/share/img/logo_ishizue_pc.png" alt="株式会社礎グループ"></a></p>
      </div>
    </div>
  </div>
  <!-- /[.siteTitle] -->
  <header id="data-header" class="globalHeader">
    <div class="container">
      <div class="gNav">
        <button id="data-gNav-title" class="gNav__title"><span><span><span></span></span></span></button>
        <nav id="data-gNav-body" class="gNav__body">
          <div class="gNav__contents">
            <p class="siteLogo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/share/img/logo_menu.png" alt="株式会社リップル"></a></p>
            <div>
              <ul class="gNav__contents__body" itemtype="https://schema.org/SiteNavigationElement" itemscope>
                <li class="gNav__item is-home" itemprop="name"><a href="<?php echo home_url('/'); ?>" title="ホーム" itemprop="url"><span>ホーム</span></a></li>
                <li class="gNav__item is-service" itemprop="name"><a href="<?php echo home_url('/'); ?>service/" title="サービス" itemprop="url"><span>サービス</span></a></li>
                <li class="gNav__item is-company" itemprop="name"><a href="<?php echo home_url('/'); ?>company/" title="会社案内" itemprop="url"><span>会社案内</span></a></li>
                <li class="gNav__item is-news" itemprop="name"><a href="<?php echo home_url('/'); ?>news/" title="ニュース" itemprop="url"><span>ニュース</span></a></li>
                <li class="gNav__item is-recruit" itemprop="name"><a href="<?php echo home_url('/'); ?>recruit/" title="採用情報" itemprop="url"><span>採用情報</span></a></li>
                <li class="gNav__item is-contact" itemprop="name"><a href="http://www.ishizue-c.jp/contact" target="_blank" title="お問い合わせ" itemprop="url"><span>お問い合わせ</span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- /[.globalHeader] -->
