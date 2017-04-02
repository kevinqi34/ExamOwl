<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  session_start();
  // Redirect if not logged in
  check_admin_login();
  $title = "Exam Owl | User Records";
  $keywords = "Study for Exams, Exam Community, Exam Prep, College Forums, High School Forums, Exam Owl, Owl Exam, ExamOwl, Test Prep";
  $description = "Exam Owl is an online community that helps students ace their exams. Featuring a community of like-minded individuals and a suite of test prep tools and resources.";
  $content = "/data/user/user_records.php";
  $css = ['minified_files/css/admin/admin.min.css','minified_files/css/forum/category.min.css', 'minified_files/css/forum/thread.min.css', 'minified_files/css/forum/post.min.css'];
  $js = [];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
