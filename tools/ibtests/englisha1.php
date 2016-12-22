<?php
// Include Main Functions
require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
$title = "Exam Owl | IB English A1 HL/SL";
$keywords = "IB English, English A1, English A1 SL, English A1 HL, IB English A1, IB score, IB Calculator, IB tests, college prep, IB courses, IB Exam, IB prep";
$description = "Find out how prepared you are for the your IB English A1 HL/SL Exam using Exam Owl's scoring calculators and tools. Tags: Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
$content = "/data/tools/ibtests/englisha1.php";
$css = ['css/tools/standard.css'];
$js = ['js/calculator.js','js/ib/ibenglisha1.js'];
// Instantiate template
$template = new template($title, $keywords, $description, $content);
$template->add_style($css);
$template->add_script($js);
include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
