<?php
	include_once("minifier.php");

	/* FILES ARRAYS
	 * Keys as input, Values as output */

	$js = array(
    // JS Main Folder
		"../js/calculator.js" 	=> "./js/calculator.min.js",
    "../js/outputs.js" 	=> "./js/outputs.min.js",
    "../js/pagination.js" 	=> "./js/pagination.min.js",
    "../js/post_resource.js" 	=> "./js/post_resource.min.js",
    "../js/post_thread.js" 	=> "./js/post_thread.min.js",
    "../js/profile.js" 	=> "./js/profile.min.js",
    "../js/resend_email.js" 	=> "./js/resend_email.min.js",
    "../js/template.js" 	=> "./js/template.min.js",
    "../js/tool_menu.js" 	=> "./js/tool_menu.min.js",
    "../js/user.js" 	=> "./js/user.min.js",
		"../js/cookies.js" => "./js/cookies.min.js",
    // Jquery Folder
    "../js/jquery/jquery-1.11.2.js" => "./js/jquery/jquery-1.11.2.min.js",


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
