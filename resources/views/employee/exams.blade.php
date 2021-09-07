@extends('employee.layout.app')
@section('title')
الأمتحانات
@stop
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

@endsection
@section('page-header')
<div class="col-sm-6">
    <h1 class="m-0">الأمتحانات</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">الصفحة الرئيسية</a></li>
        <li class="breadcrumb-item active">الأمتحانات</li>
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
                            <h3 class="card-title" style="float: right;">الأمتحانات</h3>
                        </div>
                        <div class=" col-lg-6 col-sm-6">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="float: left">
                                <i class="fas fa-plus"></i>&nbsp;أضافة أمتحان
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">أضافة أمتحان</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{route('employee.exams.store')}}">
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{$course_id}}" />
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class=" col-lg-6 col-sm-6">
                                                        <label for="Name" class="mr-sm-2">نوع أمتحان:</label>
                                                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="type">
                                                            <option value="نهائي">نهائي</option>
                                                            <option value="نصفي">نصفي</option>
                                                            <option value="شهري">شهري</option>

                                                        </select>
                                                    </div>

                                                    <div class=" col-lg-6 col-sm-6">
                                                        <label for="Name" class="mr-sm-2">عدد الأسئلة:</label>
                                                        <input type="number" name="number_of_questions" class="form-control form-control-lg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class=" col-lg-6 col-sm-6">
                                                        <label for="exampleFormControlTextarea1">المراجعة:</label>
                                                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="review">
                                                            <option value="0">غير نشط</option>
                                                            <option value="1">نشط</option>
                                                        </select>
                                                    </div>
                                                    <div class=" col-lg-6 col-sm-6">
                                                        <label for="exampleFormControlTextarea1">الرجوع للخلف:</label>
                                                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="back">
                                                            <option value="0">غير نشط</option>
                                                            <option value="1">نشط</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">الأغلاق
                                                </button>
                                                <button type="submit" class="btn btn-primary">حفظ</button>
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
                                <th>أسم الامتحان</th>
                                <th>عدد الأسئلة</th>
                                <th>المادة</th>
                                <th>أمكانية الرجوع للخلف</th>
                                <th>أمكانية المراجعة</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($exams as $exam)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$exam->type}}</td>
                                <td>{{$exam->number_of_questions}}</td>
                                <td>{{$exam->course->name_ar}}</td>
                                <td><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success"></td>
                                <td><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success"></td>
                                <td>
                                    <div class="row">
                                        <div class=" col-lg-3 col-sm-3">
                                            <a class="btn btn-info btn-sm" href="{{route('employee.questions.index', $exam->id)}}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                        <div class=" col-lg-3 col-sm-3">
                                            <a class="btn btn-secondary btn-sm" href="#" data-toggle="modal" data-target="#edit{{$exam->id}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                            </a>
                                        </div>
                                        <!-- Edit -->
                                        <div class=" col-lg-3 col-sm-3">
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $exam->id }}" title="حذف"><i class="fa fa-trash"></i></button>

                                            <div class="modal fade" id="edit{{$exam->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">أضافة أمتحان</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="POST" action="{{route('employee.exams.update', $exam->id)}}">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="course_id" value="{{$course_id}}" />
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class=" col-lg-6 col-sm-6">
                                                                        <label for="Name" class="mr-sm-2">نوع الامتحان:</label>
                                                                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="type">
                                                                            <option value="نهائي" @if(old('type',$exam->type)=='نهائي') SELECTED @endif>
                                                                                نهائي
                                                                            </option>
                                                                            <option value="نصفي" @if(old('type',$exam->type)=='نصفي') SELECTED @endif>
                                                                                نصفي
                                                                            </option>
                                                                            <option value="شهري" @if(old('type',$exam->type)=='شهري') SELECTED @endif>
                                                                                شهري
                                                                            </option>

                                                                        </select>
                                                                    </div>

                                                                    <div class=" col-lg-6 col-sm-6">
                                                                        <label for="Name" class="mr-sm-2">عدد الاسئلة:</label>
                                                                        <input type="number" name="number_of_questions" class="form-control form-control-lg" value="{{old('number_of_questions', $exam->number_of_questions)}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class=" col-lg-6 col-sm-6">
                                                                        <label for="exampleFormControlTextarea1">المراجعة:</label>
                                                                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="review">
                                                                            <option value="0" @if(old('review',$exam->review)=='0') SELECTED @endif>
                                                                                غير نشط
                                                                            </option>
                                                                            <option value="1" @if(old('review',$exam->review)=='1') SELECTED @endif>
                                                                                نشط
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class=" col-lg-6 col-sm-6">
                                                                        <label for="exampleFormControlTextarea1">الرجوع للخلف:</label>
                                                                        <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="back">
                                                                            <option value="0" @if(old('back',$exam->back)=='0') SELECTED @endif>
                                                                                غير نشط
                                                                            </option>
                                                                            <option value="1" @if(old('back',$exam->back)=='1') SELECTED @endif>
                                                                                نشط
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">حفظ التعديل
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Edit -->
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="delete{{ $exam->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                                حذف
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('employee.exams.destroy', $exam->id) }}" method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                هل أنت متأكد من عملية الحذف؟
                                                <input id="id" type="hidden" name="id" class="form-control" value="{{ $exam->id }}">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
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
                                <th style="width: 10px">#</th>
                                <th>اسم الامتحان</th>
                                <th>عدد الاسئلة</th>
                                <th>المادة</th>
                                <th>أمكانية الرجوع للخلف</th>
                                <th>أمكانية المراجعة</th>
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

<script>
    $(function() {
        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
</script>
<script>
    $(function() {
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
    $('#exampleModal').on('show.bs.modal', function(event) {
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
