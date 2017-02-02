<h2>Disabled Users</h2>
<!-- Current Disabled Users -->
<div class="returned_cats">
  <h3>Currently Disabled</h3>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/user_disabled_display.php'); ?>
</div>
<!-- Disable User -->
<div class="add_cats">
  <h3>Disable User</h3>
  <form id="disable_user" method="post">
    <input type="text" id="disabled_user" name="disable_user" placeholder="User ID" required />
    <button type="submit" value="disable_user">Disable</button>
  </form>
  <p id ="error" ><?php echo $this->error; ?></p>
</div>
<!-- Undisable User -->
<div class="add_cats">
  <h3>Re-Enable User</h3>
  <form id="undisable_user" method="post">
    <input type="text" id="undisabled_user" name="undisable_user" placeholder="User ID" required />
    <button type="submit" value="undisable_user">Undisable</button>
  </form>
  <p id ="error" ><?php echo $this->error; ?></p>
</div>
