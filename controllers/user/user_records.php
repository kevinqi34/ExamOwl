<?php
  include ($_SERVER['DOCUMENT_ROOT'] . '/template/user/user.php');
  $id = $_GET["record-id"];
  // Show Records
  if ($id) {
    $user = new user();
    $user->show_records($id);
  } else {
    echo "No Records Found.";
  }

?>
