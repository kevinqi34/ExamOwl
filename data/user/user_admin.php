<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Create Date</th>
    <th>Type</th>
    <th></th>
  </tr>

<?php
  foreach ($data as $table) {
?>
    <tr>
      <td><?php echo $table["ID"]; ?></td>
      <td><?php echo $table["NAME"]; ?></td>
      <td><?php echo $table["CREATE_DATE"]; ?></td>
      <td><?php echo $table["USER_TYPE"]; ?></td>
      <td>
        <form method="post">
          <input type="hidden" id="remove_user" name="remove_user" value="<?php echo $table["ID"]; ?>"required />
          <button type="submit" value="remove_user">Remove</button>
        </form>
      </td>
    </tr>
<?php
  }
?>
</table>
