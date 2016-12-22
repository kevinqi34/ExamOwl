<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/template/user/user.php');

// Grab Variables
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];

// Instantiate User
$user = new user();
$user->construct_signup($name, $email, $password, $c_password);
$user->create_user();






?>
