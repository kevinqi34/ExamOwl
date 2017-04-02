<?php
	include_once("minifier.php");

	/* FILES ARRAYs
	 * Keys as input, Values as output */

	$js = array(
	//	"js/application.js" 	=> "js/application.min.js",
	//	"js/main.js" 			=> "js/main.min.js"
	);

	$css = array(
		"../css/admin/admin.css"	=> "./css/admin/admin.min.css"
	);

	minifyJS($js);
	minifyCSS($css);
?>
