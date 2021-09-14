@extends('student.layout.app')
@section('title')
    Exam Student
@stop
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">


@endsection
@section('page-header')
    <div class="col-sm-6">
        <h1 class="m-0">الامتحانات</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/student">الصفحة الرئيسية</a></li>
            <li class="breadcrumb-item"><a href="{{route('student.subject')}}">المواد</a></li>
            <li class="breadcrumb-item active">{{$course_name}}</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class=" col-lg-6 col-sm-6">
                                <h3 class="card-title" id="floatrightitem">{{$course_name}}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>اسم الامتحان</th>
                                <th>تاريخ الامتحان</th>
                                <th>موعد بدأ الامتحان</th>
                                <th>مدة الامتحان</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exams as $exam)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{"(".$exam->getTypeString().") ".$exam->course->name_ar}}</td>
                                    <td>{{$exam->date->format('Y-m-d')}}</td>
                                    <td>{{$exam->start_time->format('g:i A')}}</td>
                                    <td>{{calTime($exam)}}</td>
                                    <td>
                                        <div class="row" id="centeritem">
                                            <a class="btn btn-info btn-sm"
                                               href="{{route('student.exams.details', $exam->id)}}">
                                                <i class="fas fa-database"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
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
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
        })
    </script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
