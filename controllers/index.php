<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/template/models/forum.php');
// Grab Variables From URL
$category_id = $_GET["cat-id"];
$thread_id = $_GET["thread-id"];
$thread_name = $_GET["slug"];
$page_id = $_GET["page-id"];
// Load Main Categories when there are no IDs
if (!$category_id && !$thread_id) {
  echo "<h2 class='heading'>Community Home</h2>";
  $category = new category();
  $category->return_recent_activities();
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
