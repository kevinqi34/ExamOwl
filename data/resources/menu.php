<div class="menu">
    <h2>Please Select a Test Category</h2>
<?php
  foreach($data as $test) {
?>
  <div class="category">
    <div class="image">
      <img src="/images/menu/<?php echo $test["ICON_URL"]; ?>" alt="<?php echo $test["TITLE"]; ?>" >
    </div>
    <h3><?php echo $test["TITLE"]; ?></h3>
    <a href="./resources.php?id=<?php echo $test["ID"]; ?>"></a>
  </div>
<?php } ?>


</div>
