<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | GMAT";
$keywords = "GMAT, GMAT test, Graduate Management Admissions test, GMAT score calculator, GMAT score predictor, college tests, grad school admissions";
$description = "Find out how prepared you are for the your GMAT Exam using Exam Owl's scoring calculators and tools. Tags: GMAT, GMAT test, Graduate Management Admissions test, GMAT score calculator";
$content = "/data/tools/college/gmat.php";
$css = ['css/tools/standard.css'];
$js = ['js/calculator.js','js/college/gmat.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>