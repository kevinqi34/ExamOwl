<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  // Set Bool
  set_boolTrue();
  $title = "Exam Owl | Resources";
  $keywords = "Advanced Placement Tests Resources, IB Test Resources, SAT/ACT Test Resources";
  $description = "Use Exam Owl's user created resource bank to study for AP, IB, SAT or ACT exams. Tags: AP Test Prep, IB Test Prep, ACT/SAT Test Prep";
  $content = "/data/resources.php";
  $css = ['minified_files/css/template/tool_menu.min.css','minified_files/css/template/resources.min.css'];
  $js = ['js/post_resource.js'];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');


?>
