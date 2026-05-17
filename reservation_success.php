<?php
session_start();

$student_name = "Student";
$trip_name = "University Morning Trip";
$seat_number = "12";

if (isset($_SESSION['student_name'])) {
    $student_name = $_SESSION['student_name'];
}

if (isset($_GET['trip'])) {
    $trip_name = $_GET['trip'];
}

if (isset($_GET['seat'])) {
    $seat_number = $_GET['seat'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Success</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color:#f4f6f9;
            margin:0;
            padding:0;
        }

        .container{
            width:500px;
            margin:80px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
            text-align:center;
        }

        .success-icon{
            font-size:60px;
            color:green;
        }

        h1{
            color:#333;
        }

        p{
            font-size:18px;
            color:#555;
        }

        .details{
            margin-top:20px;
            background:#f0f0f0;
            padding:15px;
            border-radius:8px;
            text-align:left;
        }

        .btn{
            display:inline-block;
            margin-top:25px;
            padding:12px 20px;
            background:#007bff;
            color:white;
            text-decoration:none;
            border-radius:5px;
        }

        .btn:hover{
            background:#0056b3;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="success-icon">✔</div>

    <h1>Reservation Successful</h1>

    <p>Your bus seat has been reserved successfully.</p>

    <div class="details">
        <p><strong>Student:</strong> <?php echo $student_name; ?></p>
        <p><strong>Trip:</strong> <?php echo $trip_name; ?></p>
        <p><strong>Seat Number:</strong> <?php echo $seat_number; ?></p>
    </div>

    <a href="student_dashboard.php" class="btn">
        Back to Dashboard
    </a>

</div>

</body>
</html>