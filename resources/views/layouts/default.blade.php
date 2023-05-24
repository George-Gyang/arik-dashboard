<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.head')

</head>

<body>
    @include('includes.preloader')


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('includes.nav-header')

        @include('includes.fix-sidebar')

        @include('includes.header')

        @include('includes.side-bar')

        @yield('content')

        @include('includes.footer')

    </div>
    <!--**********************************
    Main wrapper end
***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->

    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> --}}
    <!-- Apex Chart -->
    <script src="./vendor/apexchart/apexchart.js"></script>

    <!-- Vectormap -->
    <!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>

    <!-- Chartist -->
    <script src="./vendor/chartist/js/chartist.min.js"></script>

    <!-- Dashboard 1 -->
    <script src="./js/dashboard/dashboard-1.js"></script>
    <!-- Svganimation scripts -->
    <script src="./vendor/svganimation/vivus.min.js"></script>
    <script src="./vendor/svganimation/svg.animation.js"></script>
</body>

</html>
