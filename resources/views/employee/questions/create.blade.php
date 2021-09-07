@extends('employee.layout.app')
@section('title')
    Create Questions
@stop
@section('css')

@endsection
@section('page-header')
    <div class="col-sm-6">
        <h1 class="m-0">إضافة أسئلة</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">الأسئلة</li>
            <li class="breadcrumb-item"><a href="#">الصفحة الرئيسية</a></li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">إضافة أسئلة</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{route('employee.questions.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="exam_id" value="{{$exam_id}}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>نوع السؤال</label>
                                        <select class="custom-select @error('type') is-invalid @enderror" name="type"
                                                id="type">
                                            <option value="2" @if(old('type')==2) SELECTED @endif>خيارات متعددة
                                            </option>
                                            <option value="1" @if(old('type')==1) SELECTED @endif>صح أو خطأ
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
                                        <select class="custom-select @error('category') is-invalid @enderror"
                                                name="category">
                                            <option value="Hard">صعب</option>
                                            <option value="Middle">متوسط</option>
                                            <option value="Easy">سهل</option>
                                        </select>
                                        @error('category')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6" id="divA">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الخيار أ</label>
                                        <input type="text" id="optionA"
                                               class="form-control @error('optionA') is-invalid @enderror"
                                               placeholder="Enter Choose A" name="optionA"
                                               value="{{old('optionA')}}">
                                        @error('optionA')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-sm-6" id="divB">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الخيار ب</label>
                                        <input type="text" id="optionB"
                                               class="form-control @error('optionB') is-invalid @enderror"
                                               placeholder="Enter Choose B" name="optionB"
                                               value="{{old('optionB')}}">

                                        @error('optionB')
                                        <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-sm-6" id="divC">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الخيار ج</label>
                                        <input type="text" id="optionC"
                                               class="form-control @error('optionC') is-invalid @enderror"
                                               placeholder="Enter Choose C" name="optionC" value="{{old('optionC')}}">
                                        @error('optionC')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-sm-6" id="divD">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الخيار د</label>
                                        <input type="text" id="optionD"
                                               class="form-control @error('optionD') is-invalid @enderror"
                                               placeholder="Enter Choose D" name="optionD" value="{{old('optionD')}}">
                                        @error('optionD')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-sm-6" id="divAnswer">
                                    <div class="form-group">
                                        <!-- select -->
                                        <label>الأجابة الصحيحة</label>
                                        <select name="right_answer" id="answer"
                                                class="custom-select @error('right_answer') is-invalid @enderror">
                                            <option value="optionA">الخيار أ</option>
                                            <option value="optionB">الخيار ب</option>
                                            <option value="optionC">الخيار ج</option>
                                            <option value="optionD">الخيار د</option>
                                        </select>
                                        @error('right_answer')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-sm-12" id="divTureOrFalse">
                                    <div class="row">
                                        <div class="col-sm-6" style="display: inherit">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1"
                                                       name="right_answer" value="optionA"
                                                       @if(old('right_answer') == 'optionA') checked @endif>
                                                <label for="customRadio1" class="custom-control-label">صح</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2"
                                                       name="right_answer" value="optionB"
                                                       @if(old('right_answer') == 'optionB') checked @endif>
                                                <label for="customRadio2" class="custom-control-label">خطأ</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                </div>

                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عنوان السؤال</label>
                                        <textarea name="title" class="form-control @error('title') is-invalid @enderror"
                                                  id="editor1" cols="30" rows="5">
                                    {{old('title')}}
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

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">حفظ</button>
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
        $(function () {
            bsCustomFileInput.init();
        });
    </script>

    <script type="text/javascript">
        var type = document.getElementById("type");

        function ff() {
            if (type.value == 1) {
                document.getElementById("divA").style.display = "none";
                document.getElementById("divB").style.display = "none";
                document.getElementById("divC").style.display = "none";
                document.getElementById("divD").style.display = "none";
                document.getElementById("divAnswer").style.display = "none";
                document.getElementById("divTureOrFalse").style.display = "block";


                // document.getElementById("optionA").disabled = true;
                // document.getElementById("optionB").disabled = true;
                // document.getElementById("optionC").disabled = true;
                // document.getElementById("optionD").disabled = true;

                // document.getElementById("optionA").value = "True";
                // document.getElementById("optionB").value = "False";
                // document.getElementById("optionC").value = "";
                // document.getElementById("optionD").value = "";
                //
                // $("#answer option[value=optionC]").hide();
                // $("#answer option[value=optionD]").hide();
            }

            if (type.value == 2) {
                document.getElementById("divA").style.display = "block";
                document.getElementById("divB").style.display = "block";
                document.getElementById("divC").style.display = "block";
                document.getElementById("divD").style.display = "block";
                document.getElementById("divAnswer").style.display = "block";
                document.getElementById("divTureOrFalse").style.display = "none";


                // document.getElementById("optionA").disabled = false;
                // document.getElementById("optionB").disabled = false;
                // document.getElementById("optionC").disabled = false;
                // document.getElementById("optionD").disabled = false;
                //
                // document.getElementById("optionA").value = "";
                // document.getElementById("optionB").value = "";
                // document.getElementById("optionC").value = "";
                // document.getElementById("optionD").value = "";
                //
                // $("#answer option[value=optionC]").show();
                // $("#answer option[value=optionD]").show();
            }
        }


        type.onchange = function () {
            ff()
        };

        $(window).on("load", function () {
            ff()
        });
    </script>
@endsection
