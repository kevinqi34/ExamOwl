<?php
date_default_timezone_set ( "UTC" );
foreach($this->data as $thread) {
  $date = time_elapsed_string($thread["CREATE_DATE"]);
?>
<a href="./?thread-id=<?php echo $thread["ID"]; ?>&slug=<?php echo $thread["SLUG"]; ?>&title=<?php echo $thread["TITLE"]; ?>">
<?php if ($thread["TYPE"] == 'STICK') { ?>
<div class="thread stick">
<?php } else { ?>
<div class="thread">
<?php } ?>
  <h3><?php echo $thread["TITLE"]; ?></h3>
  <p># of Responses: <?php echo $thread["NUM_OF_COMMENTS"]; ?></p>
  <p>Posted <?php echo $date; ?> by <?php echo $thread["AUTHOR"]; ?></p>
<?php
  if ($this->privileges == 'admin') {
?>
<form method="post">
  <input type="hidden" id="remove_thread" name="remove_thread" value="<?php echo $thread["ID"]; ?>"required />
  <button type="submit" value="remove_thread">Remove</button>
  <p id="error"><?php echo $this->error; ?></p>
</form>
<?php
  }
?>
</div>
</a>
<?php
}
?>
