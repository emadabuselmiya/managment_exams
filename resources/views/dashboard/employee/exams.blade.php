@extends('dashboard.layout.app')
@section('title')
    Exams
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
        <h1 class="m-0">Exams</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
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
                                <h3 class="card-title" style="float: right;">Exams</h3>
                            </div>
                            <div class=" col-lg-6 col-sm-6">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter" style="float: left">
                                    <i class="fas fa-plus"></i>&nbsp;Add Exam
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Add Exam</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{route('employee.exams.store')}}">
                                                @csrf
                                                <input type="hidden" name="course_id" value="{{$course_id}}"/>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class=" col-lg-6 col-sm-6">
                                                            <label for="Name" class="mr-sm-2">Type Exam:</label>
                                                            <select class="form-control form-control-lg"
                                                                    id="exampleFormControlSelect1" name="type">
                                                                <option value="نهائي">نهائي</option>
                                                                <option value="نصفي">نصفي</option>
                                                                <option value="شهري">شهري</option>

                                                            </select>
                                                        </div>

                                                        <div class=" col-lg-6 col-sm-6">
                                                            <label for="Name" class="mr-sm-2">Number of
                                                                Questions:</label>
                                                            <input type="number" name="number_of_questions"
                                                                   class="form-control form-control-lg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class=" col-lg-6 col-sm-6">
                                                            <label for="exampleFormControlTextarea1">Review:</label>
                                                            <select class="form-control form-control-lg"
                                                                    id="exampleFormControlSelect1" name="review">
                                                                <option value="0">Not Active</option>
                                                                <option value="1">Active</option>
                                                            </select>
                                                        </div>
                                                        <div class=" col-lg-6 col-sm-6">
                                                            <label for="exampleFormControlTextarea1">Go back:</label>
                                                            <select class="form-control form-control-lg"
                                                                    id="exampleFormControlSelect1" name="back">
                                                                <option value="0">Not Active</option>
                                                                <option value="1">Active</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Exam Name</th>
                                <th>Review</th>
                                <th>Go back</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exams as $exam)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$exam->type}}</td>
                                    <td><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch
                                               data-off-color="danger" data-on-color="success"></td>
                                    <td><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch
                                               data-off-color="danger" data-on-color="success"></td>
                                    <td>
                                        <div class="row">
                                            <div class=" col-lg-3 col-sm-3">
                                                <a class="btn btn-info btn-sm" href="{{route('employee.questions.index', $exam->id)}}">
                                                    <i class="fas fa-eye"></i>
                                                    View
                                                </a>
                                            </div>
                                            <div class=" col-lg-3 col-sm-3">
                                                <a class="btn btn-secondary btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                            </div>
                                            <div class=" col-lg-3 col-sm-3">
                                                <form class="form-inline"
                                                      action="{{ route('employee.exams.destroy', $exam->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return  confirm('Do you want to Delete? Yes/No')">
                                                        <i class="fas fa-trash"></i>
                                                        Delete
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Exam Name</th>
                                <th>Review</th>
                                <th>Go back</th>
                                <th>Actions</th>
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
