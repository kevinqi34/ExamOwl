<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang"en">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/components/head.php'); ?>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/components/header.php'); ?>
<div id="main">
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/components/side_menu.php'); ?>

<div id="content">
<div class="content_wrapper">
<?php>
  $sign_up_url = url() . "/user/signup.php";
  echo "<p><b>Exam Owl</b> helps students ace their exams. Featuring a community of like-minded individuals and a suite of test preparation tools and resources.</p>";
  echo "<p>For a limited time, gain 1000 IQ points by posting in the forum and get rewarded with <b>$10</b> through paypal or amazon giftcard.</p>";
  echo "<p><a href='" . $sign_up_url . "'><big><b>Join now</b></big></a> and <b>get exam help today</b>.</p>";
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . $template->content)?>
</div>
</div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/components/outputs.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/components/footer.php'); ?>
</body>
</html>
