<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Police App</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.jpg')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css')}}" />
    <link href="https://cdn.datatables.net/v/bs5/dt-2.3.1/r-3.0.4/datatables.min.css" rel="stylesheet" integrity="sha384-VZ5SOv0sN8QUB1Ls9xY3INaQ6Sbnzwr8TWgdo6z6SIG0UG+Qn/frX3U5GQMNLL3F" crossorigin="anonymous">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

        <!--  App Topstrip -->
        <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
            </div>
        </div>
        <!-- Sidebar Start -->
        @include('components.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('components.navbar')
            <!--  Header End -->
            <div class="body-wrapper-inner">
                <div class="container-fluid">
                    <!--  Row 1 -->
                    @yield('content')
                    @include('components.footer')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js')}}"></script>
    <script src="{{ asset('assets/js/app.min.js')}}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js')}}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.datatables.net/v/bs5/dt-2.3.1/r-3.0.4/datatables.min.js" integrity="sha384-NDaLbE9og/Sm8OMQX0kx6qdK/v/Iue+guiivNVFvwwMgBBrj+grU4qrRou0v+k/B" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script src="{{ asset('js/utils.js')}}"></script>
    <script src="{{ asset('js/dashboard.js')}}"></script>
    <script src="{{ asset('js/vehicles.js')}}"></script>

</body>

</html>
