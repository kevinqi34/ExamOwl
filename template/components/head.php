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
<link rel="stylesheet" href="<?php echo url(); ?>css/template/template.css">
<link rel="stylesheet" href="<?php echo url(); ?>css/template/header.css">
<link rel="stylesheet" href="<?php echo url(); ?>css/template/side_menu.css">
<link rel="stylesheet" href="<?php echo url(); ?>css/template/content.css">
<link rel="stylesheet" href="<?php echo url(); ?>css/template/footer.css">
<link rel="stylesheet" href="<?php echo url(); ?>css/template/outputs.css">

<!-- Additional Stylesheets -->
<?php $template->create_stylesheets($template->css); ?>

<!-- Template Scripts -->
<script src="<?php echo url(); ?>js/jquery/jquery-1.11.2.js"></script>
<script src="<?php echo url(); ?>js/template.js"></script>
<script src="<?php echo url(); ?>js/outputs.js"></script>

<!-- Additional Scripts -->
<?php $template->create_scripts($template->js); ?>


</head>
