<ul class="mobile-nav list-bare" data-ui-component="mobile-nav">
  <?php foreach($pages->visible() AS $p): ?><!--
  --><li class="<?php ecco(mg::showSubpages($p), 'dropdown'); ?>">
    <a class="<?php ecco(mg::showSubpages($p), 'dropdown__toggle'); ?> <?php echo ($p->isOpen()) ? ' active ' : '' ?>" href="<?php echo $p->url() ?>">
      <?php echo html($p->title()) ?>
      <?php if (mg::showSubpages($p)): ?>
        <span class="dropdown__icon fa fa-caret-down"></span>
      <?php endif; ?>
    </a>
    <?php if (mg::showSubpages($p)): ?>
      <ul class="nav dropdown__menu">
        <?php foreach ($p->children as $child): ?>
          <li>
            <a<?php echo ($child->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $child->url() ?>"><?php echo html($child->title()) ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </li><!--
--><?php endforeach ?>
</ul>
