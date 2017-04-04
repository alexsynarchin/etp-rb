<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{URL::asset('assets/dashboard/css/styles.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
               <a href="" class="logo">
                   <i class="icon-c-logo"> <img src="{{URL::asset('assets/dashboard/images/logo-xs.png')}}" /> </i>
                   <span><img src="{{URL::asset('assets/dashboard/images/logo.png')}}"></span>
               </a>
                <!-- Image Logo here -->
                <!--<a href="index.html" class="logo">-->
                <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                <!--</a>-->
            </div>
        </div>
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="pull-left">
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="md md-menu"></i>
                        </button>
                        <span class="clearfix"></span>
                </div>
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false"><i class="ti-user"></i> Василий Иванов<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Мой профиль</a></li>
                            <li><a href="#">Моя организация</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="ti-power-off m-r-10 text-danger"></i>Выйти</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar start ========== -->

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li>
                        <a href="" class="waves-effect"><i class="ti-home"></i> <span> Главная </span> </a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="ti-plus"></i> <span> Новая закупка </span> </a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="ti-shopping-cart"></i> <span>Мои закупки </span> </a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="ti-comment-alt"></i> <span> Запросы разъяснений </span> </a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="ti-layout-grid4-alt"></i> <span> Реестр организаций </span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ========== Left Sidebar end ========== -->

    <!-- ========== main content start ========== -->
    <div class="content-page">

        <!-- content -->
        <div class="content">
            @yield('content')
        </div>

        <!-- content -->

        <!-- footer -->
        <footer class="footer">
           Единая торговая площадка Республики Башкортостан © 2017
        </footer>
    </div>

    <!-- ========== main content end ========== -->


    <!-- ========== Right sidebar start ========== -->
    <div class="side-bar right-bar nicescroll">
        ...
    </div>

    <!-- ========== Right sidebar end ========== -->

</div>
<!-- scripts -->
<script src="{{URL::asset('assets/dashboard/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/dashboard/js/jquery.core.js')}}"></script>
<script src="{{URL::asset('assets/dashboard/js/jquery.app.js')}}"></script>

</body>
</html>

