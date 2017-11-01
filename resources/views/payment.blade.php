@extends('layout.admin')

@section('title')
    Admin : Accounts -> Payments
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
<a href="{{route('account')}}" class="w3-bar-item w3-button w3-hover-brown"><i class="fa fa-stack-overflow fa-lg"></i> All Accounts</a>
 <a href="#" class="w3-bar-item w3-button  w3-red"><i class="fa fa-server fa-lg"></i> Accept Payments</a>
 <a href="#" class="w3-bar-item w3-button w3-hover-brown"><i class="fa fa-question-circle fa-lg"></i> Help</a>
 <a href="{{route('logout')}}" class="w3-bar-item w3-button w3-hover-brown"><i class="fa fa-ticket fa-lg"></i> Logout</a>
 <br>
    <footer class="w3-container w3-brown">
  <br/>
</footer>
</div>

  </div>

  <div class="w3-twothird w3-container w3-text-white">
  <form class="w3-container" name="myForm" action="payment.php" method="post">


  <table class="w3-text-white">
    <tr>
      <td><label>Enter UserID: </label></td>
      <td><input class="w3-input" type="text" name ="userid" oninput="showUser(this.value)"></td>
    </tr>
  </table>
      

<hr>
  <br>
  <div id="txtHint"></div>
<br>
<br>
<hr>

  <table class="w3-text-white">
    <tr>
      <td><label>Payment Amount:</label></td>
      <td><input class="w3-input" type="text" name ="amount"></td>
      <td><button class="w3-button w3-red">Pay Now!</button></td>
    </tr>
  </table>  
  </form>

  </div>
</div>

<script>
function showUser(str) {

  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
@endsection