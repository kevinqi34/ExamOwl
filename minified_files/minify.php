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

		// Calculators
		// AP Folder
		"../js/ap/arthistory.js" => "./js/ap/arthistory.min.js",
		"../js/ap/biology.js" => "./js/ap/biology.min.js",
		"../js/ap/calculusab.js" => "./js/ap/calculusab.min.js",
		"../js/ap/calculusbc.js" => "./js/ap/calculusbc.min.js",
		"../js/ap/chemistry.js" => "./js/ap/chemistry.min.js",
		"../js/ap/comparativegovernment.js" => "./js/ap/comparativegovernment.min.js",
		"../js/ap/computerscience.js" => "./js/ap/computerscience.min.js",
		"../js/ap/englishlanguage.js" => "./js/ap/englishlanguage.min.js",
		"../js/ap/englishliterature.js" => "./js/ap/englishliterature.min.js",
		"../js/ap/environmentalscience.js" => "./js/ap/environmentalscience.min.js",
		"../js/ap/europeanhistory.js" => "./js/ap/europeanhistory.min.js",
		"../js/ap/frenchlanguage.js" => "./js/ap/frenchlanguage.min.js",
		"../js/ap/germanlanguage.js" => "./js/ap/germanlanguage.min.js",
		"../js/ap/humangeography.js" => "./js/ap/humangeography.min.js",
		"../js/ap/latinvergil.js" => "./js/ap/latinvergil.min.js",
		"../js/ap/macroeconomics.js" => "./js/ap/macroeconomics.min.js",
		"../js/ap/microeconomics.js" => "./js/ap/microeconomics.min.js",
		"../js/ap/multi.js" => "./js/ap/multi.min.js",
		"../js/ap/musictheory.js" => "./js/ap/musictheory.min.js",
		"../js/ap/physics1.js" => "./js/ap/physics1.min.js",
		"../js/ap/physics2.js" => "./js/ap/physics2.min.js",
		"../js/ap/physicsb.js" => "./js/ap/physicsb.min.js",
		"../js/ap/physicscelectricity.js" => "./js/ap/physicscelectricity.min.js",
		"../js/ap/physicscmechanics.js" => "./js/ap/physicscmechanics.min.js",
		"../js/ap/psychology.js" => "./js/ap/psychology.min.js",
		"../js/ap/spanishlanguage.js" => "./js/ap/spanishlanguage.min.js",
		"../js/ap/spanishliterature.js" => "./js/ap/spanishliterature.min.js",
		"../js/ap/statistics.js" => "./js/ap/statistics.min.js",
		"../js/ap/usgovernment.js" => "./js/ap/usgovernment.min.js",
		"../js/ap/ushistory.js" => "./js/ap/ushistory.min.js",
		"../js/ap/worldhistory.js" => "./js/ap/worldhistory.min.js",

		// College Folder
		"../js/college/gmat.js" => "./js/college/gmat.min.js",
		"../js/college/lsat.js" => "./js/college/lsat.min.js",
		"../js/college/mcat.js" => "./js/college/mcat.min.js",

		// IB Folder
		"../js/ib/ibarabic.js" => "./js/ib/ibarabic.min.js",
		"../js/ib/ibbiology.js" => "./js/ib/ibbiology.min.js",
		"../js/ib/ibchemistry.js" => "./js/ib/ibchemistry.min.js",
		"../js/ib/ibcomputers.js" => "./js/ib/ibcomputers.min.js",
		"../js/ib/ibeconomics.js" => "./js/ib/ibeconomics.min.js",
		"../js/ib/ibenglisha1.js" => "./js/ib/ibenglisha1.min.js",
		"../js/ib/ibenglisha2.js" => "./js/ib/ibenglisha2.min.js",
		"../js/ib/ibgeography.js" => "./js/ib/ibgeography.min.js",
		"../js/ib/ibhistory.js" => "./js/ib/ibhistory.min.js",
		"../js/ib/ibmathematics.js" => "./js/ib/ibmathematics.min.js",
		"../js/ib/ibphysics.js" => "./js/ib/ibphysics.min.js",
		"../js/ib/ibpsychology.js" => "./js/ib/ibpsychology.min.js",
		"../js/ib/ibspanish.js" => "./js/ib/ibspanish.min.js",
		"../js/ib/multib.js" => "./js/ib/multib.min.js",
		"../js/ib/tok.js" => "./js/ib/tok.min.js",

		// Othertests Folder
		"../js/othertests/act.js" => "./js/othertests/act.min.js",
		"../js/othertests/finalgrade.js" => "./js/othertests/finalgrade.min.js",
		"../js/othertests/gpa.js" => "./js/othertests/gpa.min.js",
		"../js/othertests/psat.js" => "./js/othertests/psat.min.js",
		"../js/othertests/sat.js" => "./js/othertests/sat.min.js",

		// Satsubject Folder
		"../js/satsubject/SATbiology.js" => "./js/satsubject/SATbiology.min.js",
		"../js/satsubject/SATchemistry.js" => "./js/satsubject/SATchemistry.min.js",
		"../js/satsubject/SATfrench.js" => "./js/satsubject/SATfrench.min.js",
		"../js/satsubject/SATliterature.js" => "./js/satsubject/SATliterature.min.js",
		"../js/satsubject/SATmath1.js" => "./js/satsubject/SATmath1.min.js",
		"../js/satsubject/SATmath2.js" => "./js/satsubject/SATmath2.min.js",
		"../js/satsubject/SATphysics.js" => "./js/satsubject/SATphysics.min.js",
		"../js/satsubject/SATspanish.js" => "./js/satsubject/SATspanish.min.js",
		"../js/satsubject/SATushistory.js" => "./js/satsubject/SATushistory.min.js",
		"../js/satsubject/SATworldhistory.js" => "./js/satsubject/SATworldhistory.min.js",


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
