<?php

$conn = mysqli_connect("localhost", "root", "", "bus_system");

if (!$conn) {
    die("Connection failed");
}

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO students(name, email, password)
              VALUES('$name','$email','$password')";

    if (mysqli_query($conn, $query)) {
        echo "Registration Successful";
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Register</h2>

<form method="POST">

    <input type="text" name="name" placeholder="Enter Name" required>

    <input type="email" name="email" placeholder="Enter Email" required>

    <input type="password" name="password" placeholder="Enter Password" required>

    <button type="submit" name="register">Register</button>

</form>

</body>
</html>