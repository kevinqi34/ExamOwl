<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/template/models/resource.php');
// Get Variables
$page_number = $_POST["page_number"];
$size = $_POST["size"];
$id = $_POST["id"];
// Return Data
$results = new resource();
$results->assign_id($id);
$results->pagination($page_number,$size);

?>
