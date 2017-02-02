<!-- Delete User -->
<div class="add_cats">
  <h3>Remove User</h3>
  <form id="remove_user" method="post">
    <input type="text" id="blacklist_user" name="blacklist_user" placeholder="User ID" required />
    <button type="submit" value="blacklist_user">Remove</button>
  </form>
  <p id ="error" ><?php echo $this->error; ?></p>
</div>
