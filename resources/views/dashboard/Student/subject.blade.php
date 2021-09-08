@extends('dashboard.layout.app')
@section('title')
    Subject Student
@stop
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('page-header')
    <div class="col-sm-6">
        <h1 class="m-0">Subject Student</h1>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Subject Student</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Subject Name</th>
                                <th style="width: 10px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Web Programming</td>
                                <td>
                                    <div class="row" id="centeritem">
                                            <a class="btn btn-info btn-sm" href="/student_exam">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Subject Name</th>
                                <th style="width: 10px">Actions</th>
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
        <!-- DataTables  & Plugins -->
            <script src="dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
            <script src="dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
            <script src="dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
            <script src="dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
            <script src="dashboard/plugins/jszip/jszip.min.js"></script>
            <script src="dashboard/plugins/pdfmake/pdfmake.min.js"></script>
            <script src="dashboard/plugins/pdfmake/vfs_fonts.js"></script>
            <script src="dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
            <script src="dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
            <script src="dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
            <script>
                $(function () {
                    $("#example1").DataTable({
                        "responsive": true, "lengthChange": false, "autoWidth": false,
                        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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