<!DOCTYPE html>
<html>
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8">
        <title>@yield('title') Portal Desa | Admin</title>

        <!-- Site favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('style/vendors/images/Siak.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('style/vendors/images/Siak.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('style/vendors/images/Siak.png')}} ">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('style/vendors/styles/core.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('style/vendors/styles/icon-font.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('style/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('style/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('style/vendors/styles/style.css')}}">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-119386393-1');
        </script>
    </head>
<body>
     <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="{{asset('style/vendors/images/Siak.png')}}" alt="" width="160px" height="160px"></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Mohon Menunggu...
            </div>
        </div>
    </div>
    <div class="left-side-bar">

        <div class="brand-logo">
            <a href="index.html">
                <img src="{{asset('style/vendors/images/Siak.png.svg')}}" alt="" class="dark-logo">
                <img src="{{asset('style/vendors/images/icon.png')}}" alt="" class="light-logo" width="100%" height="100%">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="{{ url('dashboard') }}"  class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Beranda</span>
                        </a>
                    <li class="dropdown">
                        <a href="{{ url('tentang') }}"" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-edit2"></span><span class="mtext">Tentang</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('desas') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-edit2"></span><span class="mtext">Desa</span>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-book"></span><span class="mtext">Pemerintahan</span>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('bupati') }}">Bupati</a>
                            </li>
                            <li>
                                <a href="{{ url('wabup') }}">Wakil Bupati</a>
                            </li>
                            <li>
                                <a href="{{ url('sekda') }}">Sekretaris Daerah</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('profile.show') }}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-user"></span><span class="mtext">Profil</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
<div class="container" style="margin-top: 15px;">
    @yield('content')
</div>
<!-- js -->
<script src="{{asset('style/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('style/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('style/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('style/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('style/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('style/vendors/scripts/dashboard.js')}}"></script>

    {{-- <script src="{{asset('style3/vendors/scripts/core.js')}}"></script> --}}
	<script src="{{asset('style/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('style/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('style/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<!-- buttons for Export datatable -->
	<script src="{{asset('style/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{asset('style/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
	<!-- Datatabl -->
	<script src="{{asset('style/vendors/scripts/datatable-setting.js')}}"></script>
</body>
</html>
