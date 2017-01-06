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
<?php include($_SERVER['DOCUMENT_ROOT'] . $template->content)?>
</div>
</div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/components/outputs.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/components/footer.php'); ?>
</body>
</html>
