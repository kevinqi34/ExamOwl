<h2>Admin Users</h2>
<!-- Current Categories -->
<div class="returned_cats">
  <h3>Current Admin</h3>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/user_admin.php'); ?>
</div>
<!-- Add New Admin -->
<div class="add_cats">
  <h3>Add New Admin</h3>
  <form id="add_user" method="post">
    <input type="text" id="user_id" name="add_username" placeholder="User ID" required />
    <button type="submit" value="add_user">Add</button>
  </form>
    <p id ="error" ><?php echo $this->error; ?></p>
</div>
