<!DOCTYPE html>
<html lang="en">

@include('student.layout.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('dashboard/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo"
             height="60" width="60">
    </div>

    <!-- Navbar -->
@include('student.layout.navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('student.layout.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">لوحة التحكم</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/student">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item active">لوحة التحكم</li>
                            </ol>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Sweet Alert messages -->
            @include('student.layout.message')

            <!-- Small boxes (Stat box) -->

                @include('student.layout.small-boxes')

                @yield('content')

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('student.layout.footer')
