<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup - OldArticles</title>
</head>
<body>
    <h2>Signup</h2>
    <form action="process_signup.php" method="POST">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Signup</button>
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>
