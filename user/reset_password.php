<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');


  $title = "Exam Owl | Reset Password";
  $keywords = "Study for Exams, Exam Community";
  $description = "Exam Owl is an online community that helps students achieve excellence.";
  $content = "/data/user/reset_password.php";
  $css = ['css/user/user.css'];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);


  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
