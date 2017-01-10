<?php
// Include Database
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/database/database.php');
// Start Session
session_start();
include ($_SERVER['DOCUMENT_ROOT'] . '/template/user/user.php');
$user = new user();
$email = $_SESSION['email'];
// Get other variables
$query = "SELECT NAME, VERIFY_HASH, PASSWORD FROM USER WHERE EMAIL = '$email';";
$db = new db();
$data = $db->select($query);
$name = $data["NAME"];
$pwd_hash = $data["VERIFY_HASH"];
$pasword = $data["PASSWORD"];
$user->welcome_mail($name,$email,$pwd_hash);

?>
