<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['user_email'];

$query = "
SELECT c.name, c.image, c.description, c.price
FROM courses c
JOIN purchases p ON c.id = p.course_id
WHERE p.user_email = ?
";

$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Courses</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
  <h2>My Purchased Courses</h2>

  <?php if ($result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
      <div class="course">
        <img src="assets/images/<?= $row['image'] ?>" width="150">
        <div class="course-info">
          <h3><?= $row['name'] ?></h3>
          <p><?= $row['description'] ?></p>
          <p><strong>₹<?= $row['price'] ?></strong></p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p>You have not purchased any courses yet.</p>
  <?php endif; ?>
</div>
</body>
</html>
