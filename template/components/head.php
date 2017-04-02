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

</head>
