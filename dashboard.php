<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
<h2>Welcome, <?php echo htmlentities($_SESSION['username']); ?></h2>
<p>You are logged in!</p>
<form method="POST" action="logout.php"><button type="submit">Logout</button></form>
</body>
</html>
