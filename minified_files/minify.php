<?php
	include_once("minifier.php");

	/* FILES ARRAYs
	 * Keys as input, Values as output */

	$js = array(
	//	"js/application.js" 	=> "js/application.min.js",
	//	"js/main.js" 			=> "js/main.min.js"
	);

	$css = array(
    // Admin Folder
		"../css/admin/admin.css"	=> "./css/admin/admin.min.css",
    // Forum Folder
    "../css/forum/category.css"	=> "./css/forum/category.min.css",
    "../css/forum/post_thread.css"	=> "./css/forum/post_thread.min.css",
    "../css/forum/post.css"	=> "./css/forum/post.min.css",
    "../css/forum/thread.css"	=> "./css/forum/thread.min.css",
    // Template Folder
    
	);

	minifyJS($js);
	minifyCSS($css);
?>
