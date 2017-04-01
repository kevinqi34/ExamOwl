<h2>User's Comments</h2>
<table>
  <tr>
    <th>ID</th>
    <th>Content</th>
    <th>Create Date</th>
    <th>THREAD_ID</th>
  </tr>

<?php
  foreach ($data as $table) {
?>
    <tr>
      <td><?php echo $table["ID"]; ?></td>
      <td><?php echo $table["CONTENT"]; ?></td>
      <td><?php echo $table["CREATE_DATE"]; ?></td>
      <td><?php echo $table["THREAD_ID"]; ?></td>
    </tr>
<?php
  }
?>
</table>
