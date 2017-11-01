@extends('layout.dash')

@section('title')

    Select Meal

@endsection



@section('body')
    @if(session()->has('message'))
        <div class="w3-container w3-green w3-card-8">
            <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">x</span>
            {{ session()->get('message') }}
        </div>
    @endif
    <br>
    <form class="w3-container" name="selectform" action="{{ route('sendOrder') }}" method="post">

        <div class="w3-container">
            <div class="w3-row">
                <div class="w3-third w3-container">
                    <div class="w3-animate-left" id="form_style">

                        <div class="w3-card-4">

                            <div class="w3-container w3-brown">
                                <h2><i class="fa fa-coffee"></i> Select Your Breakfast</h2>
                            </div>

                            <br>

                            <label class="w3-label w3-text-white w3-padding-16"><i class="fa fa-user"></i><b> Select Your Meal Type: </b></label>
                            <select class="w3-select w3-padding-16" name="breakfast" oninput="move1()">
                                <option value="not" selected>N/A</option>
                                <option value="veg">Veg</option>
                                <option value="nonveg">Non-veg</option>
                            </select>
                            <br>
                            <label class="w3-label w3-text-white w3-padding-16"><i class="fa fa-usd"></i><b> Price For Meal: </b></label>
                            <label class="w3-label w3-text-white w3-padding-16" name="br1"><b> Rs.<p id="demo1">0</p></b></label>


                            <br>

                            <br>


                        </div>


                    </div>
                </div>
                <div class="w3-third w3-container">
                    <div class="w3-animate-left" id="form_style">

                        <div class="w3-card-4">

                            <div class="w3-container w3-brown">
                                <h2><i class="fa fa-cutlery"></i> Select Your Lunch</h2>
                            </div>


                            <br>

                            <label class="w3-label w3-text-white w3-padding-16"><i class="fa fa-user"></i><b> Select Your Meal Type: </b></label>
                            <select class="w3-select w3-padding-16" name="lunch" oninput="move2()">
                                <option value="not" selected>N/A</option>
                                <option value="veg">Veg</option>
                                <option value="nonveg">Non-veg</option>
                            </select>
                            <br>
                            <label class="w3-label w3-text-white w3-padding-16"><i class="fa fa-usd"></i><b> Price For Meal: </b></label>
                            <label class="w3-label w3-text-white w3-padding-16"><b> Rs.<p id="demo2">0</p></b></label>
                            <br>

                            <br>


                        </div>


                    </div>
                </div>

                <div class="w3-third w3-container">
                    <div class="w3-animate-left" id="form_style">

                        <div class="w3-card-4">

                            <div class="w3-container w3-brown">
                                <h2><i class="fa fa-moon-o"></i> Select Your Dinner</h2>
                            </div>


                            <br>
                            {{ csrf_field() }}
                            <label class="w3-label w3-text-white w3-padding-16"><i class="fa fa-user"></i><b> Select Your Meal Type: </b></label>
                            <select class="w3-select w3-padding-16" name="dinner" oninput="move3()">
                                <option value="not" selected>N/A</option>
                                <option value="veg">Veg</option>
                                <option value="nonveg">Non-veg</option>
                            </select>
                            <br>
                            <label class="w3-label w3-text-white w3-padding-16"><i class="fa fa-usd"></i><b> Price For Meal: </b></label>
                            <label class="w3-label w3-text-white w3-padding-16"><b> Rs.<p id="demo3">0</p></b></label>
                            <br>

                            <br>


                        </div>


                    </div>
                </div>


                <div class="w3-container">
                    <br>
                    <div class="w3-animate-left" id="form_style">

                        <div class="w3-card-4">
                            <br>
                            <br>
                            <label class="w3-label w3-text-white w3-padding-16" name="total"><b> Total Meal: Rs.<p id="demo4"></p></b></label>

                            <br>


                            <button class="w3-block w3-button w3-brown w3-hover-red">Send Order</button>
                            <br>
                            <button class="w3-block w3-button w3-brown w3-hover-red">Cancel</button>

                        </div>


                    </div>
                </div>
            </div>

        </div>


    </form>

    <script>

        var price = 0;
        var meal1 = 0;
        var meal2 = 0;
        var meal3 = 0;
        function move1() {

            var x = document.forms["selectform"]["breakfast"].value;
            if(x=="veg"){
                meal1 = 60;
                document.getElementById("demo1").innerHTML = 60;

            }else if(x=="nonveg"){
                meal1 =  90;
                document.getElementById("demo1").innerHTML = 90;
            }else{
                meal1 =  0;
                document.getElementById("demo1").innerHTML = 0;
            }
            total();

        }

        function move2() {

            var x = document.forms["selectform"]["lunch"].value;
            if(x=="veg"){
                meal2 = 100;
                document.getElementById("demo2").innerHTML = 100;

            }else if(x=="nonveg"){
                meal2 =  140;
                document.getElementById("demo2").innerHTML = 140;
            }else{
                meal2 =  0;
                document.getElementById("demo2").innerHTML = 0;
            }
            total();

        }

        function move3() {
            var x = document.forms["selectform"]["dinner"].value;
            if(x=="veg"){
                meal3 = 90;
                document.getElementById("demo3").innerHTML = 90;

            }else if(x=="nonveg"){
                meal3 =  110;
                document.getElementById("demo3").innerHTML = 110;
            }else{
                meal3 =  0;
                document.getElementById("demo3").innerHTML = 0;
            }
            total();
        }

        function total() {
            price = meal1 + meal2 + meal3;
            document.getElementById("demo4").innerHTML = price;
        }


    </script>



@endsection