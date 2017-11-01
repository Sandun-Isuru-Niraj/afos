<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<table class="w3-table w3-text-white">
<tr>
<th>Name</th>
<th>UserID</th>
<th>Total</th>
</tr>
<?php
$q = $_REQUEST["q"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "afos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql="SELECT * FROM users WHERE userid = '".$q."'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['fname'] ." ". $row['lname'] ."</td>";
    echo "<td>" . $row['userid'] . "</td>";
    echo "<td>" . $row['totalpayment'] . "</td>";
    echo "</tr>";
}
mysqli_close($conn);
?>
</table>
</body>
</html>