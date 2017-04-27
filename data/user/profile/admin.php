<?php
// Find Priveleges
$s_privelege = $this->privelege;

if ($privelege == "admin") {
// Return Categories
$category = new category();
$category->return_categories();
?>
<div class='admin'>
<?php
// Displays Categories
$category->admin($user_data["USER_TYPE"]);

// Disable Users Features
$this->disable_users();

// Super admin features
if ($user_data["USER_TYPE"] == 'sadmin') {
  $this->manage_users();
  // Delete Users
  $this->blacklist();
}

?>

</div>
<?php } ?>
