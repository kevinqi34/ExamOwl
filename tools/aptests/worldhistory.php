<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | AP World History";
$keywords = "AP World, AP World History, World History, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$description = "Find out how prepared you are for the your AP World History Exam using Exam Owl's scoring calculators and tools. Tags: Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
$content = "/data/tools/aptests/worldhistory.php";
$css = ['css/tools/standard.css'];
$js = ['js/calculator.js','js/ap/worldhistory.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
