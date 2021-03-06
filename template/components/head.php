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
<?php if (!check_login_no_redirect() && !check_exist_in_url('user')) { ?>
<link rel="stylesheet" href="<?php echo url(); ?>minified_files/css/template/top_message.min.css">
<?php } ?>
<!-- Additional Stylesheets -->
<?php $template->create_stylesheets($template->css); ?>

<!-- Scripts rendered in footer -->

</head>
