<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | MCAT";
$keywords = "MCAT, MCAT test, Medical College Admission test, MCAT score calculator, MCAT score predictor, college tests, grad school admissions, medical school admissions";
$description = "Find out how prepared you are for the your MCAT Exam using Exam Owl's scoring calculators and tools. Tags: MCAT, MCAT test, Medical College Admission test, MCAT score calculator";
$content = "/data/tools/college/mcat.php";
$css = ['css/tools/standard.css'];
$js = ['js/calculator.js','js/college/mcat.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
