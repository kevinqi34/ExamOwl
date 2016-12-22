<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  $title = "Exam Owl | Privacy Policy";
  $keywords = "Study for Exams, Exam Community";
  $description = "Exam Owl is an online community that helps students achieve excellence.";
  $content = "/data/other/privacypolicy.php";
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');


?>
