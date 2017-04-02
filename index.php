<?php
  // Include Main Functions
  require_once($_SERVER['DOCUMENT_ROOT'] . '/template/initfunc.php');
  $title = "Exam Owl | A Community for Exam Preparation Help";
  $keywords = "Study for Exams, Exam Community, Exam Prep, College Forums, High School Forums, Exam Owl, Owl Exam, ExamOwl, Test Prep";
  $description = "Exam Owl is an online community that helps students ace their exams. Featuring a community of like-minded individuals and a suite of test prep tools and resources.";
  $content = "/data/index.php";
  $css = ['minified_files/css/admin/admin.min.css','minified_files/css/forum/category.min.css', 'minified_files/css/forum/thread.min.css', 'minified_files/css/forum/post.min.css'];
  $js = ['tinymce/tinymce.min.js','minified_files/js/post_thread.min.js','minified_files/js/pagination.min.js'];
  // Instantiate template
  $template = new template($title, $keywords, $description, $content);
  $template->add_style($css);
  $template->add_script($js);
  include($_SERVER['DOCUMENT_ROOT'] . '/template/template.php');

?>
