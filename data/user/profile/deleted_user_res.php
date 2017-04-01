<h2>User's Res</h2>
<table>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>URL</th>
    <th>Create Date</th>
    <th>Resource ID</th>
  </tr>

<?php
  foreach ($data as $table) {
?>
    <tr>
      <td><?php echo $table["ID"]; ?></td>
      <td><?php echo $table["TITLE"]; ?></td>
      <td><?php echo $table["URL"]; ?></td>
      <td><?php echo $table["CREATE_DATE"]; ?></td>
      <td><?php echo $table["RESOURCE_ID"]; ?></td>
    </tr>
<?php
  }
?>
</table>
