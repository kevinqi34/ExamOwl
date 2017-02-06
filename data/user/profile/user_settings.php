<div class="settings">
  <h3>Settings</h3>
  <!-- Change Username -->
  <div class="add_cats">
    <h3>Change Username</h3>
    <form id="change_user" method="post">
      <input type="text" id="new_user" name="new_user" placeholder="New Username" required />
      <button type="submit" value="change_user">Change</button>
    </form>
  </div>

  <!-- Change Password -->
  <div class="add_cats">
    <h3>Change Password</h3>
    <form id="change_pwd" method="post">
      <input type="password" id="new_pwd" name="new_pwd" placeholder="New Password" required />
      <input type="password" id="new_pwd_c" name="new_pwd_c" placeholder="Confirm New Password" required />
      <button type="submit" value="change_pwd">Change</button>
    </form>
    <p id ="error" ><?php echo $this->error; ?></p>
  </div>

</div>
