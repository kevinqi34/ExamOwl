<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | PSAT";
$keywords = "PSAT, psat, National Merit Qualification Test, PSAT Math, PSAT Writing, PSAT Reading, college prep, SAT Essay, Standardized Testing";
$description = "Find out how prepared you are for the your PSAT Exam using Exam Owl's scoring calculators and tools. Tags: Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
$content = "/data/tools/othertests/psat.php";
$css = ['minified_files/css/tools/standard.min.css'];
$js = ['minified_files/js/calculator.min.js','minified_files/js/othertests/psat.min.js','minified_files/js/ap/multi.min.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
