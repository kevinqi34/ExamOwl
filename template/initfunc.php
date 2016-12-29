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


// Creates Slugs
function createSlug($string) {

    $table = array(
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-'
    );

    // -- Remove duplicated spaces
    $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);

    // -- Returns the slug
    return strtolower(strtr($string, $table));


}

// Redirects if user is not logged in
function check_login() {
	$user = $_SESSION['email'];
	if (!$user) {
		// Redirect to Login
		$msg = "Please login to use this feature.";
		header("Location: ./user/login.php?msg=" . $msg);
	} else {
		return false;
	}

}


// Date Time Conversion
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
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

	public function display_title() {
		// Grab Variables
		$title = $_GET["title"];
		if ($title) {
			echo "Exam Owl | " . $title;
		} else {
			echo $this->title;
		}

	}



}







?>
