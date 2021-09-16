@extends('student.layout.app')
@section('title')
    {{"(".$exam->getTypeString().") ".$exam->course->name_ar}}
@stop
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">الأسئلة</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">

                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td style="width:20px;">
                                @if($question->answer == "z")
                                    <span class="badge bg-danger">غير محلول</span>
                                @elseif($question->answer != null)
                                    <span class="badge bg-success">مُسلَّم</span>
                                @else
                                    <span class="badge bg-warning">غير مُسلَّم</span>
                                @endif
                            </td>
                            @if($question->exam->back == 1)
                                <td style="width:20px;">
                                    <form action="{{route('student.exams.backQuestion', $exam->id)}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="question_exam" value="{{$question->id}}">
                                        <button class="btn btn-info btn-sm" type="submit">
                                            <i class="fas fa-eye"></i>
                                            مراجعة
                                        </button>
                                    </form>
                                </td>
                            @else
                                <td style="width:20px;"></td>
                            @endif
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
        <h4 id="demo" style="text-align: center"></h4>

        <div class="row" style="margin-top: 24px;text-align: center;">
            <div class="col-12">
                <a href="{{route('student.exams.check', $exam->id)}}">
                    <button type="button" class="btn btn-success" style="width: 20%;" >
                        &nbsp;سلم الجميع وانتهى
                    </button>
                </a>
            </div>
        </div>
        <br>
        <br>
    </div>

@endsection
@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('dashboard/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{asset('dashboard/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
                "searching": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("{{getEndTime($exam->id)}}").getTime();
        // Update the count down every 1 second
        var x = setInterval(function () {
            // Get today's date and time
            var now = new Date().getTime();
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
        document.addEventListener("contextmenu", function(evt){
            evt.preventDefault();
        }, false);

        window.addEventListener('online', () => toastr.success('متصل في الانترنت'));
        window.addEventListener('offline', () => toastr.error('فقد الاتصال بالانترنت'));
    </script>
@endsection
