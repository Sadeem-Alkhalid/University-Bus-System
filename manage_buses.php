<?php
include("db_connection.php");

$query = "SELECT * FROM buses";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Buses</title>
</head>
<body>

<h2>Buses List</h2>

<table border="1">

<tr>
    <th>Bus ID</th>
    <th>Bus Number</th>
    <th>Driver Name</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['bus_number']; ?></td>
    <td><?php echo $row['driver_name']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>