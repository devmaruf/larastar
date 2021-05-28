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
    <link rel="apple-touch-icon" href="{{asset('assets/backend')}}/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/backend')}}/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

     <!-- BEGIN: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/app-assets/vendors/css/vendors.min.css">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/app-assets/vendors/css/charts/apexcharts.css">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/app-assets/vendors/css/extensions/dragula.min.css">
     <!-- END: Vendor CSS-->

     <!-- BEGIN: Theme CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/app-assets/css/colors.css">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/app-assets/css/components.css">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/app-assets/css/themes/dark-layout.css">
{{--     <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/app-assets/css/themes/semi-dark-layout.css">--}}
     <!-- END: Theme CSS-->

     <!-- BEGIN: Page CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/app-assets/css/pages/dashboard-analytics.css">
     <!-- END: Page CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>

<!-- END: Header-->

@include('layouts.backend.partials.header')

<!-- BEGIN: Main Menu-->
@include('layouts.backend.partials.sidebar')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div id="app" class="content-body">
            //content here

        </div>
    </div>
</div>
<!-- END: Content-->

<!-- demo chat-->
@include('layouts.backend.partials.chat')

<!-- BEGIN: Footer-->

@include('layouts.backend.partials.footer')
<!-- END: Footer-->
<script src="{{asset('assets/backend')}}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
{{--<script src="{{asset('assets/backend')}}/app-assets/vendors/js/charts/apexcharts.min.js"></script>--}}
{{--<script src="{{asset('assets/backend')}}/app-assets/vendors/js/extensions/dragula.min.js"></script>--}}
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
{{--<script src="{{asset('assets/backend')}}/app-assets/js/core/app-menu.js"></script>--}}
<script src="{{asset('assets/backend')}}/app-assets/js/core/app.js"></script>
<script src="{{asset('assets/backend')}}/app-assets/js/scripts/components.js"></script>
<script src="{{asset('assets/backend')}}/app-assets/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('assets/backend')}}/app-assets/js/scripts/pages/dashboard-analytics.js"></script>

<!-- END: Page JS-->
<script src="{{ asset('js/all.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
<!-- END: Body-->

</html>

