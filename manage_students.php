<?php
include("db_connection.php");

$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Students</title>
</head>
<body>

<h2>Students List</h2>

<table border="1">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>