<!-- Assign Priveleges -->
<?php
  if ($this->privelege == "admin" || $this->privelege == "sadmin") {
    $privelege = "admin";
  } else {
    $privelege = "user";
  }
?>
<!-- Begin Profile Display -->
<div class="profile_header">
  <h2><?php echo $user_data["NAME"]; ?></h2>
  <p>IQ: <b><?php echo $user_data["IQ"]; ?></b></p>
  <p>Joined <?php echo $date ?></p>
  <p># of Posts: <?php echo $size; ?></p>
<!-- Display User ID -->
<?php  if ($privelege == "admin") { ?>
  <p>User ID: <?php echo $user_id; ?></p>
<?php  } ?>
<!-- -->
  <p id="error" style="display:none;"><?php echo $this->error; ?></p>
</div>


<!-- Menu for Admin and SAdmin -->
<?php
if ($privelege == "admin") {
?>
<p class="menu" id="posts">My Posts</p>
<p class="menu" id="settings">Settings</p>
<p class="menu" id="dashboard">Dashboard</p>
<p class="menu" id="admin">Admin</p>
<p class="menu" id="records">User Records</p>
<hr />

<?php } else if ($privelege == "user") { ?>
<p class="menu" id="posts">My Posts</p>
<p class="menu" id="settings">Settings</p>
<hr />
<?php } else if ($privelege == "none") { ?>
<!-- For Viewing other profiles -->

<?php } else { return false; } ?>
