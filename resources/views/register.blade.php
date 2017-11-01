@extends('layout.common')

@section('title')

    Mess : Register

@endsection

@section('content')

    <div class="w3-row">

        <div class="w3-quarter" id="form_style">
            @if(session()->has('message'))
                <div class="w3-container w3-green w3-card-8">
                    <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">x</span>
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
        <div class="w3-animate-left" id="form_style">

            @if (count($errors)>0)
                <div class="w3-container w3-red w3-card-8">
                    <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">x</span>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="w3-card-4">

                    <div class="w3-container w3-brown">
                        <h2><i class="fa fa-address-card"></i> Register Now!</h2>
                    </div>

                    <form class="w3-container" name="regform" action="{{route('registeruser')}}" method="post">

                        <label class="w3-label w3-text-white">Username :</label>
                        <input class="w3-input w3-border w3-margin-bottom w3-black w3-text-white" type="text" name="userid" required>

                        <label class="w3-label w3-text-white">Password :</label>
                        <input class="w3-input w3-border w3-margin-bottom w3-black w3-text-white" type="password" name="pwd" oninput="move()" required>
                        <div class="w3-panel w3-red" id="alert1" style="display:none ">
                            <p>Password to much short!</p>
                        </div>
                        <div class="w3-panel w3-orange" id="alert2" style="display:none ">
                            <p>Try more secure!</p>
                        </div>
                        <div class="w3-panel w3-green" id="alert3" style="display:none ">
                            <p>Perfect!</p>
                        </div>

                        <label class="w3-label w3-text-white">Confirm Password :</label>
                        <input class="w3-input w3-border w3-margin-bottom w3-black w3-text-white" type="password" name="password" oninput="valpawd()" required>

                        <div class="w3-panel w3-red" id="alert4" style="display:none ">
                            <p>Password does not match!</p>
                        </div>
                        <div class="w3-panel w3-green" id="alert5" style="display:none ">
                            <p>Password Matched!</p>
                        </div>

                        <label class="w3-label w3-text-white">First Name:</label>
                        <input class="w3-input w3-border w3-margin-bottom w3-black w3-text-white" type="text" name="fname" required>

                        <label class="w3-label w3-text-white">Last Name :</label>
                        <input class="w3-input w3-border w3-margin-bottom w3-black w3-text-white" type="text" name="lname" required>

                        <label class="w3-label w3-text-white">Index No:</label>
                        <input class="w3-input w3-border w3-margin-bottom w3-black w3-text-white" type="text" name="index" required>

                        <label class="w3-label w3-text-white">Telephone No :</label>
                        <input class="w3-input w3-border w3-margin-bottom w3-black w3-text-white" type="number" name="telno" required>


                        <button class="w3-btn w3-brown" id="button">Register</button>
                        <button class="w3-btn w3-red w3-right" id="button">cancel</button>
                        {{ csrf_field() }}
                        <br>
                        <script>
                            var width = 1;
                            function move() {
                                var elem1 = document.getElementById("alert1");
                                var elem2 = document.getElementById("alert2");
                                var elem3 = document.getElementById("alert3");
                                var x = document.forms["regform"]["pwd"].value;
                                if (x.length<8) {
                                    elem1.style.display= 'block' ;
                                    elem2.style.display= 'none' ;
                                    elem3.style.display= 'none' ;


                                }else if(x.length< 12 && x.length>=8){
                                    elem1.style.display= 'none';
                                    elem2.style.display= 'block' ;
                                    elem3.style.display= 'none' ;

                                }else {
                                    elem1.style.display= 'none';
                                    elem2.style.display= 'none' ;
                                    elem3.style.display= 'block';

                                }

                            }

                            function valpawd() {
                                var x = document.forms["regform"]["pwd"].value;
                                var y = document.forms["regform"]["password"].value;
                                var elem4 = document.getElementById("alert5");
                                var elem5 = document.getElementById("alert4");

                                if(x == y){
                                    elem5.style.display= 'none';
                                    elem4.style.display= 'block' ;
                                }else{
                                    elem4.style.display= 'none';
                                    elem5.style.display= 'block' ;
                                }
                            }
                        </script>
                        <br>
                    </form>

                </div>


        </div>
    </div>
@endsection