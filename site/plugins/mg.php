<?php

class mg {
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

  static public function thumb($obj = null, $options=array()) {
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

  /*
  static public function placeholder ($size = "800x600", $fill = "eee", $color = 'fff', $fontsize = 60, $fontfamiliy = 'Arial') {
    $wh = explode('x', $size);
    $wh[0] = (int)$wh[0];
    $wh[1] = (int)$wh[1];
    $size = $fontsize;

    $output = "";
    $output .= '<svg viewBox="0 0 <?php echo $wh[0] ?> <?php echo $wh[1] ?>" xmlns="http://www.w3.org/2000/svg">';
    $output .= '<g>';
    $output .= '<title>placeholder</title>';
    $output .= '<rect id="svg_1" height="' . $wh[0] . " width="' . $wh[1] . '" y="0" x="0" fill="#' . $fill . '"/>';
    $output .= '<text x="50%" y="50%" text-anchor="middle" alignment-baseline="middle" font-size="' . $size . '" dominant-baseline="middle" font-family="' . $fontfamily . '" fill="#' . $color . '">' . $wh[0] . 'x' . $wh[1] . '</text>';
    $output .= "</g></svg>";

    return $output;
  }
  */
}

?>
