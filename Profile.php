<?php
session_start();

if (!isset($_SESSION['student_name'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h2>Student Profile</h2>

<p>Name: <?php echo $_SESSION['student_name']; ?></p>

</body>
</html>