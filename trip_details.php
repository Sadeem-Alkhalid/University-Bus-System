<!-- trip_details.php -->
<?php
$trip_id = 1;

$trip = [
    "bus_number" => "BUS-12",
    "driver" => "Ahmed Ali",
    "departure_time" => "08:00 AM",
    "destination" => "University Campus",
    "available_seats" => 10
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trip Details</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            padding:20px;
        }

        .container{
            background:white;
            padding:20px;
            width:400px;
            border-radius:10px;
        }

        h2{
            color:#333;
        }

        p{
            font-size:18px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Trip Details</h2>

    <p><strong>Bus Number:</strong> <?php echo $trip['bus_number']; ?></p>

    <p><strong>Driver:</strong> <?php echo $trip['driver']; ?></p>

    <p><strong>Departure Time:</strong> <?php echo $trip['departure_time']; ?></p>

    <p><strong>Destination:</strong> <?php echo $trip['destination']; ?></p>

    <p><strong>Available Seats:</strong> <?php echo $trip['available_seats']; ?></p>
</div>

</body>
</html>