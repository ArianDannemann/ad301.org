<?php
include 'php_connect.php';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO guestbook (Name, Date, URL, Comment, CAPTCHA, Might_be_bot) VALUES (?, NOW(), ?, ?, ?, 0)");
$stmt->bind_param("ssss", $name, $url, $comment, $captcha);

// Set parameters and execute
$name = $_POST['name']; // Ensure this matches the input name in the form
$url = isset($_POST['url']) ? $_POST['url'] : NULL;
$comment = $_POST['comment'];
$captcha = $_POST['captcha'];
$stmt->execute();

echo "New record created successfully";
header("Location: ../index.php");

$stmt->close();
$conn->close();
?>