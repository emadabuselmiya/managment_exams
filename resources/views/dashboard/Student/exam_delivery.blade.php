@extends('dashboard.layout.app')
@section('title')
    Exam Delivery
@stop
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
        <h1 class="m-0">Exam Delivery</h1>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">الأسئلة</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" style="width: 38%;">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td style="width:20px;" ><span class="badge bg-danger">غير مُسلَّم</span></td>
                        <td style="width:20px;">
                            <div class="row">
                                <a class="btn btn-info btn-sm" href="/student_exam">
                                    <i class="fas fa-eye"></i>
                                    View
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><span class="badge bg-success">مُسلَّم</span></td>
                        <td>
                            <div class="row">
                                <a class="btn btn-info btn-sm" href="/startExam">
                                    <i class="fas fa-eye"></i>
                                    View
                                </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h4 id="demo" style="text-align: center"></h4>

        <div class="row" style="margin-top: 24px;text-align: center;">
            <div class="col-12">
                <a href="/detailsExam">
                    <button type="button" class="btn btn-success" style="width: 20%;">
                        &nbsp;سلم الجميع وانتهى
                    </button>
                </a>
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
    <!-- Bootstrap Switch -->
    <script src="dashboard/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
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
