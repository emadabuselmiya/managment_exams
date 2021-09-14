<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/student" class="nav-link">الصفحة الرئيسية</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('student.logout') }}" class="nav-link"
               onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">تسجيل خروج</a>
        </li>

        <form id="logout-form" action="{{ route('student.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </ul>
</nav>
<!-- /.navbar -->
