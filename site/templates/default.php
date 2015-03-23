<?php snippet('header') ?>

<div class="wrapper">
  <h1><?php echo $page->title(); ?></h1>

  <?php echo kirbytext($page->text()); ?>
</div>

<?php snippet('footer') ?>
