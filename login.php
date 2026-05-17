<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "bus_system");

if (!$conn) {
    die("Connection failed");
}

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM students WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['student_id'] = $row['id'];
        $_SESSION['student_name'] = $row['name'];

        header("Location: student_dashboard.php");
    } else {
        echo "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="login-box">

    <h2>Student Login</h2>

    <form method="POST">

        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit" name="login">Login</button>

    </form>

</div>

</body>
</html>