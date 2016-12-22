<?php

// Adds Citation
$bool = 0;
function set_boolTrue () {

	global $bool;
	$bool = 1;

}


// Gets base url
function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . "/";
}


// Displays Reference to icons

function add_Citation($bool) {

global $bool;
if ($bool == 1) {

echo '<p>Icons made by Freepik from <a href="http:/www.flaticon.com">www.flaticon.com</a></p>';

}

}


// Template Class

class template {
  // variables
  public $title, $keywords, $description, $content;
  // additional style and scripts
  public $css = array(), $js = array();

  // set variables
  public function __construct($title, $keywords, $description, $content) {
  	$this->title = $title;
  	$this->keywords = $keywords;
    $this->description = $description;
  	$this->content = $content;

  }


  public function style_and_scripts($css, $js) {
    $this->css = $css;
    $this->js = $js;
  }

  public function add_style($css) {
    $this->css = $css;
  }

  public function add_script($js) {
    $this->js = $js;
  }


  public function create_stylesheets($css) {
    if (sizeof($css) != 0) {
      foreach ($css as $element) {
        $link = '<link rel="stylesheet" href="' . url() . $element . '">';
        echo $link;
      }
    }

  }

  public function create_scripts($js) {
    if (sizeof($js) != 0) {
      foreach ($js as $element) {
        $link = '<script src="' . url() . $element . '"></script>';
        echo $link;
      }
    }
  }


}







?>
