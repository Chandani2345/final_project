<?php
include 'db.php'; // Make sure db.php exists and is correct

$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Insert into DB
  $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $message);
  if ($stmt->execute()) {
    $msg = "Thanks! Your message has been sent.";
  } else {
    $msg = "Error saving message. Please try again.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - Knowledge Point</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .contact-form {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .contact-form input, .contact-form textarea {
      width: 100%;
      margin-bottom: 15px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }
    .contact-form button {
      background-color: #007bff;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }
    .contact-form button:hover {
      background-color: #0056b3;
    }
    .container {
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Contact Us</h2>
  <div class="contact-form">
    <form method="POST" action="">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
      <button type="submit">Send Message</button>
    </form>
    <?php if (!empty($msg)) echo "<p style='color:green;'>$msg</p>"; ?>
  </div>
</div>

</body>
</html>
s