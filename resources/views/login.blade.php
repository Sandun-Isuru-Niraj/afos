@extends('layout.common')

@section('title')

    Mess : Login

@endsection

@section('content')

    <div class="w3-container">
        <div class="w3-container">
            @if(session()->has('message'))
                <div class="w3-container w3-red w3-card-8">
                    <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">x</span>
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>


        <br>


        <div class="w3-modal-content w3-card-8 w3-animate-top" style="max-width:400px"  id="form_style">
            <header class="w3-container w3-brown">
                <h3>Login Now!</h3>
            </header>
            <div class="w3-center"><br>
                      <img src="logo.png" alt="Avatar" style="width:50%">
            </div>

            <div class="w3-container">
                <div class="w3-section">

                    <form class="" action="{{route('login')}}" method="post">
                        {{ csrf_field() }}
                        <label class="w3-label w3-text-white"><i class="fa fa-user"></i><b> UserID: </b></label>
                        <input class="w3-input w3-border w3-margin-bottom w3-black w3-text-white" type="text" placeholder="Enter User ID" name="userid" required>

                        <label class="w3-label w3-text-white"><i class="fa fa-key"></i><b> Password</b></label>
                        <input class="w3-input w3-border w3-margin-bottom w3-black w3-text-white" type="password" placeholder="Enter Password" name="password" required>
                        <br>

                                <button class="w3-btn w3-btn-block w3-brown"><i class="fa fa-sign-in"></i> Login</button>

                    </form>
                </div>
            </div>

            <div class="w3-container w3-border-top w3-padding-16 w3-black">
                <span class="w3-right w3-padding w3-hide-small"><a href="#">Forgot password?</a></span>
                <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
            </div>
        </div>

        <div class="w3-container w3-third">
        </div>


    </div>

@endsection