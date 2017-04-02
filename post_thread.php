<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  session_start();
  // Redirect if not logged in
  check_login();
  $title = "Exam Owl | Post Thread";
  $keywords = "Study for Exams, Exam Community";
  $description = "Exam Owl is an online community that helps students achieve academic excellence.";
  $content = "/data/forum/post_thread.php";
  $css = ['minified_files/css/forum/post_thread.min.css'];
  $js = ['tinymce/tinymce.min.js', 'minified_files/js/post_thread.min.js'];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');


?>
