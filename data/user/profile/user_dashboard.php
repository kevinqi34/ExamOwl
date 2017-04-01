<?php
if ($privelege == "admin") {
$user_table = $this->admin();
$num_of_users = sizeof($user_table);
$latest_user = $user_table[0]["EMAIL"];
$percent = round($this->num_of_ver_users / $num_of_users * 100);
?>
<div class="dashboard">
  <h3>Dashboard</h3>
  <p><span>Users: <?php echo $num_of_users; ?></span></p>
  <p><span>Verified Users: <?php echo $this->num_of_ver_users; ?></span></p>
  <p><span>Disabled Users: <?php echo $this->num_of_dis_users; ?></span></p>
  <p><span>Banned Users: <?php echo $this->num_of_blacklist_users; ?></span></p>
  <p><span>Admins: <?php echo $this->num_of_admins; ?></span></p>
  <p><span>% Verifed: <?php echo $percent; ?></span></p>
  <p><span>Latest Registrant: </span><?php echo $latest_user; ?></p>
  <p><span># of Posts: </span><?php echo $this->num_of_threads; ?></p>
  <p><span># of Comments: </span><?php echo $this->num_of_comments; ?></p>
  <p><span># of Resources: </span><?php echo $this->num_of_res; ?></p>
  <p><span># of User Votes: </span><?php echo $this->num_of_votes; ?></p>

  <!-- Top IQ Users -->
  <h2>Top IQ Users</h2>
  <?php $data = $this->get_top_IQ_users(); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/user_table.php') ?>

  <!-- Users Over 1000 IQ -->
  <h2>Users Over 1000 IQ</h2>
  <?php $data = $this->get_IQ_winners(); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/data/user/profile/user_table.php') ?>

</div>

<?php } ?>
