<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/template/models/resource.php');
// Get Test ID's
$id = $_GET["id"];
if (!$id) {
  // Output Menu
  $menu = new resource();
  $menu->create_menu();

} else {
  $test = new resource();
  $test->assign_id($id);
  $test->upvote();
  $test->downvote();
  $test->remove_resource();
  $test->create_header();
  $test->get_resources();
  $test->display_resources();

}

?>
