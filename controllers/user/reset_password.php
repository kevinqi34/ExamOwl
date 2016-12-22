<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/template/user/user.php');

// Grab Variables
$email = $_POST["email"];

// Instantiate User
$user = new user();
$user->construct_email($email);
$user->reset_password();






?>
