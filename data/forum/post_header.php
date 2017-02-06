<?php
date_default_timezone_set ( "UTC" );
$date = time_elapsed_string($id["CREATE_DATE"]);
?>


<div class="post_header">
    <h2><a href="<?php echo url(); ?>category/<?php echo $this->cat_id; ?>/<?php echo $this->cat_slug; ?>"><img src="<?php echo url(); ?>images/menu/return.png" alt="return" class="return"  /></a><?php echo $id['TITLE']; ?></h2>
    <p># of Responses: <?php echo $id['NUM_OF_COMMENTS']; ?></p>
    <p>Posted <?php echo $date; ?> by <a href="<?php echo url(); ?>user/<?php echo $id["USER_ID"]; ?>"><?php echo $id["AUTHOR"]; ?></a></p>
</div>
<?php if ($id["CONTENT"]) { ?>
<!-- If Content -->
<div class="post_content">
<?php echo $id["CONTENT"]; ?>

</div>
<?php } ?>
<div id="content_box">
<?php $this->display_comments(); ?>
</div>
