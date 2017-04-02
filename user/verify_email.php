<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');


  $title = "Exam Owl | Verify Email";
  $keywords = "Study for Exams, Exam Community";
  $description = "Exam Owl is an online community that helps students achieve excellence.";
  $content = "/data/user/verify_email.php";
  $css = ['minified_files/css/user/user.min.css'];
  $js = ['minified_files/js/user.min.js', 'minified_files/js/resend_email.min.js'];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);

  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
