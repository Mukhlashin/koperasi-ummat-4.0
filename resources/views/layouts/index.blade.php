<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Batera">
        <meta name="keywords" content="Batera">
        <meta name="author" content="Batera">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Batera - @yield('title')</title>
    <link rel="apple-touch-icon" href="/app-assets/logo-wp.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/logo-wp.png">
    <link href="/app-assets/fonts/fonts.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/app.min.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/plugins/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    @yield('style')
    <style>
    .main-menu.menu-light .navigation>li ul li>a {
        padding: 8px 18px 8px 25px;
    }
    </style>
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark" style="background-color: #92CB48;">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                            <i class="ft-menu font-large-1"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="#">
                            <img class="brand-logo" alt="logo" src="/app-assets/logo-wp.png">
                            <h5 class="brand-text">Panel Admin</h5>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block float-right">
                        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                            <i class="toggle-icon font-medium-3 white ft-toggle-left" data-ticon="ft-toggle-right"></i>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                            <i class="la la-ellipsis-v"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="mr-1">Hello,
                                    <span class="user-name text-bold-700">
                                        {{ Auth::user()->username }}
                                    </span>
                                </span>
                                <span class="avatar avatar-online">
                                    <img src="/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar">
                                    <i></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="/sign-out">
                                    <i class="ft-log-out"></i> Keluar
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">

        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item menu-navigasi">
                    <a href="/home">
                        <i class="la la-home"></i>
                        <span class="menu-title">Halaman home</span>
                    </a>
                </li>
                <li class="nav-item menu-navigasi">
                    <a href="/manajemen-pelayan">
                        <i class="la la-user"></i>
                        <span class="menu-title">Manajemen pelayan</span>
                    </a>
                </li>
                <li class="nav-item menu-navigasi">
                    <a href="/manajemen-meja">
                        <i class="la la-database"></i>
                        <span class="menu-title">Manajemen meja</span>
                    </a>
                </li>
                <li class="nav-item menu-navigasi">
                    <a href="/manajemen-kategori-menu">
                        <i class="la la-database"></i>
                        <span class="menu-title">Manajemen kategori menu</span>
                    </a>
                </li>
                <li class="nav-item menu-navigasi">
                    <a href="/manajemen-bahan">
                        <i class="la la-database"></i>
                        <span class="menu-title">Manajemen bahan</span>
                    </a>
                </li>
                <li class="nav-item menu-navigasi">
                    <a href="/manajemen-menu">
                        <i class="la la-database"></i>
                        <span class="menu-title">Manajemen menu</span>
                    </a>
                </li>
                <li class="nav-item menu-navigasi">
                    <a href="/jurnal">
                        <i class="la la-book"></i>
                        <span class="menu-title">Jurnal</span>
                    </a>
                </li>
                <li class="nav-item menu-navigasi">
                    <a href="/laporan-keuangan">
                        <i class="la la-money"></i>
                        <span class="menu-title">Laporan keuangan</span>
                    </a>
                </li>
                <li class="nav-item menu-navigasi">
                    <a href="/riwayat-aktivitas">
                        <i class="la la-history"></i>
                        <span class="menu-title">Riwayat aktivitas</span>
                    </a>
                </li>
                <!--<li class="nav-item menu-navigasi">-->
                <!--    <a href="/jurnall">-->
                <!--        <i class="la la-book"></i>-->
                <!--        <span class="menu-title">Jurnal</span>-->
                <!--    </a>-->
                <!--</li>-->
            </ul>
        </div>

    </div>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-3">
                    @yield('content-header')
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020
                <a class="text-bold-800 grey darken-2" href="" target="_blank">Batera</a>, All rights reserved. </span>
            <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with
                <i class="ft-heart pink"></i>
            </span>
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/scripts/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="/app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
    <!-- <script src="/ckeditor/ckeditor.js"></script> -->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/scripts/forms/select/form-select2.min.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    @if(session('OK'))
        <script>
            toastr.success('{{ session("OK") }}', 'Success!');
        </script>
    @endif
    @if(session('ERR'))
        <script>
            toastr.error('{{ session("ERR") }}', 'Error!');
        </script>
    @endif
    <script>
        let apiBaseUrl = "{{ url('/') }}/api";

        $(document).ready(function() {
        // get current URL path and assign 'active' class
        console.log(apiBaseUrl);
        let pathname = window.location.pathname;
        $('.nav-item a[href="'+pathname+'"]').parent().addClass('active');
        })
        let datatable = $(".datatable");
        if (datatable != null) {
            $(".datatable").DataTable();
        }
    </script>
    @yield('script')
    <!-- END PAGE LEVEL JS-->

</body>

</html>
