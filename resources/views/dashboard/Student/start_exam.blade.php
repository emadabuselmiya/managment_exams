@extends('dashboard.layout.app')
@section('title')
    Questions
@stop
@section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #demo {
            text-align: center;
            font-size: 40px;
            margin-top: 0px;
        }
    </style>
@endsection
@section('page-header')
    <div class="col-sm-6">
        <h1 class="m-0">Questions</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Online Exam</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h3><span>1.</span> Input</h3><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- checkbox -->
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio1"
                                               name="customRadio">
                                        <label for="customRadio1" class="custom-control-label">Ahmad</label>
                                    </div>
                                    <br>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio2"
                                               name="customRadio">
                                        <label for="customRadio2" class="custom-control-label">Emad</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- radio -->
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio3"
                                               name="customRadio">
                                        <label for="customRadio3" class="custom-control-label">Mohammed</label>
                                    </div>
                                    <br>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="customRadio4"
                                               name="customRadio">
                                        <label for="customRadio4" class="custom-control-label">Ali</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-lg-4 col-sm-4">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Timer</h3>
                    </div>
                    <br>
                    <br>
                    <h4 id="demo" style="text-align: center"></h4>
                    <!-- /.card-header -->
                    <div class="card-body" style="text-align: center">
                        <a href="/examDelivery">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                <i class="fas fa-arrow-circle-right"></i>&nbsp;Next
                            </button>
                        </a>
                        <button type="button" class="btn btn-dark" data-toggle="modal"
                                data-target="#exampleModalCenter">
                            <i class="fas fa-arrow-circle-left"></i>&nbsp;Back
                        </button>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

            <div class="col-lg-8 col-sm-8">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Questions Navigation</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a class="btn btn-info btn-sm" href="#">
                            1
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            2
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            3
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            4
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            5
                        </a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
        // Update the count down every 1 second
        var x = setInterval(function () {
            // Get today's date and time
            var now = new Date().getTime();
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection