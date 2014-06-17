<!DOCTYPE html>
<html lang="de">
<head>

  <title><?php echo html($page->title() . ' - ' . $site->title()) ?></title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300' rel='stylesheet' type='text/css'>

  <?php echo css('assets/css/leaflet.css') ?>
  <?php echo css('assets/css/leaflet.awesome-markers.css') ?>

  <?php echo css('assets/css/site.css') ?>

  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

  <?php echo js('assets/js/all.min.js') ?>

</head>
  <body>

    <nav class="mobile-nav-container toggle-target">
      <?php snippet('nav-mobile') ?>
    </nav>

    <a href="#" class="mobile-nav-toggle btn toggle" data-toggle-target=".mobile-nav-container"><i class="fa fa-bars"></i></a>