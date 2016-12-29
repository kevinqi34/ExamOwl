<?php
foreach ($this->data as $table) {
?>
  <a href="?cat-id=<?php echo $table["ID"]; ?>">
  <div class="category">
    <div class="title">
      <h1><?php echo $table["NAME"]; ?></h1>
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
