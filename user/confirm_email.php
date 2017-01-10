<?php
// start session
session_start();
// include Database
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/database/database.php');
// include Form Validation
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/user/validation.php');

$email = $_GET['e'];
$verifier = $_GET['id'];

// Validation
$error = false;
// Validate Email
$email_v = new validation($email);
$error = $email_v->email_validate();
// Validate hash
if ($error != false) {
$hash_v = new validation($verifier);
$error = $hash_v->gen_validate();
}

if ($error != false) {
  header('Location: ./login.php');
} else {
// Confirm Email
$new_conn = new db();
$query = "SELECT EMAIL, PASSWORD, VERIFY_HASH FROM USER WHERE EMAIL = '$email'";
$data = $new_conn->select($query);

if ($verifier == $data["VERIFY_HASH"]) {
  $user_browser = $_SERVER['HTTP_USER_AGENT'];
  // Set Session
  $_SESSION['email'] = $row["EMAIL"];
  $_SESSION['login_string'] = hash('sha256',$data["PASSWORD"] . $user_browser);
  // Update SQL
  $update_sql  = "UPDATE USER SET VERIFIED='1' WHERE EMAIL = '$email'";
  if ($new_conn->query($update_sql)) {
    $output="Your email has been verified";
    header('Location: ../?msg=' . $output);

  }


}

}

?>
