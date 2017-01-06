<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/template/models/resource.php');
// Grab Variables From URL
$res_id = $_GET["res-id"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$res_id = $_POST["res-id"];
}
$res = new resource();
$res->assign_id($res_id);
$res->post_resource();


?>
