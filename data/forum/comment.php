<?php
date_default_timezone_set ( "UTC" );
foreach($data as $comment) {
  $date = time_elapsed_string($thread["CREATE_DATE"]);
?>
<div class="comment">
  <?php echo $comment["CONTENT"]; ?>
  <p class="info">Posted <?php echo $date; ?> by <?php echo $comment["AUTHOR"]; ?></p>
  <?php
    if ($this->privileges == 'admin') {
  ?>
  <form method="post">
    <input type="hidden" id="remove_comment" name="remove_comment" value="<?php echo $comment["ID"]; ?>"required />
    <button type="submit" value="remove_comment">Remove</button>
  </form>
  <?php
    }
  ?>

</div>
<?php } ?>
