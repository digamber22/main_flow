<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css"><title>Register</title></head>
<body>
<form method="POST" action="signup.php">
    <h2>Register</h2>
    <input type="text" name="username" placeholder="Username" required/>
    <input type="email" name="email" placeholder="Email" required/>
    <input type="password" name="password" placeholder="Password" required/>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required/>
    <button type="submit">Register</button>
    <p>Already have an account? <a href="index.php">Login</a></p>
</form>
</body>
</html>
