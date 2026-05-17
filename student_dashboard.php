<?php
session_start();

if (!isset($_SESSION['student_name'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
</head>
<body>

<h1>Welcome <?php echo $_SESSION['student_name']; ?></h1>

<ul>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>