@extends('student.layout.app')
@section('title')
تفاصيل الامتحان
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
    <h1 class="m-0">{{"(".$exam->getTypeString().") ".$exam->course->name_ar}}</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/student">الصفحة الرئيسية</a></li>
        <li class="breadcrumb-item"><a href="{{route('student.subject')}}">المواد</a></li>
        <li class="breadcrumb-item"><a href="{{route('student.exams.index', $exam->course->id)}}">{{$exam->course->name_ar}}</a></li>
        <li class="breadcrumb-item active">{{"(".$exam->getTypeString().") ".$exam->course->name_ar}}</li>
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
                    1. يمنع دخول الامتحان من جهازين <br>
                    2. يمنع تقديم الامتحان الا من قاعات مختبرات الكلية <br>

                </div>
{{--                <div class="card-footer">--}}
{{--                    Read it well--}}
{{--                </div>--}}
            </div>
        </div>

        <div class=" col-lg-6 col-sm-6">
            <div class="card bg-gradient-secondary">
                <div class="card-header">
                    <h3 class="card-title">Details Exam "تفاصيل الامتحان"</h3>
                </div>
                <div class="card-body">
                    1. اسم الامتحان: {{"(".$exam->getTypeString().") ".$exam->course->name_ar}} <br>
                    2. التاريخ: {{$exam->date->format('Y-m-d')}} <br>
                    3. وقت بدأ الامتحان: {{$exam->start_time->format('g:i A')}} <br>
                    4. وقت انتهاء الامتحان: {{$exam->end_time->format('g:i A')}} <br>
                    5. مدة الامتحان: {{calTime($exam)}} <br>

                </div>
{{--                <div class="card-footer">--}}
{{--                    Read it well--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
<br>
<div class="container-fluid">

    <div class="row" style="margin-top: 24px;text-align: center;">
        <div class="col-12">
{{--            {{dd(studentPassFinalExam($exam) || !checkStartExam($exam))}}--}}
            @if(studentPassFinalExam($exam) || !checkStartExam($exam))
            <button type="button" class="btn btn-danger btn-available"   disabled>
                <i class="fas fa-play"></i>&nbsp;الامتحان غير متاح
            </button>
            @else
            <button type="button" class="btn btn-success btn-available" data-toggle="modal" data-target="#exampleModalCenter" >
                <i class="fas fa-play"></i>&nbsp;الامتحان متاح
            </button>
            @endif

        </div>
    </div>
    <br>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">دخول الامتحان</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h4>هل أنت متأكد من بيدأ الامتحان ؟</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق
                    </button>
                    <button type="submit" class="btn btn-success" onclick="window.open('{{route('student.exams.start', $exam->id)}}','_blank','toolbar=yes, location=no, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no')">
                        تأكيد
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class=" col-lg-6 col-sm-6">
                                <h3 class="card-title" id="floatrightitem">ملخص المحاولات السابقة</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>اسم الامتحان</th>
                                    <th>العلامة</th>
                                    <th>المراجعة</th>
                                    <th>وقت الانتهاء</th>
                                    <th style="width: 40px">الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($result))
                                <tr>
                                    <td>{{$result->id}}</td>
                                    <td>{{"(".$result->exam->getTypeString().") ".$result->exam->course->name_ar}}</td>
                                    <td>{{$result->exam->show_result == 1 ? ($result->result_exam."/".$result->exam->weight) : ""}}</td>
                                    <td>
                                        @if($result->exam->review == 1)
                                        <a href="{{route("student.exams.review",[$exam->id, Auth::guard('student')->user()->id])}}">
                                            <button class="btn btn-info btn-sm" style="margin-right: 10px;">
                                                <i class="fas fa-eye"></i>
                                                عرض
                                            </button>
                                        </a>
                                        @endif
                                    </td>
                                    <td>{{$result->created_at->diffForHumans()}}</td>
                                    <td><span class="badge bg-success">مُسلَّم</span></td>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="11" class="text-center">لا يوجد محاولات</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
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

@endsection
