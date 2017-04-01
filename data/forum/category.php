<?php
foreach ($this->data as $table) {
?>
  <a href="<?php echo url(); ?>category/<?php echo $table["ID"]; ?>/<?php echo $table["SLUG"]; ?>">
  <div class="category">
    <div class="title">
      <h2><?php echo $table["NAME"]; ?></h2>
      <p># of Posts: <?php echo $table["NUM_OF_POSTS"]; ?></p>
    </div>
    <div class="img">
      <img alt="<?php echo $table["NAME"]; ?>" src="<?php echo "." . $table["ICON_URL"] ?>">
    </div>
  </div>
  </a>
<?php
  }
?>
