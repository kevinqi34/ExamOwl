<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Slug</th>
    <th>Create Date</th>
    <th># of Posts</th>
    <th>Latest Post</th>
    <th>Latest Post Date</th>
    <th>Icon Url</th>
    <th></th>
  </tr>

<?php
  foreach ($this->data as $table) {
?>
    <tr>
      <td><?php echo $table["ID"]; ?></td>
      <td><?php echo $table["NAME"]; ?></td>
      <td><?php echo $table["SLUG"]; ?></td>
      <td><?php echo $table["CREATE_DATE"]; ?></td>
      <td><?php echo $table["NUM_OF_POSTS"]; ?></td>
      <td><?php echo $table["LATEST_POST"]; ?></td>
      <td><?php echo $table["LATEST_POST_DATE"]; ?></td>
      <td><?php echo $table["ICON_URL"]; ?></td>
      <td>
        <form method="post">
          <input type="hidden" id="remove_cat" name="remove_cat" value="<?php echo $table["ID"]; ?>"required />
          <button type="submit" value="remove_cat">Remove</button>
        </form>
      </td>
    </tr>
<?php
  }
?>
</table>
