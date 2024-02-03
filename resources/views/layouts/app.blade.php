<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{route('/')}}/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{route('/')}}/assets/images/favicon.png" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- EXTRA CSS -->
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.dataTables.min.css') }}">

    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/toastr.min.js')}}"></script>
    <script src="{{ asset('js/datatables.min.js')}}"></script>
    <script src="{{ asset('js/jszip.min.js')}}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js')}}"></script>

    @include('layouts.resources.css')

</head>

<body>

    <div class="loader-wrapper">
        <div class="typewriter">
            <h1>DealSwift loading..</h1>
        </div>
    </div>

    <div class="page-wrapper">

        @include('layouts.resources.header')

        <div class="page-body-wrapper">

            @include('layouts.resources.sidebar')

            @include('layouts.resources.chat_sidebar')

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6 main-header">
                                @yield('breadcrumb-title')
                                <h6 class="mb-0">admin panel</h6>
                            </div>
                            <div class="col-lg-6 breadcrumb-right">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('/')}}"><i class="pe-7s-home"></i></a></li>
                                    @yield('breadcrumb-items')
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
                <div class="welcome-popup modal fade" id="loadModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <div class="modal-header"></div>
                                <div class="contain p-30">
                                    <div class="text-center">
                                        <h3>Welcome to creative admin</h3>
                                        <p>start your project with developer friendly admin </p>
                                        <button class="btn btn-primary btn-lg txt-white" type="button" data-dismiss="modal" aria-label="Close">Get Started</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer start-->
            @include('layouts.resources.footer')
        </div>
    </div>
    @include('layouts.resources.script')
</body>



</html>