<!DOCTYPE html>
<html lang="en">
<!-- HEADER -->
@include('backend.includes.header')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('backend.includes.navbartop')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.includes.leftsidebar')
        <!-- Leftsidbar -->

        <!-- Content Wrapper. Contains page content -->
        <!-- MAIN CONTENT -->
        <div class="content-wrapper">
            @yield('maincontent')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('backend.includes.footer')
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        @include('backend.includes.scripts')
</body>

</html>