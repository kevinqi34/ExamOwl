<div id="footer">
		<p>AP, ACT, SAT, PSAT, PLAN and Advanced Placement are registered trademarks of the College Board, which does not sponsor or endorse this product. </p>
		<p>IB and International Baccalaureate are registered trademarks of the IBO, which does not sponsor or endorse this product.</p>
		<p>Descriptions of specific AP courses are taken from multiple sources including Wikipedia.</p>
		<?php add_Citation($bool); ?>
		<p>Built by <a href="http://www.kqi18.com">KQI</a></p>
    <p><a href="<?php echo url(); ?>other/privacypolicy.php">Privacy Policy</a></p>
		<br>
</div>

<!-- Template Stylesheets -->
<link rel="stylesheet" href="<?php echo url(); ?>minified_files/css/template/template.min.css">
<link rel="stylesheet" href="<?php echo url(); ?>minified_files/css/template/header.min.css">
<link rel="stylesheet" href="<?php echo url(); ?>minified_files/css/template/side_menu.min.css">
<link rel="stylesheet" href="<?php echo url(); ?>minified_files/css/template/content.min.css">
<link rel="stylesheet" href="<?php echo url(); ?>minified_files/css/template/footer.min.css">
<link rel="stylesheet" href="<?php echo url(); ?>minified_files/css/template/outputs.min.css">

<!-- Additional Stylesheets -->
<?php $template->create_stylesheets($template->css); ?>


<!-- Template Scripts -->
<script type="text/javascript" src="<?php echo url(); ?>minified_files/js/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo url(); ?>minified_files/js/template.min.js"></script>
<script type="text/javascript" src="<?php echo url(); ?>minified_files/js/outputs.min.js"></script>

<!-- Additional Scripts -->
<?php $template->create_scripts($template->js); ?>

<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($actual_link, 'tools') !== false) {
?>
<!-- Share Buttons for tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-569d8e1db2d98f25"></script>

<?php }	?>
