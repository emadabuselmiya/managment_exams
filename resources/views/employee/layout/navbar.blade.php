<div class="row row-nav">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <div class="col-lg-6 col-menu">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </div>
            <div class="col-lg-6 col-logout">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout').submit()"> تسجيل خروج <img src="{{asset('dashboard/dist/img/log-out.svg')}}" alt="Logout" /></a>
                </li>
                <form action="{{ route('employee.logout') }}" method="post" class="d-none" id="logout">
                    @csrf
                    <button type="submit"></button>
                </form>
            </div>
        </ul>
    </nav>
    <!-- /.navbar -->
</div>