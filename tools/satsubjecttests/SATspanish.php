<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | SAT Spanish";
$keywords = "SAT Spanish, sat spanish, SAT spanish, Spanish, SAT Subject Tests, Subject tests, SAT tests, SAT testing, subject testing";
$description = "Find out how prepared you are for the your SAT Spanish Exam using Exam Owl's scoring calculators and tools. Tags: Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
$content = "/data/tools/satsubjecttests/SATspanish.php";
$css = ['css/tools/standard.css'];
$js = ['js/calculator.js','js/satsubject/SATspanish.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
