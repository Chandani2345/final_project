<?php
session_start();
include 'db.php';

// Check login
if (!isset($_SESSION['user_email'])) {
  header("Location: login.php");
  exit();
}

$result = $conn->query("SELECT * FROM courses");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Courses - Knowledge Point</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
  <h2>Available Courses</h2>

  <?php if ($result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
      <div class="course">
        <img src="assets/images/<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
        <div class="course-info">
          <h3><?= $row['name'] ?></h3>
          <p><?= $row['description'] ?></p>
          <p><strong>₹<?= $row['price'] ?></strong></p>
          <a href="buy.php?id=<?= $row['id'] ?>"><button>Buy Course</button></a>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p>No courses found. Please check your database.</p>
  <?php endif; ?>

</div>
</body>
</html>
