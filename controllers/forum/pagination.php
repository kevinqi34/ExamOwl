<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/template/models/forum.php');
// Get Variables
$page_number = $_POST["page_number"];
$type = $_POST["type"];
$size = $_POST["size"];
$id = $_POST["id"];

// Return Comments
if ($type == "comment") {
  $results = new post('N/A', $id);
  $results->pagination($page_number, $size);

} else if ($type == "thread") {
  $results = new thread($id);
  $results->delete_threads();
  echo "hello";
  $results->pagination($page_number, $size);

} else {
  return false;
}









?>
