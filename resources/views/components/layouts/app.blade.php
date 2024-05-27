<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>NORSU-G ALUMNI</title>
        <link rel="shortcut icon" type="image/x-icon" href="resources/img/logo/logo.png">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        {{-- @livewireStyles --}}

        <link href="izitoast/dist/css/iziToast.min.css" rel="stylesheet" type="text/css" />
        <!-- Vendor styles -->
        <link rel="stylesheet" href="resources/vendors/zwicon/zwicon.min.css">
        <link rel="stylesheet" href="resources/vendors/animate.css/animate.min.css">
        <link rel="stylesheet" href="resources/vendors/overlay-scrollbars/OverlayScrollbars.min.css">
        <link rel="stylesheet" href="resources/vendors/fullcalendar/core/main.min.css">
        <link rel="stylesheet" href="resources/vendors/fullcalendar/daygrid/main.min.css">
    
        <!-- App styles -->
        <link rel="stylesheet" href="resources/css/app.min.css">
        <script src='google_analytics_auto.js'></script>

    </head>
    <body data-sa-theme="2">
       <x-livewire-notification::toast />
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>
            
            <!-- BEGIN: Header-->
            @include('layouts.shared.header')
            <!-- END: Header-->
            
            <!-- BEGIN: Main Menu-->
            @include('layouts.shared.main-nav')
            <!-- END: Main Menu-->
            
            <div class="themes">
                <div class="scrollbar">
                    <a href="" class="themes__item active" data-sa-value="1"><img src="resources/img/bg/1.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="2"><img src="resources/img/bg/2.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="3"><img src="resources/img/bg/3.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="4"><img src="resources/img/bg/4.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="5"><img src="resources/img/bg/5.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="6"><img src="resources/img/bg/6.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="7"><img src="resources/img/bg/7.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="8"><img src="resources/img/bg/8.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="9"><img src="resources/img/bg/9.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="10"><img src="resources/img/bg/10.jpg" alt=""></a>
                </div>
            </div>
            
            <!-- BEGIN: Content-->
            <section class="content">

                {{ $slot }}
                
                <!-- BEGIN: Footer-->
                @include('layouts.shared.footer')
                <!-- END: Footer-->

            </section>
            <!-- END: Content-->
            
            
        </main>

        <script src="izitoast/dist/js/iziToast.min.js"></script>
        
        <!-- Javascript -->
        <!-- Vendors -->
        <script src="resources/vendors/jquery/jquery.min.js"></script>
        <script src="resources/vendors/popper.js/popper.min.js"></script>
        <script src="resources/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="resources/vendors/overlay-scrollbars/jquery.overlayScrollbars.min.js"></script>

        <script src="resources/vendors/flot/jquery.flot.js"></script>
        <script src="resources/vendors/flot/jquery.flot.resize.js"></script>
        <script src="resources/vendors/flot/flot.curvedlines/curvedLines.js"></script>
        <script src="resources/vendors/peity/jquery.peity.min.js"></script>
        <script src="resources/vendors/jqvmap/jquery.vmap.min.js"></script>
        <script src="resources/vendors/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="resources/vendors/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="resources/vendors/fullcalendar/core/main.min.js"></script>
        <script src="resources/vendors/fullcalendar/daygrid/main.min.js"></script>

        <!-- Vendors: Data tables -->
        <script src="resources/vendors/datatables/jquery.dataTables.min.js"></script>
        <script src="resources/vendors/datatables/datatables-buttons/dataTables.buttons.min.js"></script>
        <script src="resources/vendors/datatables/datatables-buttons/buttons.print.min.js"></script>
        <script src="resources/vendors/jszip/jszip.min.js"></script>
        <script src="resources/vendors/datatables/datatables-buttons/buttons.html5.min.js"></script>

        <!-- App functions and actions -->
        <script src="resources/js/app.min.js"></script>
        <script src="npm/sweetalert2.js"></script>

        @stack('modals')

        {{-- @livewireScripts --}}
        
        @yield('custom_script') 

    </body>
</html>
