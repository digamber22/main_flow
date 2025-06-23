<?php
session_start();
include 'db.php';

$username_email = $_POST['username_email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :ue OR email = :ue");
$stmt->execute(['ue' => $username_email]);
$user = $stmt->fetch();

if (!$user) {
    die("User does not exist.");
}
if (!password_verify($password, $user['password'])) {
    die("Incorrect password.");
}
$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];
header("Location: dashboard.php");
exit();
