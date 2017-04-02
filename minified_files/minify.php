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
    "../css/template/content.css" => "./css/template/content.min.css",
    "../css/template/footer.css" => "./css/template/footer.min.css",
    "../css/template/header.css" => "./css/template/header.min.css",
    "../css/template/outputs.css" => "./css/template/outputs.min.css",
    "../css/template/resources.css" => "./css/template/resources.min.css",
    "../css/template/side_menu.css" => "./css/template/side_menu.min.css",
    "../css/template/template.css" => "./css/template/template.min.css",
    "../css/template/tool_menu.css" => "./css/template/tool_menu.min.css",
    // Tools Folder
    "../css/tools/finalgrade.css" => "./css/tools/finalgrade.min.css",
    "../css/tools/standard.css" => "./css/tools/standard.min.css",
    // User Folder
    "../css/user/profile.css" => "./css/user/profile.min.css",
    "../css/user/user.css" => "./css/user/user.min.css"

	);

	minifyJS($js);
	minifyCSS($css);
?>
