<?php
date_default_timezone_set ( "UTC" );
foreach($this->data as $test) {
  $date = time_elapsed_string($test["CREATE_DATE"]);
?>
<a href="<?php echo $test["URL"]; ?>">
<div class="link">
<div class="vote circle">
    <div id="upvote_icon_<?php echo $test["ID"]; ?>" class="increment up"></div>
    <div id="downvote_icon_<?php echo $test["ID"]; ?>" class="increment down"></div>
    <div class="count"><?php echo $test["UPVOTES"]; ?></div>
    <!-- Vote Forms -->
    <!-- Upvote -->
    <form id="upvote_<?php echo $test["ID"]; ?>" method="post">
      <input type="hidden" name="count" value="<?php echo $test["UPVOTES"]; ?>"required />
      <input type="hidden" id="up" name="upvote" value="<?php echo $test["ID"]; ?>"required />
      <p id="error" style="display:none;"><?php echo $this->error; ?></p>
    </form>
    <!-- Downvote-->
    <form id="downvote_<?php echo $test["ID"]; ?>" method="post">
      <input type="hidden" name="count" value="<?php echo $test["UPVOTES"]; ?>"required />
      <input type="hidden" id="down" name="downvote" value="<?php echo $test["ID"]; ?>"required />
      <p id="error" style="display:none;"><?php echo $this->error; ?></p>
    </form>
</div>
<div class="title">
  <h3><?php echo $test["TITLE"]; ?></h3>
  <p>Posted <?php echo $date; ?> by <?php echo $test["AUTHOR"]; ?></p>
  <?php
    if ($this->privileges == 'admin') {
  ?>
  <p>Posted by: <?php echo $test["USER_ID"]; ?></p>
  <form method="post">
    <input type="hidden" id="remove_link" name="remove_link" value="<?php echo $test["ID"]; ?>"required />
    <button type="submit" value="remove_link">Remove</button>
    <p id="error"><?php echo $this->error; ?></p>
  </form>
  <?php
    }
  ?>
</div>
<div class="img">
  <img src="<?php echo url(); ?><?php echo $test["IMG_URL"]; ?>"/>
</div>
</div>
</a>
<?php
}
?>

<?php
  $size = sizeof($this->data);
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
    echo '<input type="hidden" value="' . $this->id . '" id="load_id" />';
    echo '</div>';
  }
?>
