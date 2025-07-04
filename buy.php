<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_email']) || !isset($_GET['id'])) {
    header("Location: login.php");
    exit();
}

$user_email = $_SESSION['user_email'];
$course_id = intval($_GET['id']);

// Check if already purchased
$check = $conn->prepare("SELECT * FROM purchases WHERE user_email = ? AND course_id = ?");
$check->bind_param("si", $user_email, $course_id);
$check->execute();
$res = $check->get_result();

if ($res->num_rows === 0) {
    // Insert purchase
    $insert = $conn->prepare("INSERT INTO purchases (user_email, course_id) VALUES (?, ?)");
    $insert->bind_param("si", $user_email, $course_id);
    $insert->execute();
}

header("Location: my-courses.php");
exit();
