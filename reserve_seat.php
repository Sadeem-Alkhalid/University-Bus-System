<?php

$conn = mysqli_connect("localhost", "root", "", "bus_system");

if (!$conn) {
    die("Connection failed");
}

if (isset($_POST['reserve'])) {

    $student_name = $_POST['student_name'];
    $seat_number = $_POST['seat_number'];

    $check = "SELECT * FROM reservations WHERE seat_number='$seat_number'";
    $result = mysqli_query($conn, $check);

    if (mysqli_num_rows($result) > 0) {
        echo "Seat already reserved";
    } else {

        $query = "INSERT INTO reservations(student_name, seat_number)
                  VALUES('$student_name', '$seat_number')";

        if (mysqli_query($conn, $query)) {
            echo "Seat Reserved Successfully";
        } else {
            echo "Error";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reserve Seat</title>
    <script src="js/reservation.js"></script>
</head>
<body>

<h2>Bus Seat Reservation</h2>

<form method="POST">

    <input type="text" name="student_name" placeholder="Student Name" required>

    <input type="number" name="seat_number" placeholder="Seat Number" required>

    <button type="submit" name="reserve">Reserve Seat</button>

</form>

</body>
</html>