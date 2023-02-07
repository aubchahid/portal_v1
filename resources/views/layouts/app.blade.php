<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Portal - {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Portal" name="description" />
    <meta content="Ayoub Chahid" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Dropify css -->
    <link href="{{ asset('plugins/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />
    @livewireStyles
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <!-- LOGO -->
                <div class="navbar-brand-box d-flex align-items-left">
                    <a href="#" class="logo">
                        <i class="mdi mdi-album"></i>
                        <span>
                            Portal
                        </span>
                    </a>

                    <button type="button"
                        class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect waves-light"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="d-flex align-items-center">
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect waves-light"
                            id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Ayoub Chahid</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Profil</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                Paramètres
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Verrouiller le compte </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Se déconnecter </span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="{{ route('stuff.home') }}" class="waves-effect"><i
                                    class="feather-airplay"></i><span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="{{ route('stuff.plans') }}" class="waves-effect"><i
                                    class="feather-folder"></i><span>Plan</span></a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="feather-file"></i><span>Rapport</span></a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="feather-copy"></i><span>Fiches de
                                    controle</span></a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    {{ $slot }}
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    @livewireScripts
    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('assets/pages/fileuploads-demo.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/pages/dashboard-demo.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>

</html>
