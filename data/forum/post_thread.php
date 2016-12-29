<?php include ($_SERVER['DOCUMENT_ROOT'] . '/controllers/forum/post_thread.php')?>

<h2><a href="./?cat-id=<?php echo $redirect_slug; ?>&title=<?php echo $redirect_title; ?>"><img src="./images/menu/return.png" alt="return" class="return"  /></a>Create New Discussion</h2>
<form method="post" action="./post_thread.php?redirect=<?php echo $category_id; ?>&return-id=<?php echo $redirect_slug; ?>&title=<?php echo $redirect_title; ?>">
<?php if ($threads->privileges == 'admin') { ?>
<!-- Admin Features -->
<p>Type</p>
<select id="option" name="option">
  <option>REG</option>
  <option>STICK</option>
</select>
<?php } ?>
<!-- Form Redirect Variables -->
<input type="hidden" id="return-id" name="return-id" value="<?php echo $redirect_slug; ?>" />
<input type="hidden" id="return-title" name="return-title" value="<?php echo $redirect_title; ?>" />
<!-- End of Variables -->
<input type="hidden" id="cat-id" name="cat-id" value="<?php echo $category_id; ?>" />
<p>Title</p>
<textarea rows="1" id="title" name="title">
</textarea>
<p id="error"><?php echo $threads->error; ?></p>
<p>Text (Optional)</p>
<textarea rows="8" id="text" name="text">
</textarea>
<button id="submit" type="submit">Submit</button>
</form>
