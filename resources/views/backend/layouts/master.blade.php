{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{asset('backend')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend')}}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/vendors/css/extensions/dragula.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/app-assets/css/pages/dashboard-analytics.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/assets/css/style.css">
    <!-- END: Custom CSS-->
 @livewireStyles
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    @include('backend.layouts.navbar')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('backend.layouts.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
   @yield('content')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('backend.layouts.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('backend')}}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{{asset('backend')}}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="{{asset('backend')}}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="{{asset('backend')}}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->
    <script src="{{asset('backend')}}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{asset('backend')}}/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('backend')}}/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="{{asset('backend')}}/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="{{asset('backend')}}/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{asset('backend')}}/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{asset('backend')}}/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{asset('backend')}}/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend')}}/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{asset('backend')}}/app-assets/vendors/js/extensions/dragula.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend')}}/app-assets/js/core/app-menu.js"></script>
    <script src="{{asset('backend')}}/app-assets/js/core/app.js"></script>
    <script src="{{asset('backend')}}/app-assets/js/scripts/components.js"></script>
    <script src="{{asset('backend')}}/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend')}}/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="{{asset('backend')}}/app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->


 @livewireScripts
  @stack('scripts')
</body>
<!-- END: Body-->

</html>


