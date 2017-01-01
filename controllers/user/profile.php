<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/template/models/forum.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/template/user/user.php');
$user = new user();
$user->profile_remove_threads();
$user->profile();

?>
