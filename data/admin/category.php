<h2>Categories</h2>
<!-- Current Categories -->
<div class="returned_cats">
  <h3>Current Categories</h3>
  <?php $this->display_categories('admin'); ?>
</div>
<!-- Add New Category -->
<div class="add_cats">
  <h3>Add New Category</h3>
  <form id="add_cat" method="post">
    <input type="text" id="name" name="name" placeholder="Name" required />
    <button type="submit" value="add_cat">Add</button>
  </form>
    <p id ="error" ><?php echo $this->error; ?></p>
</div>
