<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  $title = "Exam Owl | User Records";
  $keywords = "Study for Exams, Exam Community, Exam Prep, College Forums, High School Forums, Exam Owl, Owl Exam, ExamOwl, Test Prep";
  $description = "Exam Owl is an online community that helps students ace their exams. Featuring a community of like-minded individuals and a suite of test prep tools and resources.";
  $content = "/data/user_records.php";
  $css = ['css/admin/admin.css','css/forum/category.css', 'css/forum/thread.css', 'css/forum/post.css'];
  $js = [];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
