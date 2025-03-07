<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>OldArticles - Home</title>
</head>
<body>
    <h1>Welcome to OldArticles</h1>
    <p>Discover and share historical articles.</p>

    <nav>
        <a href="index.php">Home</a> |
        <a href="about.php">About</a> |
        <a href="contact.php">Contact</a> |
        <a href="signup.php">Signup</a> |
        <a href="articles.php">Articles</a>
    </nav>

    <?php if (isset($_SESSION['username'])): ?>
        <p>Welcome, <a href="profile.php"><?php echo $_SESSION['username']; ?></a></p>
    <?php endif; ?>
</body>
</html>
