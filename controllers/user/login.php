<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/template/user/user.php');

// Grab Variables
$email = $_POST["email"];
$password = $_POST["password"];


// Instantiate User
$user = new user();
$user->construct_login($email, $password);
$user->login();






?>
