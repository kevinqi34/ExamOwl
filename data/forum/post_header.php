<?php
date_default_timezone_set ( "UTC" );
$date = time_elapsed_string($id["CREATE_DATE"]);
?>


<div class="post_header">
    <h2><a href="./?cat-id=<?php echo $this->cat_slug; ?>&title=<?php echo $this->cat_name; ?>"><img src="./images/menu/return.png" alt="return" class="return"  /></a><?php echo $id['TITLE']; ?></h2>
    <p># of Responses: <?php echo $id['NUM_OF_COMMENTS']; ?></p>
    <p>Posted <?php echo $date; ?> by <?php echo $id["AUTHOR"]; ?></p>
</div>
<?php if ($id["CONTENT"]) { ?>
<!-- If Content -->
<div class="post_content">
<?php echo $id["CONTENT"]; ?>

</div>
<?php } ?>

<?php $this->display_comments(); ?>
