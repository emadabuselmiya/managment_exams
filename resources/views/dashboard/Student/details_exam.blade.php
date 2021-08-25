@extends('dashboard.layout.app')
@section('title')
    Details Exam
@stop
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


@endsection
@section('page-header')
    <div class="col-sm-6">
        <h1 class="m-0">Details Exam</h1>
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
            <div class=" col-lg-6 col-sm-6">
                <div class="card bg-gradient-primary">
                    <div class="card-header">
                        <h3 class="card-title">Instructions "التعليمات"</h3>
                    </div>
                    <div class="card-body">
                        1.The body of the card <br>
                        2.The body of the card <br>
                        3.The body of the card <br>
                        4.The body of the card <br>
                    </div>
                    <div class="card-footer">
                        Read it well
                    </div>
                </div>
            </div>

            <div class=" col-lg-6 col-sm-6">
                <div class="card bg-gradient-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Details Exam "تفاصيل الامتحان"</h3>
                    </div>
                    <div class="card-body">
                        1.The body of the card <br>
                        2.The body of the card <br>
                        3.The body of the card <br>
                        4.The body of the card <br>
                    </div>
                    <div class="card-footer">
                        Read it well
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row" style="margin-top: 24px;text-align: center;">
            <div class="col-12">
                <a href="/startExam">
                    <button type="button" class="btn btn-success" style="width: 15%;">
                        <i class="fas fa-play"></i>&nbsp;Exam started
                    </button>
                </a>
            </div>
        </div><br>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ملخص محاولات السابقة</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Student Number</th>
                        <th>Delivery time</th>
                        <th style="width: 40px">Label</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1.</td>
                        <td>13011555222</td>
                        <td></td>
                        <td><span class="badge bg-danger">غير مُسلَّم</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>13011555222</td>
                        <td>19/9/2021 09:55</td>
                        <td><span class="badge bg-success">مُسلَّم</span></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br>
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
    <!-- Bootstrap Switch -->
    <script src="dashboard/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

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
