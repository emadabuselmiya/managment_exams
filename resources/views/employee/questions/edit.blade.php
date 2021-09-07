@extends('employee.layout.app')
@section('title')
Edit Question
@stop
@section('css')

@endsection
@section('page-header')
<div class="col-sm-6">
    <h1 class="m-0">تعديل السؤال</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">الصفحة الرئيسية</a></li>
        <li class="breadcrumb-item active">تعديل السؤال</li>
    </ol>
</div><!-- /.col -->
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title" style="float: right;">تعديل السؤال</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('employee.questions.update', $question->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="exam_id" value="{{$exam_id}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>نوع السؤال</label>
                                    <select class="custom-select @error('type') is-invalid @enderror" name="type" id="type">
                                        <option value="1" @if($question->title == 1) SELECTED @endif>صح أو خطأ
                                        </option>
                                        <option value="2" @if($question->title == 2) SELECTED @endif>خيارات متعددة
                                        </option>
                                    </select>
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>مستوى السؤال</label>
                                    <select class="custom-select @error('category') is-invalid @enderror" name="category">
                                        <option value="Hard" @if($question->title == "Hard") SELECTED @endif>صعب
                                        </option>
                                        <option value="Middle" @if($question->title == "Middle") SELECTED @endif>
                                            متوسط
                                        </option>
                                        <option value="Easy" @if($question->title == "Easy") SELECTED @endif>سهل
                                        </option>
                                    </select>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">خيار أ</label>
                                    <input type="text" id="optionA" class="form-control @error('optionA') is-invalid @enderror" id="exampleInputEmail1" placeholder="ادخل الاجابة أ" name="optionA" value="{{old('optionA', $question->optionA)}}">
                                </div>
                                @error('optionA')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">خيار ب</label>
                                    <input type="text" id="optionB" class="form-control @error('optionB') is-invalid @enderror" id="exampleInputEmail1" placeholder="ادخل الاجابة ب" name="optionB" value="{{old('optionB', $question->optionB)}}">
                                </div>
                                @error('optionB')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">خيار ج</label>
                                    <input type="text" id="optionC" class="form-control @error('optionC') is-invalid @enderror" id="exampleInputEmail1" placeholder="ادخل الاجابة ج" name="optionC" value="{{old('optionC', $question->optionC)}}">
                                </div>
                                @error('optionC')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">خيار د</label>
                                    <input type="text" id="optionD" class="form-control @error('optionD') is-invalid @enderror" id="exampleInputEmail1" placeholder="ادخل الاجابة د" name="optionD" value="{{old('optionD', $question->optionD)}}">
                                </div>
                                @error('optionD')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <!-- select -->
                                    <label>الأجابة الصحيحة</label>
                                    <select name="right_answer" id="answer" class="custom-select @error('right_answer') is-invalid @enderror">
                                        <option value="optionA" @if($question->title == "optionA") SELECTED @endif>
                                            الخيار أ
                                        </option>
                                        <option value="optionB" @if($question->title == "optionB") SELECTED @endif>
                                            الخيار ب
                                        </option>
                                        <option value="optionC" @if($question->title == "optionC") SELECTED @endif>
                                            الخيار ج
                                        </option>
                                        <option value="optionD" @if($question->title == "optionD") SELECTED @endif>
                                            الخيار د
                                        </option>
                                    </select>
                                    @error('right_answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">

                                    <label for="exampleInputEmail1">عنوان السؤال</label>
                                    <textarea name="title" class="form-control @error('title') is-invalid @enderror" id="editor1" cols="30" rows="5">
                                    {{old('title', $question->title)}}
                                    </textarea>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor 4
                                        // instance, using default configuration.
                                        CKEDITOR.replace('editor1');
                                    </script>

                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">--}}
                        {{-- <label for="exampleInputFile">File input</label>--}}
                        {{-- <div class="input-group">--}}
                        {{-- <div class="custom-file">--}}
                        {{-- <input type="file" class="custom-file-input" name="import_file" id="customFile">--}}
                        {{-- <label class="custom-file-label" for="exampleInputFile">Choose Excel File:--}}
                        {{-- .xlsx, .xls</label></div>--}}
                        {{-- <div class="input-group-append">--}}
                        {{-- <span class="input-group-text">Upload</span>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                        {{-- </div>--}}
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">تعديل</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- bs-custom-file-input -->
<script src="{{asset('dashboard/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>

<script type="text/javascript">
    var type = document.getElementById("type");

    function ff() {
        if (type.value == 1) {
            // document.getElementById("optionA").disabled = true;
            // document.getElementById("optionB").disabled = true;
            document.getElementById("optionC").disabled = true;
            document.getElementById("optionD").disabled = true;

            document.getElementById("optionA").value = "True";
            document.getElementById("optionB").value = "False";
            document.getElementById("optionC").value = "";
            document.getElementById("optionD").value = "";

            $("#answer option[value=optionC]").hide();
            $("#answer option[value=optionD]").hide();
        }

        if (type.value == 2) {
            document.getElementById("optionA").disabled = false;
            document.getElementById("optionB").disabled = false;
            document.getElementById("optionC").disabled = false;
            document.getElementById("optionD").disabled = false;

            document.getElementById("optionA").value = "";
            document.getElementById("optionB").value = "";
            document.getElementById("optionC").value = "";
            document.getElementById("optionD").value = "";

            $("#answer option[value=optionC]").show();
            $("#answer option[value=optionD]").show();
        }
    }

    type.onchange = function() {
        ff()
    };

    $(window).on("load", function() {
        ff()
    });
</script>
@endsection