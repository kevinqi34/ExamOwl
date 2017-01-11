<div class="resource_header">
  <div class="title">
    <h2><?php echo $data['TITLE']; ?></h2>
      <p><a href="<?php echo url(); ?>post_resource.php?res-id=<?php echo $data["ID"]; ?>?slug=<?php echo $data["SLUG"]; ?>">Add Resource</a># of Resources: <?php echo $data['NUM_OF_LINKS']; ?></p>
  </div>
  <div class="img">
    <img src="<?php echo url(); ?>images/menu/<?php echo $data["ICON_URL"]; ?>" />
  </div>
</div>
<p id="error" style="display: none"><?php echo $this->error; ?></p>
