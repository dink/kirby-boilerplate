<!DOCTYPE html>
<html lang="de">
<head>

  <title><?php echo html($page->title() . ' - ' . $site->title()) ?></title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <!-- Icons -->
  <!-- http://realfavicongenerator.net/ -->
  <link rel="shortcut icon" href="/assets/images/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicons/apple-touch-icon-152x152.png">
  <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-196x196.png" sizes="196x196">
  <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/assets/images/favicons/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#9f00a7">
  <meta name="msapplication-TileImage" content="/assets/images/favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="/assets/images/favicons/browserconfig.xml">

  <!-- Prefetch DNS for external assets (Twitter widgets etc). -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//themes.googleusercontent.com">

  <!-- Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,600,300">

  <?php echo css('assets/css/libs.css') ?>
  <?php echo css('assets/css/site.css') ?>

  <?php echo js('assets/js/site.js') ?>

  <?php echo html::shiv(); ?>

</head>
  <body>

  <!--[if lt IE 9]>
    <p class="browsehappy">Sie verwenden einen <strong>veralteten</strong> Browser. Bitte <a href="http://www.whatbrowser.org/intl/de/" target="_blank">aktualisieren Sie Ihren Browser</a> um diese Website am besten darstellen zu können.</p>
  <![endif]-->

  <div class="page-head">

    <div class="wrapper">

      <nav class="site-nav">

          <a href="/" class="site-nav__home">
            <?php echo $site->title(); ?>
          </a>

          <?php snippet ('nav'); ?>

      </nav>

    </div>

  </div>



