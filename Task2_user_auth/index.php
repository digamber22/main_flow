<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css"><title>Login</title></head>
<body>
<form method="POST" action="login.php">
    <h2>Login</h2>
    <input type="text" name="username_email" placeholder="Username or Email" required/>
    <input type="password" name="password" placeholder="Password" required/>
    <button type="submit">Login</button>
    <p>Don't have an account? <a href="register.php">Register</a></p>
</form>
</body>
</html>
