<?php 

class mgPage {
  public static $noSubpageDisplay = array (
    'list-partner',
    'list-cv'
  );

  static public function isEmpty ($obj) {
    $string = (string)$obj;
    return empty($string);
  }

  static public function showSubpages ($p) {
    return $p->hasChildren() && $p->children()->visible()->count() > 0 && (!in_array($p->template(), mgPage::$noSubpageDisplay));
  }

  static public function thumb($obj, $options=array()) {
    if ($obj) {
      $thumb = new thumb($obj, $options);
      return $thumb->url();  
    }
    else {
      return "http://placehold.it/" . $options['width'] . "x" . $options['height'] . "&text=&nbsp;";
    }
  }

  static function theme_block ($title, $data, $template = 'block') {
    return snippet($template, array('data' => array(
      'title' => $title,
      'data' => $data,
    )), true);
  }
}

?>