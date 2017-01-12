<?php
date_default_timezone_set ( "UTC" );
foreach($data as $comment) {
  $date = time_elapsed_string($comment["CREATE_DATE"]);
?>
<div class="comment">
  <?php echo $comment["CONTENT"]; ?>
  <p class="info">Posted <?php echo $date; ?> by <?php echo $comment["AUTHOR"]; ?></p>
  <?php
    if ($this->privileges == 'admin') {
  ?>
  <!-- User ID -->
  <p>Posted by: <?php echo $comment["USER_ID"]; ?></p>
  <form method="post">
    <input type="hidden" id="remove_comment" name="remove_comment" value="<?php echo $comment["ID"]; ?>"required />
    <button type="submit" value="remove_comment">Remove</button>
  </form>
  <?php
    }
  ?>

</div>
<?php } ?>

<?php
  $size = sizeof($data);
  if ($size == $limit) {
    if ($val) {
      $val = $val + 1;
    } else {
      $val = 1;
    }
    echo '<div id="load">';
    echo '<p id="load_more">Load More</p>';
    echo '<input type="hidden" value="' . $limit . '" id="load_size" />';
    echo '<input type="hidden" value="'. $val .'" id="load_val" />';
    echo '<input type="hidden" value="comment" id="load_type" />';
    echo '<input type="hidden" value="' . $this->thread_id . '" id="load_id" />';
    echo '</div>';
  }
?>
