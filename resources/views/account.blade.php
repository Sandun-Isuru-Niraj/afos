@extends('layout.admin')

@section('title')
    Admin : Accounts
@endsection

@section('body')


<div class="w3-row w3-text-white">
    <br><br><br>
    
  <div class="w3-third w3-container " >
  <div class="w3-bar-block w3-card-4" id="form_style">
  <header class="w3-container w3-brown">
  <h2>Account Menu</h2>
</header>
<br>
<a href="#" class="w3-bar-item w3-button w3-red"><i class="fa fa-stack-overflow fa-lg"></i> All Accounts</a>
 <a href="{{route('payment')}}" class="w3-bar-item w3-button  w3-hover-brown"><i class="fa fa-server fa-lg"></i> Accept Payments</a>
 <a href="#" class="w3-bar-item w3-button w3-hover-brown"><i class="fa fa-question-circle fa-lg"></i> Help</a>
 <a href="{{route('logout')}}" class="w3-bar-item w3-button w3-hover-brown"><i class="fa fa-ticket fa-lg"></i> Logout</a>
 <br>
    <footer class="w3-container w3-brown">
  <br/>
</footer>
</div>

  </div>
  <div class="w3-twothird w3-container">
  <table class="w3-table w3-text-white">
        <tr>
        <th>Name</th>
        <th>User ID</th> 
        <th>Index No</th>
        <th>Telephone</th>
        <th>Total</th>
        </tr>
        <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "afos";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM users where adminuserid IS NULL";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
        echo  "<tr><td>". $row["fname"]." ". $row["lname"]."</td><td>". $row["userid"]."</td><td>". $row["index"]."</td><td>". $row["telno"]."</td><td>". $row["totalpayment"]."</td></tr>";
        }
    }

    mysqli_close($conn);
    ?>
    </table> 
  </div>
</div>

@endsection


