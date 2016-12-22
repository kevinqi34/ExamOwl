<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | ACT";
$keywords = "ACT, ACT Score Calculator, act, American College Test, ACT Math, ACT English, ACT Science, college prep, ACT Reading, Standardized Testing";
$description = "Find out how prepared you are for the your ACT Exam using Exam Owl's scoring calculators and tools. Tags: Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
$content = "/data/tools/othertests/act.php";
$css = ['css/tools/standard.css'];
$js = ['js/calculator.js','js/othertests/act.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
