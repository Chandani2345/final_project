<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Knowledge Point - Your Learning Hub</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .banner {
      background: url('assets/images/banner.jpg') no-repeat center center/cover;
      height: 250px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
      font-size: 2em;
      font-weight: bold;
      border-radius: 10px;
      margin-bottom: 30px;
    }
    .actions {
      text-align: center;
      margin-top: 20px;
    }
    .actions button {
      margin: 0 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="banner">

    Welcome to Knowledge Point
  </div>

  <div class="actions">
    <?php if (isset($_SESSION['user'])): ?>
      <p>Hello, <strong><?= $_SESSION['user'] ?></strong>!</p>
      <a href="courses.php"><button>View Courses</button></a>
      <a href="my-courses.php"><button>My Courses</button></a>
      <a href="logout.php"><button>Logout</button></a>
    <?php else: ?>
      <a href="register.php"><button>Register</button></a>
      <a href="login.php"><button>Login</button></a>
    <?php endif; ?>
	<a href="about.php"><button>About Us</button></a>
<a href="contact.php"><button>Contact</button></a>

  </div>
</div>

</body>
</html>
