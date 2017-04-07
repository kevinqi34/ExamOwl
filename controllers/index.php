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
  echo "<p><b>Exam Owl</b> helps students ace their exams. Featuring a community of like-minded individuals and a suite of test preparation tools and resources.</p>";
  echo "<p>For a limited time, gain 1000 IQ points by posting in the forum and get rewarded with $10 through paypal or amazon giftcard.</p>";
  echo "<p><a href='" . $sign_up_url . "'><big><b>Join now</b></big></a> and <b>get exam help today</b>.</p>";
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
