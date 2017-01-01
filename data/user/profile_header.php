<div class="profile_header">
  <h2><?php echo $user_data["NAME"]; ?></h2>
  <p>Joined <?php echo $date ?></p>
  <p># of Posts: <?php echo $size; ?></p>
</div>

<!-- Menu for Admin -->
<?php
if ($user_data["USER_TYPE"] == 'admin') {
?>
<p class="menu" id="posts">My Posts</p>
<p class="menu" id="dashboard">Dashboard</p>
<p class="menu" id="admin">Admin</p>
<hr />

<?php } ?>

<div class="profile_posts profile_header">
<?php
if ($size == 0) {
  echo "<p style='text-align:center;'>You have not posted anything yet.</p>";

} else {
?>
  <h3>My Posts</h3>
<?php

foreach($thread_data as $thread) {
$date = time_elapsed_string($thread["CREATE_DATE"]);
?>
  <div class="thread">
    <h3><?php echo $thread["TITLE"]; ?></h3>
    <p># of Responses: <?php echo $thread["NUM_OF_COMMENTS"]; ?></p>
    <p>Posted <?php echo $date; ?> by <?php echo $thread["AUTHOR"]; ?></p>
    <form method="post">
      <input type="hidden" id="remove_thread" name="remove_thread" value="<?php echo $thread["ID"]; ?>"required />
      <input type="hidden" id="remove_cat" name="remove_cat" value="<?php echo $thread["CAT_ID"]; ?>"required />
      <button type="submit" value="remove_thread">Remove</button>
      <p id="error"><?php echo $this->error; ?></p>
    </form>
  </div>
<?php } ?>


<?php } ?>
</div>

<?php
$user_table = $this->admin();
$num_of_users = sizeof($user_table);
$latest_user = $user_table[0]["EMAIL"];
if ($user_data["USER_TYPE"] == 'admin') {
?>
<div class="dashboard">
  <h3>Dashboard</h3>
  <p><span>Users: <?php echo $num_of_users; ?></span></p>
  <p><span>Latest Registrant: </span><?php echo $latest_user; ?></p>
  <p><span># of Posts: </span><?php echo $this->num_of_threads; ?></p>
  <p><span># of Comments: </span><?php echo $this->num_of_comments; ?></p>

</div>
<?php

$category = new category();
$category->return_categories();
echo "<div class='admin'>";
$category->admin();
$this->manage_users();
echo "</div>";

}

?>
