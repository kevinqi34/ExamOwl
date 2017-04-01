<h2>User's Threads</h2>
<table>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Create Date</th>
    <th>CAT_ID</th>
  </tr>

<?php
  foreach ($data as $table) {
?>
    <tr>
      <td><?php echo $table["ID"]; ?></td>
      <td><?php echo $table["TITLE"]; ?></td>
      <td><?php echo $table["CREATE_DATE"]; ?></td>
      <td><?php echo $table["CAT_ID"]; ?></td>
    </tr>
<?php
  }
?>
</table>
