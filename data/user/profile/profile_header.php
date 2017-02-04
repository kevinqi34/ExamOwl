<div class="profile_header">
  <h2><?php echo $user_data["NAME"]; ?></h2>
  <p>IQ: <b><?php echo $user_data["IQ"]; ?></b></p>
  <p>Joined <?php echo $date ?></p>
  <p># of Posts: <?php echo $size; ?></p>
  <p id="error" style="display:none;"><?php echo $this->error; ?></p>
</div>

<!-- Assign Priveleges -->
<?php
  if ($this->privelege == "admin" || $this->privelege == "sadmin") {
    $privelege = "admin";
  } else {
    $privelege = "user";
  }
?>

<!-- Menu for Admin and SAdmin -->
<?php
if ($privelege == "admin") {
?>
<p class="menu" id="posts">My Posts</p>
<p class="menu" id="dashboard">Dashboard</p>
<p class="menu" id="admin">Admin</p>
<p class="menu" id="records">User Records</p>
<hr />

<?php } ?>
