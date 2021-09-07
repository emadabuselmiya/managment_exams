@extends('dashboard.layout.app')
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
            <li class="breadcrumb-item"><a href="#">الصفحة الرئيسية</a></li>
            <li class="breadcrumb-item active">الأسئلة</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Questions</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter question">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="custom-select">
                                            <option>True or False</option>
                                            <option>Multiple Chooses</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="custom-select">
                                            <option>Hard</option>
                                            <option>Middle</option>
                                            <option>Easy</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose A</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter Choose A">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose B</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter Choose B">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose C</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter Choose C">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose D</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter Choose D">
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group" style="margin-left: -11px;">
                                        <label>Right Answer</label>
                                        <select class="custom-select">
                                            <option>Choose A</option>
                                            <option>Choose B</option>
                                            <option>Choose C</option>
                                            <option>Choose D</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
    <script src="dashboard/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
