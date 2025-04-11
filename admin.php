<?php
include 'config.php';
$result = $conn->query("SELECT * FROM feedback ORDER BY submitted_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin - Feedback List</title>
</head>
<body>
  <h2>Feedback Received</h2>
  <table border="1">
    <tr>
      <th>ID</th><th>Email</th><th>Category</th><th>Message</th><th>Time</th><th>Status</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['category'] ?></td>
      <td><?= $row['message'] ?></td>
      <td><?= $row['submitted_at'] ?></td>
      <td><?= $row['status'] ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
