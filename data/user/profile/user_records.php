<div class="records">
<?php
// Get Data
$data = $this->return_offenders($privelege);

// If Data
if (sizeof($data) != 0) {

// Loop through data
foreach ($data as $offender) {
?>
<a href="<?php echo url(). $offender["SLUG"]; ?>"><?php echo $offender["SLUG"]; ?></a>
<?php
}
} else {
  echo "No records found.";
}
?>
</div>
