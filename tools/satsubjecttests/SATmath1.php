<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | SAT Math 1";
$keywords = "Math 1, SAT Math 1, SAT Math, sat math, math 1, SAT Subject Tests, Subject tests, SAT tests, SAT testing, subject testing";
$description = "Find out how prepared you are for the your SAT Math 1 Exam using Exam Owl's scoring calculators and tools. Tags: Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
$content = "/data/tools/satsubjecttests/SATmath1.php";
$css = ['css/tools/standard.css'];
$js = ['js/calculator.js','js/satsubject/SATmath1.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
