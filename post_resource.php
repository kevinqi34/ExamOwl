<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  session_start();
  // Redirect if not logged in
  check_login();
  $title = "Exam Owl | Post Resource";
  $keywords = "Study for Exams, Exam Community";
  $description = "Exam Owl is an online community that helps students achieve academic excellence.";
  $content = "/data/resources/post_resource.php";
  $css = ['css/forum/post_thread.css'];
  $js = ['js/post_resource.js'];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');


?>
