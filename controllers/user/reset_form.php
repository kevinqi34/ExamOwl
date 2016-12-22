<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/template/user/user.php');

// Grab Variables
$email = $_GET["e"];
$password = $_POST["password"];
$c_password= $_POST["c_password"];
$post_email = $_POST["email"];
if ($post_email == null) {
  $post_email = $email;
}

// Create User and change password
$user = new User();
$user->construct_signup("", $post_email, $password, $c_password);
$user->change_password();







?>
