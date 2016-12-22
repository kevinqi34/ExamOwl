<?php
// Include Init Func
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');

// Tool Menu Class
class tool_menu extends template {
  // Init Variables
  public $urlList, $items, $ids, $url;

  // Construct Empty Menu
  public function __construct() {
    $this->urlList = array();
    $this->items = array();
    $this->ids = array();
    $this->url = array();
  }

  // Fill Arrays
  public function pushtoArray($arrayelements, $array) {
  	$arrayelements = $elements = explode("|", $arrayelements);
  	for ($i = 0; $i <= count($elements)- 1; $i++) {
  	   array_push($this->$array, $elements[$i]);
  	}
  }

  // Create Menu
  public function createMenu($id, $imgUrl, $element, $url) {
    if ($url == null) {
      for ($i = 0; $i <= count($id)- 1; $i++) {
  		    echo '<div class="category" id="'. $id[$i]. '">';
          echo '<div class="image">';
          echo '<img src="/images/menu/'. $imgUrl[$i] . '" alt="' . $element[$i] .'" >';
          echo '</div>';
          echo  '<h3>'. $element[$i] . '</h3>';
          echo	'</div>';
  		}
  	 } else {
  		for ($i = 0; $i <= count($id)- 1; $i++) {
  		    echo '<div class="category" id="'. $id[$i]. '">';
          echo '<div class="image">';
  		    echo '<img src="/images/menu/'. $imgUrl[$i] . '" alt="' . $element[$i] .'" >';
          echo '</div>';
          echo  '<h3>'. $element[$i] . '</h3>';
          echo  '<a href="' . $url[$i] .'"></a>';
  		    echo	'</div>';
  		 }
  	  }
  	}

    // Create Sub Menu
    public function createSubMenu($catID, $return_value) {
      echo '<div class="menu" id="' . $catID . '" style="display:none">';
      echo "<img src='./images/menu/return.png' alt='return' class='return' onclick='back(\"#" . $catID . "\", \"#" . $return_value . "\");'>";
      echo '<h2>Please Select Option</h2>';
      $this->createMenu($this->ids, $this->urlList, $this->items, $this->url);
      echo '</div>';
    }






}










?>
