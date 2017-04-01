<?php
date_default_timezone_set ( "UTC" );
foreach($this->data as $thread) {
  $date = time_elapsed_string($thread["CREATE_DATE"]);
?>
<a href="<?php echo url(); ?>thread/<?php echo $thread["ID"]; ?>/<?php echo $thread["SLUG"]; ?>">
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
<p>Posted by: <?php echo $thread["USER_ID"]; ?></p>
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
<?php
  $size = sizeof($this->data);
  if ($size == $limit) {
    if ($page_id) {
      $val = $page_id + 1;
    } else {
      if ($val) {
        $val = $val + 1;
      } else {
        $val = 1;
      }
    }
    echo '<div id="load">';
    echo '<p id="load_more">Load More</p>';
    echo '<input type="hidden" value="' . $limit . '" id="load_size" />';
    echo '<input type="hidden" value="'. $val .'" id="load_val" />';
    echo '<input type="hidden" value="thread" id="load_type" />';
    echo '<input type="hidden" value="' . $this->cat_id . '" id="load_id" />';
    echo '</div>';
    // For SEO Purposes
    $url = url() . "category/" . $this->cat_id . "/" . $this->cat_slug . "/" . $val . "/";
    echo '<a style="display:none" href="'. $url . '"></a>';
  }
?>
