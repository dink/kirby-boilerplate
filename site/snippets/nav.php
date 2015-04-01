<?php

// main menu items
$items = $pages->visible();

?>

<?php if($items->count() > 0): ?>
<ul class="site-nav__list">
  <?php foreach($items as $item): ?>
  <li class="site-nav__item"><a class="site-nav__link <?php ecco($item->isOpen(), 'site-nav__link--active') ?>" href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
  <?php endforeach ?>
</ul>
<?php endif ?>
