<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/template/models/forum.php');
// Grab Variables From URL
$category_id = $_GET["cat-id"];
$thread_id = $_GET["thread-id"];
$thread_name = $_GET["slug"];
$page_id = $_GET["page-id"];
// Load Main Categories when there are no IDs
if (!$category_id && !$thread_id) {

  $sign_up_url = url() . "/user/signup.php";
  echo "<p class='p-header'>Pass difficult exams with tips and help from other students.</p>";
  echo "<p class='p-header'>For a limited time, gain <b>1000</b> IQ points by posting in the forum and get rewarded with <b>$10</b> through paypal or amazon giftcard.</p>";
  echo "<p class='p-header'><big><a href='" . $sign_up_url . "'>Start Passing Exams Now</a></big></p>";
  echo "<h2>Community Home</h2>";

  $category = new category();
  $category->return_categories();
  $category->display_categories('home');
} else if ($category_id) {
// Load Threads when Category is Selected
  $thread = new thread($category_id);
  echo "<div id='content_box'>";
  $thread->create_header();
  $thread->delete_threads();
  $thread->return_threads($page_id);
  $thread->display_threads();
  echo '</div>';

} else if ($thread_id) {
// Load Post when Thread is Selected
  $post = new post($thread_name,$thread_id);
  $post->delete_comment();
  $post->create_header();
  $post->comment();
  $post->create_footer();


}


?>
