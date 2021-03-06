<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | GPA Calculator";
$keywords = "College GPA Calculator, GPA by credit hour, GPA, grade point average, grade point, grade pt avg, gpa calculator, GPA calculation, weighted gpa calculator, weighted GPA, GPA calc";
$description = "Find out your GPA using Exam Owl's scoring calculators and tools. Tags: Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
$content = "/data/tools/othertests/gpa.php";
$css = ['minified_files/css/tools/standard.min.css', 'css/tools/finalgrade.css'];
$js = ['minified_files/js/calculator.min.js','minified_files/js/othertests/gpa.min.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
