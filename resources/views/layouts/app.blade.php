<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{config('app.name', 'STɅDI')}}</title>

        <!-- import all css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Top Nav-bar Container -->
            @include('layouts.inc.topnavbar')

            <!-- Main Side-bar Container -->
            @include('layouts.inc.mainsidebar')

            <!-- Scripts -->
            @include('layouts.inc.scripts') 

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- alert message -->
                @include('layouts.inc.alert')
                <!-- Contains page content -->
                @yield('content')
            </div>

            <!-- Control Side-bar -->
            @include('layouts.inc.controlsidebar')

            <!-- Footer -->
            <!-- @include('layouts.inc.footer') -->

        </div>

    </body>
</html>
