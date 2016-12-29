<div class="thread_header">
  <div class="title">
    <h2><?php echo $data['NAME']; ?></h2>
    <p><a href="./post_thread.php?cat-id=<?php echo $data["ID"]; ?>&return-id=<?php echo $data["SLUG"]; ?>&title=<?php echo $data["NAME"]; ?>">New Discussion</a># of Posts: <?php echo $data['NUM_OF_POSTS']; ?></p>
  </div>
  <div class="img">
    <img src="./<?php echo $data["ICON_URL"]; ?>" />
  </div>
</div>
