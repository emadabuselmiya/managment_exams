@extends('employee.layout.app')
@section('title')
    Questions
@stop
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/upload-file.css')}}">



@endsection
@section('page-header')
    <div class="col-sm-6">
        <h1 class="m-0">الاسئلة</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right float-lg-right">
            <li class="breadcrumb-item">الصفحة الرئيسية</li>
            <li class="breadcrumb-item active">أضافة</li>
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
                                <h3 class="card-title" id='floatrightitem'>الأسئلة</h3>
                            </div>
                            <div class=" col-lg-6 col-sm-6">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter" style="float: left">
                                    <i class="fas fa-plus"></i>&nbsp;اضافة أسئلة
                                </button>

                                <a href="/file/ExportFormQuestions.xlsx">
                                    <button type="button" class="btn btn-info"
                                            style="float: left; margin-left: 10px">
                                        <i class="fas fa-download"></i>&nbsp;تصدير ملف أكسل
                                    </button>
                                </a>

                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">اضافة أسئلة</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{route('employee.questions.import')}}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="exam_id" value="{{$exam_id}}">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class=" col-lg-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">رفع ملف</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                               readonly>
                                                                        <div class="input-group-btn">
                                                                          <span class="fileUpload btn btn-info">
                                                                              <span class="upl"
                                                                                    id="upload">رفع ملف اكسل</span>
                                                                              <input type="file" class="upload up"
                                                                                     id="up" onchange="readURL(this);" name="import_file"/>
                                                                            </span><!-- btn-orange -->
                                                                        </div><!-- btn -->
                                                                    </div><!-- group -->
                                                                </div><!-- form-group -->

                                                            </div>

                                                        </div>
                                                        <div class=" col-lg-12 col-sm-6">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-success">حفظ ملف الاكسل
                                                                </button>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class=" col-lg-6 col-sm-6">
                                                        <a href="{{route('employee.questions.create', $exam_id)}}">
                                                            <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    id='floatrightitem'>
                                                                <i class="fas fa-plus"></i>&nbsp;اضافة سؤال واحد
                                                            </button>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">أغلاق
                                                </button>
                                            </div>

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
                                <th id="widthcol">#</th>
                                <th>عنوان السؤال</th>
                                <th>نوع السؤال</th>
                                <th>مستوى السؤال</th>
                                <th id="widthcol">أ</th>
                                <th id="widthcol">ب</th>
                                <th id="widthcol">ج</th>
                                <th id="widthcol">د</th>
                                <th id="widthcol">الاجابة الصحيحة</th>
                                <th class="sort-no-content">العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td><span class="limit-text">{{strip_tags($question->title)}}</span></td>
                                    <td>{{getTypeQuestionString($question->type)}}</td>
                                    <td>{{getCategoryString($question->category)}}</td>
                                    <td>{{$question->optionA}}</td>
                                    <td>{{$question->optionB}}</td>
                                    <td>{{$question->optionC}}</td>
                                    <td>{{$question->optionD}}</td>
                                    <td>{{$question->right_answer}}</td>
                                    <td>
                                        <div class="row">
                                            <div class=" col-lg-6 col-sm-6" style="text-align:right;">
                                                <a class="btn btn-info btn-sm"
                                                   href="/employee/{{$exam_id}}/questions/{{$question->id}}/edit">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                </a>
                                            </div>
                                            <div class=" col-lg-6 col-sm-6">
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#delete{{ $question->id }}" title="حذف"><i
                                                        class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="delete{{ $question->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('employee.questions.destroy', $question->id) }}"
                                                      method="post">
                                                    {{ method_field('Delete') }}
                                                    @csrf
                                                    هل أنت متأكد من عملية الحذف؟
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $question->id }}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">إغلاق
                                                        </button>
                                                        <button type="submit" class="btn btn-danger">تأكيد</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th id="widthcol">#</th>
                                <th>عنوان السؤال</th>
                                <th>نوع السؤال</th>
                                <th>مستوى السؤال</th>
                                <th id="widthcol">أ</th>
                                <th id="widthcol">ب</th>
                                <th id="widthcol">ج</th>
                                <th id="widthcol">د</th>
                                <th id="widthcol">الأجابة الصحيحة</th>
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
    <script src="{{asset('dashboard/upload-file.js')}}"></script>

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
