<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  $title = "Exam Owl";
  $keywords = "Study for Exams, Exam Community";
  $description = "Exam Owl is an online community that helps students achieve excellence.";
  $content = "/data/index.php";
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');


?>
