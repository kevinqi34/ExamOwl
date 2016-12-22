<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | Final Grade Calculator";
$keywords = "Final Grade Calculator, Finals, Grade Calculator, final grade calculator, what score do i need, midterms";
$description = "Find what grade you need to score on the final using Exam Owl's scoring calculators and tools. Tags: Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
$content = "/data/tools/othertests/finalgrade.php";
$css = ['css/tools/standard.css', 'css/tools/finalgrade.css'];
$js = ['js/calculator.js','js/othertests/finalgrade.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
