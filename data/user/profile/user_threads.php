<div class="profile_posts profile_header">
<!-- If viewing other's profile -->
<?php if (!$is_user) {?>
  <?php
  if ($size == 0) {
    echo "<p style='text-align:center;'>This user hasn't posted anything yet.</p>";

  } else {
  ?>
    <h3>User Posts</h3>
  <?php

  foreach($thread_data as $thread) {
  $date = time_elapsed_string($thread["CREATE_DATE"]);
  ?>
  <a href="<?php echo url(); ?>thread/<?php echo $thread["ID"]; ?>/<?php echo $thread["SLUG"]; ?>">
    <div class="thread">
      <h3><?php echo $thread["TITLE"]; ?></h3>
      <p># of Responses: <?php echo $thread["NUM_OF_COMMENTS"]; ?></p>
      <p>Posted <?php echo $date; ?> by <?php echo $thread["AUTHOR"]; ?></p>
    </div>
  </a>
  <?php }} ?>
<?php } else { ?>
<!-- If viewing own profile -->
<?php
if ($size == 0) {
  echo "<p style='text-align:center;'>You have not posted anything yet.</p>";

} else {
?>
  <h3>My Posts</h3>
<?php

foreach($thread_data as $thread) {
$date = time_elapsed_string($thread["CREATE_DATE"]);
?>
  <a href="<?php echo url(); ?>thread/<?php echo $thread["ID"]; ?>/<?php echo $thread["SLUG"]; ?>">
  <div class="thread">
    <h3><?php echo $thread["TITLE"]; ?></h3>
    <p># of Responses: <?php echo $thread["NUM_OF_COMMENTS"]; ?></p>
    <p>Posted <?php echo $date; ?> by <?php echo $thread["AUTHOR"]; ?></p>

    <form method="post">
      <input type="hidden" id="remove_thread" name="remove_thread" value="<?php echo $thread["ID"]; ?>"required />
      <input type="hidden" id="remove_cat" name="remove_cat" value="<?php echo $thread["CAT_ID"]; ?>"required />
      <button type="submit" value="remove_thread">Remove</button>
      <p id="error"><?php echo $this->error; ?></p>
    </form>
  </div>
  </a>
<?php } ?>
<?php }} ?>
</div>
