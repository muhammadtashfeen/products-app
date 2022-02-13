<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products App - @yield('title')</title>

        <!-- Custom fonts for this template-->
        <link href="{{ asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{ asset('sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">

        <div id="wrapper">
            @include('layouts.components.sidebar')

            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    @include('layouts.components.topbar')

                    <div class="container-fluid">

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                        </div>

                        @yield('content')

                    </div>

                    @include('layouts.components.footer')

                </div>
                <!-- End of Main Content -->
            </div>
        </div>

        @include('layouts.components.scripts')
    </body>
</html>
