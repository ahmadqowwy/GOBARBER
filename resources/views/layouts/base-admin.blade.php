<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('title')
    <!-- plugins:css -->

    <link rel="stylesheet" href="{{ asset('assets/skydash/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/skydash/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/skydash/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    {{-- Datatables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="{{ asset('assets/skydash/vendors/ti-icons/css/themify-icons.css') }}">
    <!-- End plugin css for this page -->
    @yield('css')
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/skydash/css/vertical-layout-light/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/skydash/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.partials.admin.navbar-admin')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('layouts.partials.admin.sidebar-admin')
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
                <!-- content-wrapper ends -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('assets/skydash/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/skydash/vendors/chart.js/Chart.min.js') }}"></script>
    {{-- Datatables --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/skydash/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/skydash/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/skydash/js/template.js') }}"></script>
    <script src="{{ asset('assets/skydash/js/settings.js') }}"></script>
    <script src="{{ asset('assets/skydash/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/skydash/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/skydash/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ session('error') }}',
            });
        </script>
    @endif

    {{-- Custom JS --}}
    @yield('js')

</body>

</html>
