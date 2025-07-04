<?php
$servername = "ftpupload.net";
$username = "if0_39380591";
$password = "chandani1234567";
$database = "if0_39380591_knowledge_point"; // ✅ make sure this matches

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
