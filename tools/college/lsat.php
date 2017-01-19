<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | LSAT";
$keywords = "LSAT, LSAT test, Law School Admissions test, LSAT score calculator, LSAT score predictor, college tests, grad school admissions";
$description = "Find out how prepared you are for the your LSAT Exam using Exam Owl's scoring calculators and tools. Tags: LSAT, LSAT test, Law School Admissions test, LSAT score calculator";
$content = "/data/tools/college/lsat.php";
$css = ['css/tools/standard.css'];
$js = ['js/calculator.js','js/college/lsat.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
