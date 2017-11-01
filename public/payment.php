<?php
$amount = $_POST['amount'];
$date = date("Y-m-d");
$user = $_POST['userid'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "afos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql1 = "INSERT into payments (userid,payment_amount,payment_date) values('$user','$amount','$date')";
$sql2 = "UPDATE users SET totalpayment = totalpayment - '".$amount."' WHERE userid = '".$user."'";
$result1 = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);

if($result1 && $result2){
    echo "Payment Success";
}else{
   echo "Error";
}

mysqli_close($conn);

?>