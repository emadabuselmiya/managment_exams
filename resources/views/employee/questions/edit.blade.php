@extends('employee.layout.app')
@section('title')
    Edit Question
@stop
@section('css')

@endsection
@section('page-header')
    <div class="col-sm-6">
        <h1 class="m-0">Edit Question</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Questions</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Question</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{route('employee.questions.update', $question->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="exam_id" value="{{$exam_id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <textarea name="title" class="form-control @error('title') is-invalid @enderror"
                                          id="editor1" cols="30" rows="5">
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
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="custom-select @error('type') is-invalid @enderror" name="type"
                                                id="type">
                                            <option value="1"
                                                    @if($question->title == 1) SELECTED @endif>True or
                                                False
                                            </option>
                                            <option value="2"
                                                    @if($question->title == 2) SELECTED @endif>Multiple
                                                Chooses
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
                                        <label>Category</label>
                                        <select class="custom-select @error('category') is-invalid @enderror"
                                                name="category">
                                            <option value="Hard" @if($question->title == "Hard") SELECTED @endif>Hard
                                            </option>
                                            <option value="Middle" @if($question->title == "Middle") SELECTED @endif>
                                                Middle
                                            </option>
                                            <option value="Easy" @if($question->title == "Easy") SELECTED @endif>Easy
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
                                        <label for="exampleInputEmail1">Choose A</label>
                                        <input type="text" id="optionA"
                                               class="form-control @error('optionA') is-invalid @enderror"
                                               id="exampleInputEmail1"
                                               placeholder="Enter Choose A" name="optionA"
                                               value="{{old('optionA', $question->optionA)}}">
                                    </div>
                                    @error('optionA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Choose B</label>
                                        <input type="text" id="optionB"
                                               class="form-control @error('optionB') is-invalid @enderror"
                                               id="exampleInputEmail1"
                                               placeholder="Enter Choose B" name="optionB"
                                               value="{{old('optionB', $question->optionB)}}">
                                    </div>
                                    @error('optionB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Choose C</label>
                                        <input type="text" id="optionC"
                                               class="form-control @error('optionC') is-invalid @enderror"
                                               id="exampleInputEmail1"
                                               placeholder="Enter Choose C" name="optionC"
                                               value="{{old('optionC', $question->optionC)}}">
                                    </div>
                                    @error('optionC')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Choose D</label>
                                        <input type="text" id="optionD"
                                               class="form-control @error('optionD') is-invalid @enderror"
                                               id="exampleInputEmail1"
                                               placeholder="Enter Choose D" name="optionD"
                                               value="{{old('optionD', $question->optionD)}}">
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
                                        <label>Right Answer</label>
                                        <select name="right_answer" id="answer"
                                                class="custom-select @error('right_answer') is-invalid @enderror">
                                            <option value="optionA" @if($question->title == "optionA") SELECTED @endif>
                                                Choose A
                                            </option>
                                            <option value="optionB" @if($question->title == "optionB") SELECTED @endif>
                                                Choose B
                                            </option>
                                            <option value="optionC" @if($question->title == "optionC") SELECTED @endif>
                                                Choose C
                                            </option>
                                            <option value="optionD" @if($question->title == "optionD") SELECTED @endif>
                                                Choose D
                                            </option>
                                        </select>
                                        @error('right_answer')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            {{--                            <div class="form-group">--}}
                            {{--                                <label for="exampleInputFile">File input</label>--}}
                            {{--                                <div class="input-group">--}}
                            {{--                                    <div class="custom-file">--}}
                            {{--                                        <input type="file" class="custom-file-input" name="import_file" id="customFile">--}}
                            {{--                                        <label class="custom-file-label" for="exampleInputFile">Choose Excel File:--}}
                            {{--                                            .xlsx, .xls</label></div>--}}
                            {{--                                    <div class="input-group-append">--}}
                            {{--                                        <span class="input-group-text">Upload</span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
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

        type.onchange = function () {
            ff()
        };

        $(window).on("load", function () {
            ff()
        });
    </script>
@endsection
