<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="icon" type="image/png" href="{{ asset('public/unnamed.png') }}
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><title>Ciroes | Dashboard @yield('title') </title>
<!-- Bootstrap -->
<link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}"
rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}"
rel="stylesheet">
<!-- NProgress -->
<link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
<!-- iCheck -->
<link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-
3.3.4.min.css') }}" rel="stylesheet">
<!-- JQVMap -->
<link href="{{ asset('assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}"
rel="stylesheet">
<!-- Custom Theme Style -->
<link href="{{ asset('assets/build/css/custom.min.css') }}" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0;">
<a href="#" class="site_title"><span>Dashboard</span></a>
</div>
<div class="clearfix"></div>
<!-- menu profile quick info -->
<div class="profile clearfix">
    <a href="/home" class="profile_pic">
        <img src="{{ asset('assets/build/images/cropped.png') }}" alt="..." class="img-circle profile_img">
    </a>
<div class="profile_info">
<span>Welcome,</span>
<h2>{{ Auth::user()->name }}</h2>
</div></div>
<!-- /menu profile quick info -->
<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">
<h3>Layanan</h3>
<ul class="nav side-menu">
    <li>
        <a href="/dashboard">
            <i class="fa fa-home"></i> Home
        </a>
    </li>
    <li><a><i class="fa fa-"></i> Daftar Layanan <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a class="dropdown-item" href="{{ route('services.index') }}">Service</a></li>
        <li><a class="dropdown-item" href="{{ route('testimoni.index') }}">Daftar Testimoni</a></li>
    </li>
    </ul>
    @if(Auth::user()->role == 'admin')
    <li><a href="{{ route('berita.index') }}">Berita</a></li>
    <li><a href="{{ route('portofolio.index') }}">Portofolio</a></li>
    <li><a href="{{ route('users.index') }}">User</a></li>
    @endif
    <li><a href="{{ route('contact.index') }}">Contact</a></li>
</div>
</div>
<!-- /sidebar menu -->
<!-- /menu footer buttons -->
<!-- /menu footer buttons -->
</div>
</div>
<!-- top navigation -->
<div class="top_nav">
<div class="nav_menu">
<div class="nav toggle">
<a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>
<nav class="nav navbar-nav">
<ul class=" navbar-right">
<li class="nav-item dropdown open" style="padding-left: 15px;">
<a href="javascript:;" class="user-profile dropdown-toggle" ariahaspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
    <img src="{{ asset('assets/build/images/cropped.png') }}" alt="">{{ Auth::user()->name }}
</a>
<div class="dropdown-menu dropdown-usermenu pull-right" arialabelledby="navbarDropdown">
<a class="dropdown-item" href="javascript:;"> Profile</a>
<a class="dropdown-item" href="javascript:;">
<span class="badge bg-red pull-right">50%</span>
<span>Settings</span>
</a>
<a class="dropdown-item" href="javascript:;">Help</a>
<a class="dropdown-item" href="{{ route('logout') }}"
   onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
    <i class="fa fa-sign-out pullright"></i> Log Out
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
</div>
</li>
<ul class="dropdown-menu list-unstyled msg_list" role="menu" arialabelledby="navbarDropdown1">
<li class="nav-item">
<a class="dropdown-item">
<span class="image"><img src="{{ asset('assets/build/images/cropped.png') }}"
alt="Profile Image" /></span>
<i class="fa fa-angle-right"></i>
</a>
</div>
</li>
</ul>
</li>
</ul>
</nav>
</div>
</div>
<!-- /top navigation -->
<!-- page content -->
<div class="right_col" role="main">
@yield('content')
</div>


<!-- /page content -->

<!-- footer content -->
<footer>
<div class="pull-right">
<a
href="https://colorlib.com"></a>
</div>
<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>
<!-- jQuery -->
<script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')
}}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
<!-- gauge.js -->
<script src="{{ asset('assets/vendors/gauge.js/dist/gauge.min.js') }}"></script><!-- bootstrap-progressbar -->
<script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrapprogressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ asset('assets/vendors/skycons/skycons.js') }}"></script>
<!-- Flot -->
<script src="{{ asset('assets/vendors/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/vendors/Flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')
}}"></script>
<script src="{{ asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ asset('assets/vendors/DateJS/build/date.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
<script src="{{ asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')
}}"></script>
<script src="{{ asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')
}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')
}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('assets/build/js/custom.min.js') }}"></script>
</body>
</html>
