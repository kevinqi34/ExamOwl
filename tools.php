<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  // Set Bool
  set_boolTrue();
  $title = "Exam Owl | Tools";
  $keywords = "Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
  $description = "Find out how prepared you are for the your AP, IB, SAT, ACT or subject test exams using Exam Owl's scoring calculators and tools. Tags: Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator";
  $content = "/data/tools.php";
  $css = ['css/template/tool_menu.css'];
  $js = ['js/tool_menu.js'];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');


?>
