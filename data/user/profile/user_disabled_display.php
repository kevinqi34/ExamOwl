<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Create Date</th>
    <th>Type</th>
    <th>Status</th>
  </tr>

<?php
  foreach ($data as $table) {
?>
    <tr>
      <td><?php echo $table["ID"]; ?></td>
      <td><?php echo $table["NAME"]; ?></td>
      <td><?php echo $table["CREATE_DATE"]; ?></td>
      <td><?php echo $table["USER_TYPE"]; ?></td>
      <td><?php echo $table["STATUS"]; ?></td>
    </tr>
<?php
  }
?>
</table>
