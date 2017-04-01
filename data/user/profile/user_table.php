<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>IQ</th>
  </tr>

<?php
  foreach ($data as $table) {
?>
    <tr>
      <td><?php echo $table["NAME"]; ?></td>
      <td><?php echo $table["EMAIL"]; ?></td>
      <td><?php echo $table["IQ"]; ?></td>
    </tr>
<?php
  }
?>
</table>
