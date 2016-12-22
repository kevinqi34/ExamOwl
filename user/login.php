<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');


  $title = "Exam Owl | Login";
  $keywords = "Study for Exams, Exam Community";
  $description = "Exam Owl is an online community that helps students achieve excellence.";
  $content = "/data/user/login.php";
  $css = ['css/user/user.css'];
  $js = ['js/user.js'];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);

  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
