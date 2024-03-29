@extends('employee.layout.app')
@section('title')
    Student Exam
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
        <h1 class="m-0">    {{"(".$exam->getTypeString().") ".$exam->course->name_ar}}</h1>
    </div><!-- /.col -->
    <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/employee">الصفحة الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{route('employee.subject')}}">المواد</a></li>
                <li class="breadcrumb-item"><a href="{{route('employee.exams.index', $exam->course->id)}}">{{$exam->course->name_ar}}</a></li>
                <li class="breadcrumb-item active">{{$exam->getTypeString()}}</li>
            </ol>
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
                                <h3 class="card-title"
                                        style="float: right">نتائج الطلاب في الامتحان</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>رقم الطالب</th>
                                <th>اسم الطالب</th>
                                <th>علامة الطالب</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exam->examResult as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->student->id}}</td>
                                    <td>{{$item->student->getFullname()}}</td>

                                    <td>{{$item->result_exam .'/'. $item->exam->weight}}</td>
                                    <td>
                                        <div class="row">

                                            <a href="{{route("employee.exams.showStudentQuestions",[$exam->id, $item->student->id])}}">
                                                <button class="btn btn-info btn-sm"
                                                        style="margin-right: 10px;">
                                                    <i class="fas fa-eye"></i>
                                                    مراجعة
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>رقم الطالب</th>
                                <th>اسم الطالب</th>
                                <th>علامة الطالب</th>
                                <th>العمليات</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

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
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
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
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>
@endsection
