<?php include ($_SERVER['DOCUMENT_ROOT'] . '/controllers/resources/post_resource.php')?>
<h2><a href="<?php echo url(); ?>res/<?php echo $res_id; ?>/<?php echo $res_slug; ?>"><img src="./images/menu/return.png" alt="return" class="return"  /></a>Post New Resource</h2>
<form method="post" action="./post_resource.php?redirect=<?php echo $res_id; ?>">
<input type="hidden" id="res-id" name="res-id" value="<?php echo $res_id; ?>" />
<input type="hidden" id="res-slug" name="slug" value="<?php echo $res_slug; ?>" />
<p>Title</p>
<textarea rows="1" id="title" name="title">
</textarea>
<p>Url</p>
<textarea rows="1" id="url" name="url">
</textarea>
<p id="error"><?php echo $res->error; ?></p>
<p>Upload Image (Optional)</p>
<p>Image URL: <input type="text" name="img-url" /></p>
<button id="submit" type="submit">Submit</button>
</form>
