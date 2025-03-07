<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: signup.php");
    exit();
}

$username = $_SESSION['username'];
$result = $conn->query("SELECT * FROM users WHERE username='$username'");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile - <?php echo $username; ?></title>
</head>
<body>
    <h2>Profile of <?php echo $username; ?></h2>

    <img src="uploads/<?php echo $user['profile_pic']; ?>" width="100"><br>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Change Profile Pic: <input type="file" name="profile_pic"><br>
        <input type="submit" name="upload" value="Upload">
    </form>

    <form action="profile.php" method="POST">
        Bio: <textarea name="bio"><?php echo $user['bio']; ?></textarea><br>
        Gender:
        <select name="gender">
            <option value="Male" <?php if ($user['gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if ($user['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            <option value="Other" <?php if ($user['gender'] == 'Other') echo 'selected'; ?>>Other</option>
        </select><br>
        <input type="submit" name="update" value="Update">
    </form>

    <a href="index.php">Back to Home</a>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $bio = $_POST['bio'];
    $gender = $_POST['gender'];

    $conn->query("UPDATE users SET bio='$bio', gender='$gender' WHERE username='$username'");
    echo "Profile updated!";
}
?>
