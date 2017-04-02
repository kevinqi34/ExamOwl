<head>

<!-- Template Meta Tags and Favicon -->
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo url(); ?>favicon.ico"/>
<!-- Meta Tags -->
<title> <?php echo $template->display_title(); ?></title>
<meta name="keywords" content="<?php echo $template->display_keywords(); ?>">
<meta name="description" content="<?php echo $template->display_description(); ?>">
<!-- Other SEO Tags -->
<?php include($_SERVER['DOCUMENT_ROOT']  . '/template/components/seo.php')?>

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
<script src="<?php echo url(); ?>minified_files/js/jquery/jquery-1.11.2.min.js"></script>
<script src="<?php echo url(); ?>minified_files/js/template.min.js"></script>
<script src="<?php echo url(); ?>minified_files/js/outputs.min.js"></script>

<!-- Additional Scripts -->
<?php $template->create_scripts($template->js); ?>


</head>
