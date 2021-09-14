@extends('employee.layout.app')
@section('title')
    الاسئلة الامتحان
@stop
@section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #demo {
            text-align: center;
            font-size: 40px;
            margin-top: 0px;
        }

        * {
            user-select: none;
        }

        *::selection {
            background: none;
        }

        *::-moz-selection {
            background: none;
        }
    </style>
@endsection
@section('page-header')
    <div class="col-sm-6">
        <h1 class="m-0">{{$exam_name}}</h1>
    </div><!-- /.col -->
    <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/employee">الصفحة الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{route('employee.subject')}}">المواد</a></li>
                <li class="breadcrumb-item"><a href="{{route('employee.exams.index', $questions[0]->exam->course->id)}}">{{$questions[0]->exam->course->name_ar}}</a></li>
                <li class="breadcrumb-item active">{{$questions[0]->exam->getTypeString()}}</li>
            </ol>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h5>{{$student_name}}</h5>
                    </div>
                    <!-- /.card-header -->
                    @forelse($questions as $item)
                        <div class="form-group">
                            <div class="card-body">
                                <h3>{{$loop->iteration.". ".strip_tags($item->question->title)}}</h3><br>
                                <div class="row">
                                    <div class="form-group clearfix">
                                        @if($item->question->type == 1)
                                            <div class="col-sm-12">
                                                <!-- checkbox -->
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                           id="customRadio{{$item->id}}_1"
                                                           name="answer" value="optionA"
                                                           @if($item->answer == 'optionA') checked @endif disabled>
                                                    <label for="customRadio{{$item->id}}_1"
                                                           class="custom-control-label">{{$item->question->optionA}}</label>
                                                    @if($item->question->right_answer == 'optionA' && $item->answer == 'optionA')
                                                        <i class="fas fa-check"></i>
                                                    @elseif($item->question->right_answer != 'optionA' && $item->answer == 'optionA')
                                                        <i class="fas fa-times"></i>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- checkbox -->
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                           id="customRadio{{$item->id}}_2"
                                                           name="answer" value="optionB"
                                                           @if($item->answer == 'optionB') checked @endif disabled>
                                                    <label for="customRadio{{$item->id}}_2"
                                                           class="custom-control-label">{{$item->question->optionB}}</label>
                                                    @if($item->question->right_answer == 'optionB' && $item->answer == 'optionB')
                                                        <i class="fas fa-check"></i>
                                                    @elseif($item->question->right_answer != 'optionB' && $item->answer == 'optionB')
                                                        <i class="fas fa-times"></i>
                                                    @endif

                                                </div>
                                            </div>


                                        @else
                                            <div class="col-sm-12">
                                                <!-- checkbox -->
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                           id="customRadio{{$item->id}}_1"
                                                           name="answer" value="optionA"
                                                           @if($item->answer == "optionA") checked @endif disabled>
                                                    <label for="customRadio{{$item->id}}_1"
                                                           class="custom-control-label">{{$item->question->optionA}}</label>
                                                    @if($item->question->right_answer == 'optionA' && $item->answer == 'optionA')
                                                        <i class="fas fa-check"></i>
                                                    @elseif($item->question->right_answer != 'optionA' && $item->answer == 'optionA')
                                                        <i class="fas fa-times"></i>
                                                    @endif


                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- checkbox -->
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                           id="customRadio{{$item->id}}_2"
                                                           name="answer" value="optionB"
                                                           @if($item->answer == "optionB") checked @endif disabled>
                                                    <label for="customRadio{{$item->id}}_2"
                                                           class="custom-control-label">{{$item->question->optionB}}</label>
                                                    @if($item->question->right_answer == 'optionB' && $item->answer == 'optionB')
                                                        <i class="fas fa-check"></i>
                                                    @elseif($item->question->right_answer != 'optionB' && $item->answer == 'optionB')
                                                        <i class="fas fa-times"></i>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- checkbox -->
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                           id="customRadio{{$item->id}}_3"
                                                           name="answer" value="optionC"
                                                           @if($item->answer == "optionC") checked @endif disabled>
                                                    <label for="customRadio{{$item->id}}_3"
                                                           class="custom-control-label">{{$item->question->optionC}}</label>
                                                    @if($item->question->right_answer == 'optionC' && $item->answer == 'optionC')
                                                        <i class="fas fa-check"></i>
                                                    @elseif($item->question->right_answer != 'optionC' && $item->answer == 'optionC')
                                                        <i class="fas fa-times"></i>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- checkbox -->
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio"
                                                           id="customRadio{{$item->id}}_4"
                                                           name="answer" value="optionD"
                                                           @if($item->answer == "optionD") checked @endif disabled>
                                                    <label for="customRadio{{$item->id}}_4"
                                                           class="custom-control-label">{{$item->question->optionD}}</label>
                                                    <i id="optionD" class="fas"></i>

                                                    @if($item->question->right_answer == 'optionD' && $item->answer == 'optionD')
                                                        <i class="fas fa-check"></i>
                                                    @elseif($item->question->right_answer != 'optionD' && $item->answer == 'optionD')
                                                        <i class="fas fa-times"></i>
                                                    @endif
                                                </div>
                                            </div>

                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class=" btn-success" style="padding: 10px">
                                <p>Right Answer : </p>
                                {{getRightAnswer($item->question)}}
                            </div>
                            <hr>
                        </div>
                    @empty
                        <div class="card-body">
                            <p>لم يقدم الطالب الامتحان</p>
                        </div>

                    @endforelse

                    <div class="card-footer">
                        <h5>العلامة : {{$mark}}</h5>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->






@endsection
@section('js')


@endsection
