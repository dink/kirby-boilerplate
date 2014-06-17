<ul class="mobile-nav bare-list" data-ui-component="mobile-nav">
  <?php foreach($pages->visible() AS $p): ?><!--
  --><li class="<?php ecco(mgPage::showSubpages($p), 'dropdown'); ?>">
    <a class="<?php ecco(mgPage::showSubpages($p), 'dropdown__toggle'); ?> <?php echo ($p->isOpen()) ? ' active ' : '' ?>" href="<?php echo $p->url() ?>">
      <?php echo html($p->title()) ?>
      <?php if (mgPage::showSubpages($p)): ?>
        <span class="dropdown__icon fa fa-caret-down"></span>
      <?php endif; ?>
    </a>
    <?php if (mgPage::showSubpages($p)): ?>
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
