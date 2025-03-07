<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: signup.php");
    exit();
}

$username = $_SESSION['username'];

if (isset($_POST['upload'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);

    if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
        $conn->query("UPDATE users SET profile_pic='".basename($_FILES["profile_pic"]["name"])."' WHERE username='$username'");
        echo "Profile picture updated!";
    } else {
        echo "Error uploading file.";
    }
}

header("Location: profile.php");
?>
