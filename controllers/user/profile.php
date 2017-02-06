<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/template/models/forum.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/template/user/user.php');

// Get User ID
$id = $_GET['user-id'];
if ($id) {
  // Display Other User
  $user = new user();
  $email = $user->get_email($id);
  $user->profile($email);

} else {
  $user = new user();
  $user->user_settings();
  $user->profile_remove_threads();
  $user->profile("");
}

?>
