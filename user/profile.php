<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  session_start();
  // Redirect if not logged in
  check_login();
  $title = "Exam Owl | Profile";
  $keywords = "Study for Exams, Exam Community";
  $description = "Exam Owl is an online community that helps students achieve excellence.";
  $content = "/data/user/profile.php";
  $css = ['minified_files/css/user/profile.min.css', 'minified_files/css/admin/admin.min.css'];
  $js = ['tinymce/tinymce.min.js','js/post_thread.js', 'js/profile.js'];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
