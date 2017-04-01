<div class="records">
<h3>User Records</h3>
<?php
// Get Data
$data = $this->return_offenders($privelege);

// If Data
if (sizeof($data) != 0) {

// Loop through data
foreach ($data as $offender) {
?>
<a href="<?php echo url(). $offender["TITLE"]; ?>"><?php echo $offender["TITLE"]; ?></a>
<?php
}
} else {
  echo "No records found.";
}
?>
</div>
