<?php 
include ('db.php');
if(!isset($con)){
    $con = include 'db.php';
}
if (!$con){
    die('Database connection not established.');
}
$result = mysqli_query($con, "select * from users");

?>

<!DOCTYPE html>
<html>

<head>
  <title>CRUD App</title>
</head>

<body>

  <h2>User List</h2>

  <a href="create.php">Add User</a>

  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
          <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
        </td>
      </tr>
    <?php } ?>

  </table>

</body>

</html>