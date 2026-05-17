<?php
include("db_connection.php");

$query = "SELECT * FROM drivers";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Drivers</title>
</head>
<body>

<h2>Drivers List</h2>

<table border="1">

<tr>
    <th>Driver ID</th>
    <th>Driver Name</th>
    <th>Phone Number</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['driver_name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>