<?php

return array(
  'title' => 'Support @ mgf',
  'html'  => function() {
    // any data for the template
    $data = array();
    return tpl::load(__DIR__ . DS . 'template.php', $data);
  }
);
