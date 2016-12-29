<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/template/models/forum.php');
// Grab Variables From URL
$category_id = $_GET["cat-id"];
$redirect_title = $_GET["title"];
$redirect_slug = $_GET["return-id"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $category_id = $_POST['cat-id'];
  $redirect_title = $_POST["return-title"];
  $redirect_slug = $_POST["return-id"];
}
$threads = new thread($category_id);
$threads->create_thread();



?>
