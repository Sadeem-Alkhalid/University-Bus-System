<!-- student_trip_history.php -->
<?php

$trip_history = [
    ["trip" => "Morning Trip", "date" => "2026-05-10"],
    ["trip" => "Evening Trip", "date" => "2026-05-12"],
    ["trip" => "Campus Trip", "date" => "2026-05-15"]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Trip History</title>

    <style>
        body{
            font-family: Arial;
            background:#f2f2f2;
            padding:20px;
        }

        table{
            width:60%;
            background:white;
            border-collapse: collapse;
        }

        th, td{
            padding:12px;
            border:1px solid #ccc;
            text-align:center;
        }

        th{
            background:#007BFF;
            color:white;
        }
    </style>
</head>

<body>

<h2>Student Trip History</h2>

<table>
    <tr>
        <th>Trip Name</th>
        <th>Date</th>
    </tr>

    <?php
    foreach($trip_history as $trip)
    {
        echo "<tr>";
        echo "<td>".$trip['trip']."</td>";
        echo "<td>".$trip['date']."</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>