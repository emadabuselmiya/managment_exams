@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <div class="form-group row"  id="buttonindex">
                            <div class="col-md-6 offset-md-3">
                                <a href="{{route('student.login')}}" class="btn btn-primary btn-lg" style="width: 100%">
                                    Student
                                </a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-6 offset-md-3">
                                <a href="{{route('employee.login')}}" class="btn btn-primary btn-lg" style="width: 100%">
                                    Employee
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
