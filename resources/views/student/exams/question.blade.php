@extends('student.layout.app')
@section('title')
    {{"(".$exam->getTypeString().") ".$exam->course->name_ar}}
@stop
@section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #demo {
            text-align: center;
            font-size: 40px;
            margin-top: 0px;
        }

        * {
            user-select: none;
        }

        *::selection {
            background: none;
        }

        *::-moz-selection {
            background: none;
        }
    </style>
@endsection
@section('page-header')
    <div class="col-sm-6">
        <h1 class="m-0">{{"(".$exam->getTypeString().") ".$exam->course->name_ar}}</h1>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="container-fluid">
        <form action="{{route('student.exams.saveAnswer', $exam_question->id)}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-9 col-sm-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Online Exam</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h3>{{strip_tags($exam_question->question->title)}}</h3><br>
                            <div class="row">
                                @if($exam_question->question->type == 1)
                                    <div class="col-sm-12">
                                        <!-- checkbox -->
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio"
                                                   id="customRadio1"
                                                   name="answer" value="optionA"
                                                   @if(old("answer", $exam_question->answer) == 'optionA') checked @endif>
                                            <label for="customRadio1"
                                                   class="custom-control-label">{{$exam_question->question->optionA}}</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <!-- checkbox -->
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio"
                                                   id="customRadio2"
                                                   name="answer" value="optionB"
                                                   @if(old("answer", $exam_question->answer) == 'optionB') checked @endif>
                                            <label for="customRadio2"
                                                   class="custom-control-label">{{$exam_question->question->optionB}}</label>
                                        </div>
                                    </div>

                                @else
                                    @foreach( randomOption($exam_question->question->optionA, $exam_question->question->optionB,$exam_question->question->optionC,$exam_question->question->optionD) as $key=>$option)
                                        <div class="col-sm-12">
                                            <!-- checkbox -->
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio"
                                                       id="customRadio{{$loop->iteration}}"
                                                       name="answer" value="{{$key}}"
                                                       @if(old("answer", $exam_question->answer) == $key) checked @endif>
                                                <label for="customRadio{{$loop->iteration}}"
                                                       class="custom-control-label">{{$option}}</label>
                                            </div>
                                        </div>

                                    @endforeach
                                @endif
                                <button type="reset">ازالة الاجابة</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Timer</h3>
                        </div>
                        <br>
                        <h4 id="demo" style="text-align: center"></h4>
                        <!-- /.card-header -->
                        <div class="card-body" style="text-align: center">
                            <a href="#">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-arrow-circle-left"></i>&nbsp;Next
                                </button>
                            div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-lg-12 col-sm-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Questions Navigation</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @foreach(numberQuestions($exam_question->exam_id) as $item)
                                <a class="btn btn-sm @if($item->answer === "z") btn-danger @elseif($item->id == $exam_question->id) btn-info @elseif($item->answer != null)  btn-success @else btn-warning @endif"
                                   href="#">
                                    {{$loop->iteration}}
                                </a>
                            @endforeach
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
        </form>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->






@endsection
@section('js')

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("{{getEndTime($exam->id)}}").getTime();
        var now = new Date("{{Carbon\Carbon::now()}}").getTime();
        console.log(now);


        // Update the count down every 1 second
        var x = setInterval(function () {
            // Get today's date and time
            now = now + 1000;
            console.log(now);
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            console.log(distance);
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                window.location.href = "{{route('student.exams.check', $exam->id)}}";
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>

    <script>
        document.addEventListener("contextmenu", function (evt) {
            evt.preventDefault();
        }, false);

        window.addEventListener('online', () => toastr.success('متصل في الانترنت'));
        window.addEventListener('offline', () => toastr.error('فقد الاتصال بالانترنت'));
    </script>

@endsection
