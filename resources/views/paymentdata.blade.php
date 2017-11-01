@extends('layout.admin')

@section('title')
    Admin : Orders
@endsection

@section('body')


    <br>
    <div class="w3-row">
        <div class="w3-quarter w3-container">

        </div>
        <div class="w3-half w3-container">
            <div class="w3-card-4" id="form_style">

                <header class="w3-container w3-brown">
                    <h4>Show All Oreders</h4>
                </header>

                <div class="w3-container">
                <table class="w3-table w3-text-white w3-bordered w3-hoverable">
        <tr class="w3-brown">
        <th>Username</th>
        <th>Name</th> 
        <th>Index No.</th>
        <th>Telephone</th>
        <th>Total</th>
        </tr>>
        <tr>
 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "afos";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$date = date("Y-m-d");
$sql = "SELECT * FROM payments,users where payments.userid=users.userid";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo date("Y-m-d");
    while($row = mysqli_fetch_assoc($result)) {
        
        echo  "<tr><td>". $row["userid"]."</td><td>". $row["fname"]." ". $row["lname"]."</td><td>". $row["index"]."</td><td>". $row["telno"]."</td><td>". $row["payment_amount"]."</td></tr>";
        }
    }

    mysqli_close($conn);
    ?>
        
            
    </table>
    <br>
                </div>

                <footer class="w3-container w3-brown">
                    <h5></h5>
                </footer>

            </div>
        </div>
        <div class="w3-quarter w3-container">
        </div>
    </div>

@endsection